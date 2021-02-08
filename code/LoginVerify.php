<?php

include_once 'adminClass.php';
include_once 'simpleUserClass.php';
include_once 'userMapper.php';
session_start();

if (isset($_POST['login-btn'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['register-btn'])){
    $register = new RegisterLogic($_POST);
    $register->registerUser();
} 
else {
    header("Location:../views/login.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            header("Location:../views/login.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            $this->setSession($this->username);
            header('Location:../views/index.php');
        } else
            header("Location:../views/login.php");
            
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);

        if ($user==null) return false;
        
        if (password_verify($password, $user['password'])){
            return true;
        }
        return false;

    }
    private function setSession($username)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);

        if ($user==null) return false;
        
        if ($user['role'] == 0){
            $_SESSION["role"] = "0";
            $_SESSION['roleName'] = "SimpleUser";
        } else if ($user['role'] == 1) {
            $_SESSION["role"] = 1;
            $_SESSION['roleName'] = "Administrator";
        }

    }
}

class RegisterLogic
{
    private $username;
    private $password;
    private $lastname;

    public function __construct($formData)
    {
        $this->username = $formData['register-username'];
        $this->password = $formData['register-password'];
        $this->lastname = $formData['register-lastname'];
    }

    public function registerUser()
    {
        //ketu thirret user Mapper me metoden insert
        $user = new SimpleUser($this->username,$this->password,20,0, $this->lastname);
        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:../views/index.php");
    }
}

?>