<?php
include_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    public $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userid)
    {
        $query="select * from user where userid =:id";
        $statement = $this->conn->prepare($query);
        $statement->bindParam(":id", $userid);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function deleteUserByID($userid){
        $query = "delete from user where userid=:id";
        $statement = $this->conn->prepare($query);
        $statement->bindParam(":id", $userid);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    public function getUserByUsername($username)
    {
        $query="select * from user where username =:username";
        $statement = $this->conn->prepare($query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $query="SELECT * FROM user";
        $statement = $this->conn->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

    public function insertUser($user)
    {
        $query="insert into user (username,userlastname,password,role) values (:name,:lastname,:pass,:role)";
        $statement = $this->conn->prepare($query);

        $username = $user->getUsername();
        $lastname = $user->getLastname();
        $pass = $user->getPassword();
        $role = $user->getRole();

        $passwordEncrypted = password_hash($pass, PASSWORD_BCRYPT);

        $statement->bindParam(":name", $username);
        $statement->bindParam(":lastname", $lastname);
        $statement->bindParam(":pass", $passwordEncrypted);
        $statement->bindParam(":role", $role);

        $statement->execute();
    
        
    }

    
}
