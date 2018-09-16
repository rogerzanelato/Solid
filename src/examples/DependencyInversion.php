<?php

interface Database
{
    public function connect($servidor, $nome, $usuario, $senha);
}

class MySql implements Database
{
    public function connect($servidor, $nome, $usuario, $senha)
    {
        echo 'conecta com o MySQL';
    }
}

class Connection
{
    public function __construct($servidor, $nome, $usuario, $senha)
    {
        $this->servidor = $servidor;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function connect(Database $db)
    {
        $db->connect($this->servidor, $this->nome, $this->usuario, $this->senha);
    }
}

$conn = new Connection('localhost', 'curso_solid', 'root', '1234');
$conn->connect(new MySql);