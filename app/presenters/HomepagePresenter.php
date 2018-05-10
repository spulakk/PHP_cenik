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

        $grid->addInlineEdit()
                ->onControlAdd[] = function($container) {
                    $container->addText('nazev', '');
                    $container->addText('kod', '');
                    $container->addText('cena', '');
                    $container->addSelect('id_kategorie', '', [
                        1 => 'S',
                        2 => 'M',
                        3 => 'L',
                        4 => 'XL'
                    ]);
                };

        $grid->getInlineEdit()->onSetDefaults[] = function($container, $item) {
            $container->setDefaults([
                'nazev' => $item->nazev,
                'kod' => $item->kod,
                'cena' => $item->cena,
                'id_kategorie' => $item->id_kategorie
            ]);
        };

        $grid->getInlineEdit()->onSubmit[] = function($id, $values) {
            $this->flashMessage("ahoj");
            $this->redrawControl('flashes');
        };

        $grid->getInlineEdit()
            ->setIcon('edit')
            ->setClass("btn btn-sm btn-primary")
            ->setShowNonEditingColumns(true);

        return $grid;
    }
}