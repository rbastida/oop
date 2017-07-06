<?php
require_once './Cliente.php';
require_once './Interfaces/EnderecoCobrancaInterface.php';
require_once './Interfaces/GrauImportanciaInterface.php';

class ClientePJ extends Cliente implements EnderecoCobrancaInterface, GrauImportanciaInterface {
    
    protected $enderecoCobranca;
    protected $grau;

    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
         
        parent::__construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau);
        $this->tipo = 2;
    }
        
    public function getEnderecoCobranca() {
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca) {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    public function getGrauImportancia() {
        return $this->grau;
    }

    public function setGrauImportancia($grau) {
        $this->grau = $grau;
        return $this;
    }    
    
}