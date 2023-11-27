<?php
    class Datbase{
        private $host;
        private $user;
        private $passworld;
        private $database;
        private $connection;

        public function getConnection(){
            //mysql_connect, 
        $this->user="root";
        $this->connection = new PDO("mysql:host=$host; dbname=$database", $user);
        return  $this->connection;
    }
}
?>