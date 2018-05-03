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
     * Create goodsGrid
     *
     * @return \Ublaboo\DataGrid\DataGrid
     */
    protected function createComponentGoodsGrid()
    {
        $grid = new \Ublaboo\DataGrid\DataGrid();

        $grid->setDataSource($this->GoodsManager->getTable());

        $grid->getPrimaryKey("id");

        $grid->addColumnNumber("id", "ID")
            ->addAttributes(["class" => "col-xs-1"])
            ->setSortable();

        $grid->addColumnText("nazev", "Název")
            ->addAttributes(["class" => "col-xs-4"])
            ->setSortable()
            ->setFilterText("nazev", "Název");

        $grid->addColumnText("kod", "Kód")
            ->addAttributes(["class" => "col-xs-2"]);

        $grid->addColumnText("cena", "Cena")
            ->addAttributes(["class" => "col-xs-3"])
            ->setSortable();

        $grid->addColumnText("kategorie", "Kategorie")
            ->addAttributes(["class" => "col-xs-2"])
            ->setFilterText("kategorie", "Kategorie")
            ->setExactSearch();

        return $grid;
    }
}