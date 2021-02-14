<?php
include_once "databaseConfig.php";

class contactMapper extends DatabaseContactConfiguration
{

    private $conn;
    public $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function insertContact($contact)
    {
        $query="insert into kontakti (name,surname,email,text) values (:emri,:mbiemri,:mail,:tekst)";
        $statement = $this->conn->prepare($query);

        $name = $contact->getName();
        $surname = $contact->getSurname();
        $email = $contact->getEmail();
        $text = $contact->getText();


        $statement->bindParam(":emri", $name);
        $statement->bindParam(":mbiemri", $surname);
        $statement->bindParam(":mail", $email);
        $statement->bindParam(":tekst", $text);

        $statement->execute();
    
        
    }
    public function getAllContact()
    {
        $query="select * from kontakti";
        $statement = $this->conn->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
}