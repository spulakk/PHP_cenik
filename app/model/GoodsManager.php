<?php

namespace App\Model;

use Nette;

class GoodsManager
{
    /**
     * @var Nette\Database\Context
     */
    private $Database;
    
    public function __construct(Nette\Database\Context $Database)
    {
        $this->Database = $Database;
    }

    /**
     * Fetch data from Database
     *
     * @return Nette\Database\Table\Selection
     */
    public function getGoodsGrid()
    {
        return $this->Database->table("zbozi")
            ->select("*");
    }

    /**
     * Array of categories and their IDs
     *
     * @return array
     */
    public function itemPairs()
    {
        return $this->Database->table("kategorie")
            ->fetchPairs("id", "kategorie");
    }

    /**
     * Create new item in Database
     *
     * @param $values
     * @return Nette\Database\Table\ActiveRow
     */
    public function createItem($values)
    {
        return $this->Database->table("zbozi")
            ->insert($values);
    }

    /**
     * Edit item in Database
     *
     * @param $id
     * @param $values
     * @return bool
     */
    public function editItem($id, $values)
    {
        return $this->Database->table("zbozi")
            ->get($id)
            ->update($values);
    }

    /**
     * Delete item from Database
     *
     * @param $id
     * @return int
     */
    public function removeItem($id)
    {
        return $this->Database->table("zbozi")
            ->get($id)
            ->delete();
    }
}