<?php
include "../firebase/setup_client_create.php";

class Database{
    var $connection;

    function __construct($host, $username, $password, $database_name)
    {
        $this->connect($host, $username, $password, $database_name);
    }

    private function connect($host, $username, $password, $database_name){
        // $this->connection = mysqli_connect($host, $username, $password, $database_name);
        // return $this->connection;
        setup_client_create("vampirkoylu-api");
    }

    

}


?>