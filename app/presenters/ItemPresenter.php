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

        $c = $form->addText("code", "Kód:")
            ->setRequired();

        $form->addText("name", "Název:")
            ->setRequired();

        $form->addText("price", "Cena:")
            ->setRequired();

        $form->addSelect("category", "Kategorie:", $this->GoodsManager->itemPairs());

        $form->addSubmit("send", "Odeslat");

        $form->onSuccess[] = [$this, "itemFormSuccess"];

        return $form;
    }

    /**
     * Callback on successful itemForm
     *
     * @param $form
     * @param $values
     */
    public function itemFormSuccess($form, $values)
    {
        $this->GoodsManager->createItem([
            "kod" => $values->code,
            "nazev" => $values->name,
            "cena" => $values->price,
            "id_kategorie" => $values->category
        ]);

        $this->flashMessage("Přidáno.", "success");
    }
}