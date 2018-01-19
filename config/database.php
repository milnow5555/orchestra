<?php

class database {
    static $host, $user, $password, $database;

    function __construct($host='127.0.0.1', $user='root', $password='Pasza5555', $database='orch')
    {
        self::$host=$host;
        self::$user=$user;
        self::$password=$password;
        self::$database=$database;
    }

    function connect(){
        $connection = mysqli_connect(self::$host, self::$user, self::$password, self::$database);
        if($connection){
            return $connection;
        }else{
            return die('Connection error!');
        }
    }

    function query($q=""){
        return mysqli_query($this->connect(), $q);
    }
}

?>