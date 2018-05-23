<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Tomaj\Form\Renderer\BootstrapRenderer;

class SignPresenter extends Nette\Application\UI\Presenter
{
    /**
     * @var \App\Model\UserManager
     */
    public $UserManager;

    public function __construct(\App\Model\UserManager $UserManager)
    {
        $this->UserManager = $UserManager;
    }

    /**
     * Render template Sign:in
     */
    public function renderIn()
    {
        $this->template->page = "Sign:in";
    }

    /**
     * Render template Sign:up
     */
    public function renderUp()
    {
        $this->template->page = "Sign:up";
    }

    /**
     * Create signInForm
     *
     * @return Form
     */
    public function createComponentSignInForm()
    {
        $form = new Form();

        $form->setRenderer(new BootstrapRenderer());

        $form->addText("jmeno", "Jméno:")
            ->setRequired();

        $form->addPassword("heslo", "Heslo:")
            ->setRequired();

        $form->addCheckbox("pamatovat", " Zapamatovat si mě");

        $form->addSubmit("prihlasit", "Přihlásit");

        $form->addSubmit("registrovat", "Registrovat")
            ->setValidationScope(false)
            ->setAttribute("class", "btn btn-secondary");

        $form->onSuccess[] = [$this, "signInFormSuccess"];

        return $form;
    }

    /**
     * Callback on successful signInForm
     *
     * @param Form $form
     * @param Nette\Utils\ArrayHash $values
     * @throws Nette\Application\AbortException
     */
    public function signInFormSuccess(Form $form, Nette\Utils\ArrayHash $values)
    {
        if ($form["prihlasit"]->isSubmittedBy())
        {
            try
            {
                $this->UserManager->signIn($values->jmeno, $values->heslo, $values->pamatovat);
                if ($this->getUser()->isInRole(0))
                {
                    $this->UserManager->signOut();
                    $this->flashMessage("Váš účet byl zablokován. Obraťte se na správce stránky pro více informací.", "danger");
                    $this->redirect("Homepage:");
                }
                else
                {
                    $this->flashMessage("Přihlášení proběhlo úspěšně.", "success");
                    $this->redirect("Homepage:");
                }
            }
            catch (Nette\Security\AuthenticationException $e)
            {
                $this->flashMessage("Uživatelské jméno nebo heslo je nesprávné.", "danger");
            }
        }

        if ($form["registrovat"]->isSubmittedBy())
        {
            $this->redirect("Sign:up");
        }
    }

    /**
     * Create signUpForm
     *
     * @return Form
     */
    public function createComponentSignUpForm()
    {
        $form = new Form();

        $form->setRenderer(new BootstrapRenderer());

        $form->addText("jmeno", "Jméno:")
            ->setRequired()
            ->addCondition(Form::FILLED)
                ->addRule(Form::MAX_LENGTH, "Jméno nesmí obsahovat více než 20 znaků.", 20);

        $form->addEmail("email", "Email:")
            ->setRequired();

        $form->addPassword("heslo", "Heslo:")
            ->setRequired()
            ->addCondition(Form::FILLED)
                ->addRule(Form::MIN_LENGTH, "Heslo musí obsahovat alespoň 6 znaků.", 6);

        $form->addPassword("heslo_overeni", "Heslo znovu:")
            ->setRequired()
            ->addCondition(Form::FILLED)
                ->addRule(Form::EQUAL, "Zadaná hesla se neshodují.", $form["heslo"]);

        $form->addSubmit("registrovat", "Registrovat");

        $form->onSuccess[] = [$this, "signUpFormSuccess"];

        return $form;
    }

    /**
     * Callback on successful signUpForm
     *
     * @param Form $form
     * @param Nette\Utils\ArrayHash $values
     * @throws Nette\Application\AbortException
     */
    public function signUpFormSuccess(Form $form, Nette\Utils\ArrayHash $values)
    {
        if (!$this->UserManager->userExists($values->jmeno)) {
            $this->UserManager->createUser([
                "jmeno" => $values->jmeno,
                "email" => $values->email,
                "heslo" => Nette\Security\Passwords::hash($values->heslo)
            ]);

            $this->flashMessage("Registrace byla úspěšná.", "success");
            $this->redirect("Sign:in");
        }
        else {
            $this->flashMessage("Uživatel s tímto jménem již existuje.", "danger");
        }
    }

    /**
     * Sign:out action
     *
     * @throws Nette\Application\AbortException
     */
    public function actionOut()
    {
        $this->UserManager->signOut();

        $this->redirect("Homepage:");
    }
}