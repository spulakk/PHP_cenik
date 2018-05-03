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
    public function getTable()
    {
        return $this->database->table("zbozi")
            ->joinWhere("kategorie","zbozi.id_kategorie = kategorie.id")
            ->select("zbozi.*, kategorie.kategorie");
    }

    /**
     * Array of categories and their IDs
     *
     * @return array
     */
    public function itemPairs()
    {
        return $this->database->table("kategorie")->fetchPairs("id", "kategorie");
    }
}