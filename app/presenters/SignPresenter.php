<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Tomaj\Form\Renderer\BootstrapRenderer;
use Tracy\Debugger;

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

        $form->addSubmit("prihlasit", "Přihlásit");

        $form->addSubmit("registrovat", "Registrovat")
            ->onInvalidClick[] = [$this, "redirectToSignUp"];

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
        Debugger::barDump($values["jmeno"]);
        Debugger::barDump($values["heslo"]);
        try {
            $this->UserManager->signIn($values["jmeno"], $values["heslo"]);
            $this->flashMessage("Přihlášení proběhlo úspěšně.", "success");
            $this->redirect("Homepage:");
        }
        catch (Nette\Security\AuthenticationException $e) {
            $this->flashMessage("Uživatelské jméno nebo heslo je nesprávné.", "danger");
        }
    }

    /**
     * Redirect to Sign:up template
     *
     * @throws Nette\Application\AbortException
     */
    public function redirectToSignUp()
    {
        $this->redirect("Sign:up");
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

        $form->addPassword("password1", "Heslo:")
            ->setRequired();

        $form->addPassword("password2", "Heslo znovu:")
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
        //handle registrace
        $this->flashMessage("Registrace byla úspěšná.", "success");
        $this->redirect("Sign:in");
    }

    public function actionOut()
    {
        $this->getUser()->logout();
        $this->flashMessage('Odhlášení bylo úspěšné.');
        $this->redirect('Homepage:');
    }
}