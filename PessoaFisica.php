<?php


class PessoaFisica extends Cliente implements GrauImportanciaInterface  {
    
    function __construct();
    
    public function setGrauImportancia($grau);
    
    public function getGrauImportancia();
    
}