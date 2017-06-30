<?php

class Cliente {
    
    protected $id;    
    protected $cpf;
    protected $nome;
    protected $idade;
    protected $telefone;
    protected $enderecoCobranca;
    protected $grau;
    
    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
        
        $this->id       = $id;
        $this->cpf      = $cpf;
        $this->nome     = $nome;
        $this->idade    = $idade;
        $this->telefone = $telefone;
        $this->enderecoCobranca = $enderecoCobranca;
        $this->grau     = $grau;        
        
        return $this;
        
    }
    
    public function getId() {
        return $this->id;
    }
        
    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getTelefone() {
        return $this->telefone;
    }
    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    public function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }
    
}
