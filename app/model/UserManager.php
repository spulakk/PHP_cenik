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


    public function signIn($username, $password)
    {
        $this->User->setAuthenticator($this->BasicAuthenticator);
        $this->User->login($username, $password);
    }
}
