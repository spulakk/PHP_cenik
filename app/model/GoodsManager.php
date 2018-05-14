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
            ->select("*");
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
     * Create new item in database
     *
     * @param $values
     * @return Nette\Database\Table\ActiveRow
     */
    public function createItem($values)
    {
        return $this->database->table("zbozi")
            ->insert($values);
    }

    /**
     * Edit item in database
     *
     * @param $id
     * @param $values
     * @return bool
     */
    public function editItem($id, $values)
    {
        return $this->database->table("zbozi")
            ->get($id)
            ->update($values);
    }

    /**
     * Delete item from database
     *
     * @param $id
     * @return int
     */
    public function removeItem($id)
    {
        return $this->database->table("zbozi")
            ->get($id)
            ->delete();
    }
}