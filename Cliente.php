<?php

class Cliente {
    
    private $id;    
    private $cpf;
    private $nome;
    private $idade;
    private $telefone;
    private $enderecoCobranca;
    private $grau;
    private $tipo;

    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
        
        $this->id               = $id;
        $this->cpf              = $cpf;
        $this->nome             = $nome;
        $this->idade            = $idade;
        $this->telefone         = $telefone;
        $this->enderecoCobranca = $enderecoCobranca;
        $this->grau             = $grau;        
        $this->tipo             = $tipo;
        
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
    
    public function getTipo() {
        return $this->tipo;
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
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
        return $this;
    }      
    
    public function isPessoaFisica(){
        if($this->getTipo() == 1){
            return true;
        }
        return false;
    }

    public function isPessoaJuridica(){
        if($this->getTipo() == 2){
            return true;
        }
        return false;
    }
    
}
