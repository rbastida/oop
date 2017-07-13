<?php
namespace DEV\Clientes\Banco;

use DEV\Clientes\ClientePF;
use DEV\Clientes\ClientePJ;

class DadosClientes {

    private static $clientes = array();

    public function __construct() {

        self::$clientes = array(
            0 => new ClientePF('1',   '123.321.456-01', 'Nilton Morais',   '23', '1997882343', 'Rua A, nº 354 - Centro, Ilhéus-BA',   null,'3'),
            1 => new ClientePJ('2',   '789.541.369-01', 'Jéssica Abreu',   '32', '1197335033', 'Rua B, nº 147 - Coceição, Itabuna-BA',  null,'8'),
            2 => new ClientePF('3',   '987.741.364-05', 'Maria do Carmo',  '41', '1997605432', 'Rua C, nº 451 - Mangabinha, Itabuna-BA',  null,'2'),
            3 => new ClientePJ('4',   '854.001.140-01', 'João Pedro',      '19', '1997605432', 'Rua D, nº 09 - Centro, Contagem-MG', null,'3'),
            4 => new ClientePF('5',   '059.905.154-01', 'Manoel Cruz',     '22', '1997605432', 'Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA',  null,'4'),
            5 => new ClientePF('6',   '212.413.001-01', 'Eva Alves',       '28', '1197335332', 'Rua Pará de Minas, nº 354 - Centro, Contagem-MG', null,'5'),
            6 => new ClientePJ('7',   '301.102.301-01', 'Joaquim Costa',   '22', '1197335233', 'Rua E, nº 256 - Centro, Camacan-BA',  null,'6'),
            7 => new ClientePF('8',   '103.054.193-01', 'Eliomar Morais',  '38', '1997605432', 'Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA',   null,'10'),
            8 => new ClientePJ('9',   '123.789.257-79', 'Carla Amaral',    '36', '1997605432', 'Rua F, nº 123 - Centro, Ilhéus-BA',   null,'7'),
            9 => new ClientePF('10',  '231.321.412-01', 'Jeniffer Araújo', '37', '1997605432', 'Rua G, nº 314 - Centro, Salvador-BA', null,'7')
        );

    }   
    
    public function getClientes($order = 'ASC') {
           
        if ($order == "DESC"){
            rsort(self::$clientes);
            return self::$clientes;
        }
        
        return self::$clientes;
        
    }
    
    public function getCliente($id) {

        foreach(self::$clientes as $cliente):
            if($cliente->getId() == $id){
                return $cliente;
            }
        endforeach;

        return $id;

    }        
}





