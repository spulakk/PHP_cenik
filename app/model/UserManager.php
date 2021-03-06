<?php

namespace App\Model;

use Nette;

class UserManager
{
    /**
     * @var Nette\Database\Context
     */
    private $Database;

    /**
     * @var Nette\Security\User
     */
    private $User;

    /**
     * @var \App\Authenticator\BasicAuthenticator
     */
    private $BasicAuthenticator;

    public function __construct(Nette\Database\Context $Database, Nette\Security\User $User, \App\Authenticator\BasicAuthenticator $BasicAuthenticator)
    {
        $this->Database = $Database;
        $this->User = $User;
        $this->BasicAuthenticator = $BasicAuthenticator;
    }

    /**
     * Login
     *
     * @param $username
     * @param $password
     * @param $remember
     * @throws Nette\Security\AuthenticationException
     */
    public function signIn($username, $password, $remember)
    {
        $this->User->setAuthenticator($this->BasicAuthenticator);
        $this->User->login($username, $password);
        if ($remember == true)
        {
            $this->User->setExpiration("14 days");
        }
        else {
            $this->User->setExpiration("1 hours");
        }
    }

    /**
     * Logout
     */
    public function signOut()
    {
        $this->User->logout();
    }

    /**
     * Fetch data from database
     *
     * @return Nette\Database\Table\Selection
     */
    public function getUsersGrid()
    {
        return $this->Database->table("uzivatele")
            ->select("*");
    }

    /**
     * Check if user already exists
     *
     * @param $name
     * @return bool
     */
    public function userExists($name)
    {
        $user = $this->Database->table("uzivatele")
            ->where("jmeno", $name)
            ->fetch();
        if (!$user) {
            return false;
        }
        else {
            return true;
        }
    }

    /**
     * Create new user in database
     *
     * @param $values
     * @return Nette\Database\Table\ActiveRow
     */
    public function createUser($values)
    {
        return $this->Database->table("uzivatele")
            ->insert($values);
    }

    /**
     * Change user's role
     *
     * @param $id
     * @param $new_value
     * @return bool
     */
    public function changeRole($id, $new_value)
    {
        return $this->Database->table("uzivatele")
            ->get($id)
            ->update([
                "id_role" => $new_value
            ]);
    }

    /**
     * Delete user from database
     *
     * @param $id
     * @return int
     */
    public function removeUser($id)
    {
        return $this->Database->table("uzivatele")
            ->get($id)
            ->delete();
    }
}
