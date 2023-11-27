<?php
 function conectaDB(){
    $user = "root";
    $pass = "aluno";
    $host = "localhost";
    $bd = "crud";


$con = new PDO("mysql:host=$host; dbame=$"bd", $user, $pass);
 }
?>