<?php
require_once './produto.php';

class Tenis extends Produto {
    
    public $cor;
    public $tamanho;
    
    public function baixaEstoque() {
        
        $this->estoque = $this->estoque - 1;
        
    }
    


}
