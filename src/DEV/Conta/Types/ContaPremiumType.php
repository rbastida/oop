<?php
namespace DEV\Conta\Types;

class ContaPremium extends DEV\Conta\ContaAbstract {
    
    public function __construct() {
        $this->saldo += 10;
    }
    
    protected function calculoDeposito($valor) {
        
        return $valor += 20;
    }    
    
}        
