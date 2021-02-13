<?php

include_once 'contactClass.php';
include_once 'contactMapper.php';

if (isset($_POST['submit'])){
    $sent = new SendLogic($_POST);
    $sent->sendMesage();
    
}




class SendLogic{
    private $name;
    private $surname;
    private $email;
    private $text;

    public function __construct($formData)
    {
        $this->name = $formData['emri'];
        $this->surname = $formData['mbiemri'];
        $this->email = $formData['mail'];
        $this->text = $formData['tekst'];
    }

    public function sendMesage()
    {
        //ketu thirret user Mapper me metoden insert
        $send = new Contact($this->name,$this->surname,$this->email,$this->text);
        $mapper = new contactMapper();
        $mapper->insertContact($send);
        header("Location:../views/contact.php");
        
    }
}