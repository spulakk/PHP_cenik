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
     * Fetch data from database
     *
     * @return Nette\Database\Table\Selection
     */
    public function getGoodsGrid()
    {
        return $this->Database->table("zbozi")
            ->select("*");
    }

    /**
     * Check if item already exists
     *
     * @param $name
     * @return bool
     */
    public function itemExists($name)
    {
        $user = $this->Database->table("zbozi")
            ->where("nazev", $name)
            ->fetch();
        if (!$user) {
            return false;
        }
        else {
            return true;
        }
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
     * Create new item in database
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
     * Edit item in database
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
     * Delete item from database
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