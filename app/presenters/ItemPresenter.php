<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Tomaj\Form\Renderer\BootstrapRenderer;

class ItemPresenter extends Nette\Application\UI\Presenter
{
    /**
     * @var \App\Model\GoodsManager
     */
    private $GoodsManager;

    public function __construct(\App\Model\GoodsManager $GoodsManager)
    {
        $this->GoodsManager = $GoodsManager;
    }

    /**
     * Render template Item:create
     */
    public function renderCreate()
    {
        $this->template->page = "Item:create";
    }

    /**
     * Create itemForm
     *
     * @return Form
     */
    public function createComponentItemForm()
    {
        $form = new Form();

        $form->setRenderer(new BootstrapRenderer());

        $form->addText("kod", "Kód:")
            ->setRequired();

        $form->addText("nazev", "Název:")
            ->setRequired();

        $form->addText("cena", "Cena:")
            ->setRequired();

        $form->addSelect("id_kategorie", "Kategorie:", $this->GoodsManager->itemPairs());

        $form->addSubmit("odeslat", "Odeslat");

        $form->onSuccess[] = [$this, "itemFormSuccess"];

        return $form;
    }

    /**
     * Callback on successful itemForm
     *
     * @param Form $form
     * @param Nette\Utils\ArrayHash $values
     */
    public function itemFormSuccess(Form $form, Nette\Utils\ArrayHash $values)
    {
        $this->GoodsManager->createItem($values);

        $this->flashMessage("Položka byla přidána do ceníku.", "success");
        $this->redirect("this");
    }
}