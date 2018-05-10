<?php

namespace App\Model;

use Nette;

class GoodsManager
{
    /**
     * @var Nette\Database\Context
     */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    /**
     * Fetch data from database
     *
     * @return Nette\Database\Table\Selection
     */
    public function getGoodsGrid()
    {
        return $this->database->table("zbozi")
            ->fetchAll();
    }

    /**
     * Array of categories and their IDs
     *
     * @return array
     */
    public function itemPairs()
    {
        return $this->database->table("kategorie")
            ->fetchPairs("id", "kategorie");
    }

    /**
     *
     *
     * @param Nette\Utils\ArrayHash $values
     * @return Nette\Database\Table\ActiveRow
     */
    public function createItem(Nette\Utils\ArrayHash $values)
    {
        return $this->database->table("zbozi")
            ->insert($values);
    }
}