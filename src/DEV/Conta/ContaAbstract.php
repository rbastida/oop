<?php
namespace DEV\Conta;

abstract class ContaAbstract {
    
    use Util\ProcessoTrait;
    
    protected $saldo;
    
    public final function depositar($valor) {
        
        $this->iniciaProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->finalizaProcesso();
        return TRUE;        
        
    }
    
    public function sacar($valor) {
        
        $this->iniciaProcesso();
        if ($this->saldo >= $valor ) {
            
            $this->saldo -= $valor;
            $this->finalizaProcesso();
            return TRUE;        
        }
        
        $this->finalizaProcesso();
        return FALSE;
        
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
    
}