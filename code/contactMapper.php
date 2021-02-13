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
        $query="insert into contact (name,surname,email,text) values (:emri,:mbiemri,:mail,:tekst)";
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
}