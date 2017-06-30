<?php
require_once './Cliente.php';

class ClientePJ extends Cliente implements EnderecoCobrancaInterface, GrauImportanciaInterface {
    
    protected $enderecoCobranca;
    protected $grau;

    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
         
        parent::__construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau);
        
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