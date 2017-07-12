<?php
namespace DEV\Clientes\Interfaces;

interface ClienteInterface {

    public function getGrauImportancia();

    public function setGrauImportancia($grau);

    public function setEnderecoCobranca($endereco);

    public function getEnderecoCobranca($grau);
}
