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
     *
     * @throws Nette\Application\AbortException
     */
    public function renderDefault()
    {
        if (!$this->getUser()->isInRole(2))
        {
            $this->flashMessage("Na tuto stránku nemáte povolený přístup.", "danger");
            $this->redirect("Homepage:");
        }
        $this->template->page = "Users:default";
    }

    /**
     * create usersGrid
     *
     * @return \Ublaboo\DataGrid\DataGrid
     * @throws \Ublaboo\DataGrid\Exception\DataGridColumnStatusException
     * @throws \Ublaboo\DataGrid\Exception\DataGridException
     */
    public function createComponentUsersGrid()
    {
        $grid = new \Ublaboo\DataGrid\DataGrid();

        $grid->setDataSource($this->UserManager->getUsersGrid());

        $grid->addColumnText("jmeno", "Jméno")
            ->addAttributes(["class" => "col-sm-5"]);

        $grid->addColumnText("email", "Email")
            ->addAttributes(["class" => "col-sm-5"]);

        $grid->addColumnStatus("id_role", "Role")
            ->addAttributes(["class" => "col-sm-2"])
            ->addOption(1, "user")
                ->setClass("btn-sm btn-outline-danger")
                ->endOption()
            ->addOption(2, "admin")
                ->setClass("btn-sm btn-outline-success")
                ->endOption()
            ->onChange[] = [$this, "statusChange"];

        $grid->addAction("smazat", "", "smazat!")
            ->setTitle("Smazat")
            ->setIcon("trash")
            ->setClass("btn btn-sm btn-danger ajax");

        return $grid;
    }

    public function statusChange($id, $new_status)
    {
        $this->UserManager->changeRole($id, $new_status);
        $this['usersGrid']->redrawItem($id);
    }

    public function handleSmazat($id)
    {
        $this->UserManager->removeUser($id);
        $this->flashMessage("Uživatel byl odstraněn.", "success");
        $this->redrawControl("flashes");
        $this["usersGrid"]->reload();
    }
}