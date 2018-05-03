<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;

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

        $form->addText("code", "Kód");

        $form->addText("name", "Název");

        $form->addText("price", "Cena");

        $form->addSelect("category", "Kategorie", $this->GoodsManager->itemPairs());

        return $form;
    }

    public function ItemFormSucceeded($form, $values)
    {

    }
}