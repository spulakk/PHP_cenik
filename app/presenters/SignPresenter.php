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
                    $this->flashMessage("Váš účet byl zablokován.", "danger");
                    $this->redirect("Homepage:");
                }
                $this->flashMessage("Přihlášení proběhlo úspěšně.", "success");
                $this->redirect("Homepage:");
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
            ->setRequired();

        $form->addEmail("email", "Email:")
            ->setRequired();

        $form->addPassword("heslo", "Heslo:")
            ->setRequired();

        $form->addPassword("heslo_overeni", "Heslo znovu:")
            ->setRequired();

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
        if ($values->heslo == $values->heslo_overeni) {
            $this->UserManager->createUser([
                "jmeno" => $values->jmeno,
                "email" => $values->email,
                "heslo" => Nette\Security\Passwords::hash($values->heslo)
            ]);

            $this->flashMessage("Registrace byla úspěšná.", "success");
            $this->redirect("Sign:in");
        }
        else {
            $this->flashMessage("Zadaná hesla se neshodují.", "danger");
        }
    }

    /**
     * @throws Nette\Application\AbortException
     */
    public function actionOut()
    {
        $this->UserManager->signOut();

        $this->flashMessage("Odhlášení bylo úspěšné.", "success");
        $this->redirect("Homepage:");
    }
}