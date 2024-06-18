<?php

class Conexao extends PDO{
    private $host="localhost";
    private $usuario="root";
    private $senha="";
    private $db="spaac"; 
public function __construct()
{
    $dsn="mysql:host=".$this->host.";dbname=".$this->db;
     $conexao= new PDO($dsn, $this->usuario, $this->senha);
     return $conexao;
}
}