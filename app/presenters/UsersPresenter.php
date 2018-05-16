<?php

namespace App\Presenters;

use Nette;

class UsersPresenter extends Nette\Application\UI\Presenter
{
    /**
     * @var \App\Model\UserManager
     */
    public $UserManager;

    public function __construct(\App\Model\UserManager $UserManager)
    {
        $this->UserManager = $UserManager;
    }

    /**
     * Render template Users:default
     */
    public function renderDefault()
    {
        $this->template->page = "Users:default";
    }

    /**
     * create usersGrid
     *
     * @return \Ublaboo\DataGrid\DataGrid
     * @throws \Ublaboo\DataGrid\Exception\DataGridColumnStatusException
     */
    public function createComponentUsersGrid()
    {
        $grid = new \Ublaboo\DataGrid\DataGrid();

        $grid->setDataSource($this->UserManager->getUsersGrid());

        $grid->getPrimaryKey("id");

        $grid->addColumnText("jmeno", "Jméno")
            ->addAttributes(["class" => "col-xs-5"]);

        $grid->addColumnText("email", "Email")
            ->addAttributes(["class" => "col-xs-5"]);

        $grid->addColumnStatus("role", "Role")
            ->addAttributes(["class" => "col-xs-2"])
            ->addOption(0, "user")
                ->setClass("btn-warning")
                ->endOption()
            ->addOption(1, "admin")
                ->setClass("btn-success")
                ->endOption()
            ->onChange[] = [$this, "statusChange"];
        //bower install popper.js (--save)

        return $grid;
    }

    public function statusChange($id, $new_status)
    {
        if (in_array($new_status, [0, 1]))
        {
            $this->UserManager->changeRole($id, $new_status);
        }
        $status_text = ["user", "admin"][$new_status];
        $this['usersGrid']->redrawItem($id);
    }
}