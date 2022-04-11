<?php

class Connection{

    private $servername ='localhost';
    private $username ='root';
    private $password ='';
    private $database ='library';

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);
        

    }


}


?>
