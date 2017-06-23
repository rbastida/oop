<?php

class ContaPremium extends Conta {
    
    public function __construct() {
        $this->saldo += 10;
        $this->calculoDeposito(4343);
    }
    
    protected function calculoDeposito($valor) {
        
        $valorNormal = parent::calculoDeposito($valor);
        return $valorNormal  += 20;
    }    
    
}        
