<?php

namespace App\Model;

use Nette;

class UserManager
{
    /**
     * @var Nette\Database\Context
     */
    private $database;

    public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }
}
