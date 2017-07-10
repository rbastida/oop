<?php
namespace DEV\Conta\Types;

class Conta extends \DEV\Conta\ContaAbstract {
    
    protected function calculoDeposito($valor) {
        
        return $valor += 10;
    }       
    
}
