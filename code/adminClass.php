<?php
require_once 'personClass.php';


class Admin extends Person
{
    public function __construct($username, $password, $age, $role)
    {
        parent::__construct($username, $password, $age, $role); 
    }
    

   

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    public function getLastname()
    {
        return $this->lastname;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getRole()
    {
        return $this->role;
    }
}
