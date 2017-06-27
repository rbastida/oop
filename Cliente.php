<?php

class Cliente {

    private $cpf;
    private $cnpj;
    private $nome;
    private $idade;
    private $telefone;
    private $grau;
    
    function getCpf() {
        return $this->cpf;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
        return $this;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

}
