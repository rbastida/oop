<?php


class PessoaFisica extends Cliente implements GrauImportanciaInterface, EnderecoCobrancaInterface  {
    
    public $grau;
    public $enderecoCobranca;
    
    function __construct();

    function getGrauImportancia() {
        return $this->grau;
    }

    function setGrauImportancia($grau) {
        $this->grau = $grau;
        return $this;
    }

    function getEnderecoCobranca() {
        return $this->enderecoCobranca;
    }

    function setEnderecoCobranca($enderecoCobranca) {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }
    
}