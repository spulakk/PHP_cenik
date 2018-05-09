<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;
use Ublaboo\DataGrid\Column\Renderer;

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

    public function createComponentItemForm()
    {
        $form = new Form();

        $form->setRenderer(new Renderer());

        $form->getControls();

        $form->addText("code", "Kód")
            ->setAttribute("class", "form-control");

        $form->addText("name", "Název")
            ->setAttribute("class", "form-control");

        $form->addText("price", "Cena")
            ->setAttribute("class", "form-control");

        $form->addSelect("category", "Kategorie", $this->GoodsManager->itemPairs())
            ->setAttribute("class", "form-control");

        $form->addSubmit("send", "Odeslat")
            ->setAttribute("class", "btn btn-primary");

        $form->onSuccess[] = [$this, "itemFormSuccess"];

        return $form;
    }

    public function itemFormSucceess($form, $values)
    {

    }
}