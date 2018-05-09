<?php

namespace App\Presenters;

use Nette;

class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /**
     * @var \App\Model\GoodsManager
     */
    public $GoodsManager;

    public function __construct(\App\Model\GoodsManager $GoodsManager)
    {
        $this->GoodsManager = $GoodsManager;
    }

    /**
     * Render template Homepage:default
     */
    public function renderDefault()
    {
        $this->template->page = "Homepage:default";
    }

    /**
     * Create goodsGrid
     *
     * @return \Ublaboo\DataGrid\DataGrid
     */
    protected function createComponentGoodsGrid()
    {
        $grid = new \Ublaboo\DataGrid\DataGrid();

        $grid->setDataSource($this->GoodsManager->getGoodsGrid());

        $grid->getPrimaryKey("id");

        $grid->addColumnNumber("id", "ID")
            ->addAttributes(["class" => "col-xs-1"])
            ->setSortable();

        $grid->addColumnText("nazev", "Název")
            ->addAttributes(["class" => "col-xs-4"])
            ->setSortable()
            ->setFilterText()
            ->setPlaceholder("Hledat...");

        $grid->addColumnText("kod", "Kód")
            ->addAttributes(["class" => "col-xs-2"]);

        $grid->addColumnText("cena", "Cena")
            ->addAttributes(["class" => "col-xs-3"])
            ->setSortable();

        $grid->addColumnText("id_kategorie", "Kategorie")
            ->addAttributes(["class" => "col-xs-2"])
            ->setReplacement([1 => "S", 2 => "M", 3 => "L", 4 => "XL"])
            ->setFilterSelect(["" => "Vše", 1 => "S", 2 => "M", 3 => "L", 4 => "XL"]);

        return $grid;
    }
}