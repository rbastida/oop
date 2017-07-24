<?php

namespace DEV\Cliente;

class ClientePF extends ClienteAbstract {

    public function __construct($id, $nome, $cpf, $endereco) {
        parent::__construct($id, $nome, $cpf, $endereco);
        $this->tipo = 1;
    }

}
