<?php

namespace App\Authenticator;

use Nette;

class BasicAuthenticator implements Nette\Security\IAuthenticator
{
    /**
     * @var Nette\Database\Context
     */
    public $Database;

    public function __construct(Nette\Database\Context $Database)
    {
        $this->Database = $Database;
    }

    /**
     * Perform an authentication against database
     *
     * @param array $credentials
     * @return Nette\Security\Identity|Nette\Security\IIdentity
     * @throws Nette\Security\AuthenticationException
     */
    public function authenticate(array $credentials)
    {
        list($username, $password) = $credentials;

        $row = $this->Database->table("uzivatele")
            ->where("jmeno", $username)->fetch();

        if (!$row) {
            throw new Nette\Security\AuthenticationException("Uživatel nenalezen.");
        }

        if (!Nette\Security\Passwords::verify($password, $row->heslo)) {
            throw new Nette\Security\AuthenticationException("Neplatné heslo.");
        }

        return new Nette\Security\Identity($row->id, ["role" => $row->id_role], ["name" => $row->jmeno]);
    }
}