<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;


class UserCredentials
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
} 
