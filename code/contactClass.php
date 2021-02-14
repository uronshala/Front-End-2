<?php

class Contact {
    private $name;
    private $surname;
    private $email;
    private $text;
    
    public function __construct($name,$surname,$email,$text)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->text = $text;
    }

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getText(){
        return $this->text;
    }
}