<?php
namespace DEV\Clientes;

use DEV\Clientes\Interfaces\ClienteInterface;

class ClientePF extends ClienteAbstract implements ClienteInterface {
    
    public function __construct($id, $cpf, $nome, $idade, $telefone, $endereço, $enderecoCobranca, $grau) {
         
        parent::__construct($id, $cpf, $nome, $idade, $telefone, $endereço, $enderecoCobranca, $grau, 1);
    }
    
}