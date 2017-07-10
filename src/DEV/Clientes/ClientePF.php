<?php
namespace DEV\Clientes;
namespace DEV\Clientes\Interfaces;

use DEV\Clientes\ClienteAbstract;

class ClientePF extends ClienteAbstract implements ClienteInterface {
    
    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
         
        parent::__construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau);
        $this->tipo = 1;
    }
    
}