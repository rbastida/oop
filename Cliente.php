<?php

class Cliente {

    public $cpf;
    public $cnpj;
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;
    public $grau;
    
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

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getGrau() {
        return $this->grau;
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

    function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    function setGrau($grau) {
        $this->grau = $grau;
        return $this;
    }

    
}




