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
            ->onInvalidClick[] = [$this, "redirectToRegistration"];

        $form->onSuccess[] = [$this, "signInFormSuccess"];

        return $form;
    }

    /**
     * Callback on successful signInForm
     *
     * @param Form $form
     * @param Nette\Utils\ArrayHash $values
     */
    public function signInFormSuccess(Form $form, Nette\Utils\ArrayHash $values)
    {
        $this->flashMessage("Přihlášení bylo úspěšné.", "success");
        $this->redirect("Homepage:");
    }

    public function redirectToSignUp()
    {
        $this->redirect("Sign:up");
    }

    /**
     * Render template Sign:up
     */
    public function renderUp()
    {
        $this->template->page = "Sign:up";
    }
}