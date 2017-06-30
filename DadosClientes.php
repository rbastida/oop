<?php
require_once './Cliente.php';
require_once './ClientePF.php';
require_once './ClientePJ.php';

class DadosClientes {

    public static $clientes = array();

    public function __construct() {

        self::$clientes = array(

            0 => new ClientePF('1',   '123.321.456-01', 'Nilton Morais',   '23', '1997882343', 'Rua A, nº 354 - Centro, Ilhéus-BA',   '3'),
            2 => new ClientePJ('2',   '789.541.369-01', 'Jéssica Abreu',   '32', '1197335033', 'Rua B, nº 147 - Coceição, Itabuna-BA',  '8'),
            3 => new ClientePF('3',   '987.741.364-05', 'Maria do Carmo',  '41', '1997605432', 'Rua C, nº 451 - Mangabinha, Itabuna-BA',  '2'),
            4 => new ClientePJ('4',   '854.001.140-01', 'João Pedro',      '19', '1997605432', 'Rua D, nº 09 - Centro, Contagem-MG', '3'),
            5 => new ClientePF('5',   '059.905.154-01', 'Manoel Cruz',     '22', '1997605432', 'Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA',  '4'),
            6 => new ClientePF('6',   '212.413.001-01', 'Eva Alves',       '28', '1197335332', 'Rua Pará de Minas, nº 354 - Centro, Contagem-MG', '5'),
            7 => new ClientePJ('7',   '301.102.301-01', 'Joaquim Costa',   '22', '1197335233', 'Rua E, nº 256 - Centro, Camacan-BA',  '6'),
            8 => new ClientePF('8',   '103.054.193-01', 'Eliomar Morais',  '38', '1997605432', 'Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA',   '10'),
            9 => new ClientePJ('9',   '123.789.257-79', 'Carla Amaral',    '36', '1997605432', 'Rua F, nº 123 - Centro, Ilhéus-BA',   '7'),
            10 => new ClientePF('10', '231.321.412-01', 'Jeniffer Araújo', '37', '1997605432', 'Rua G, nº 314 - Centro, Salvador-BA', '7')
        );

    }   
    
    public function getClientes($order = 'ASC') {
        
        if($order == 'DESC') {
            
            $ordem_array = SORT_DESC;
            
            $lista = array(); 
            array_multisort(self::$clientes, $ordem_array, $lista);    
            return ($lista);  
        }
   
        return (self::$clientes);
     
    }
    
}
