<?php

function conn() {

    try {

        $host       = 'localhost';
        $dbname     = 'code_education';
        $user       = 'root';
        $password   = 'ws56gb89';

        $conexao = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conexao->exec("set names utf8");        
        
        // echo 'conectado!';
        return($conexao);
        
    } catch (\PDOException $e) {

        die("Não foi possível estabelecer uma conexão com o banco de dados: Erro código: " . $e->getCode() . ": " . $e->getMessage());
        
    }
    
}

$conexao = conn();