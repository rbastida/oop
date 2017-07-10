<?php
namespace DEV\Clientes;
namespace DEV\Clientes\Interfaces;

use DEV\Clientes\ClienteAbstract;

class ClientePJ extends ClienteAbstract implements ClienteInterface {
    
    public function __construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau) {
         
        parent::__construct($id, $cpf, $nome, $idade, $telefone, $enderecoCobranca, $grau);
        $this->tipo = 2;
    }
    
}