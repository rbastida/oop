<?php
require_once './Interfaces/EnderecoCobrancaInterface.php';
require_once './Interfaces/GrauImportanciaInterface.php';

//$tenis = new Tenis();
//
//if ($tenis instanceof Produto) {
//    
//    echo "e um tipo de tenis";
//} else {
//    echo "n e um tipo de tenis";
// }



$dados = array (
    
    '0' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Wesley',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),
    
    '1' => array (    
    'cpf'  => '12004323405',
    'nome' => 'Ricardo',
    'idade' => '33',
    'endereco' => 'anchieta 42',
    'telefone' => '1998734466'
    ),

    '2' => array (    
    'cpf'  => '16004323405',
    'nome' => 'Anderson',
    'idade' => '19',
    'endereco' => 'afonso marcondes 132',
    'telefone' => '1997634544'
    ),

    '3' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Silva',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '4' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Marcos',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '5' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Francisco',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '6' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Clarice',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '7' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Natanael',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '8' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Fernanda',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '9' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Marcela',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    ),

    '10' => array (    
    'cpf'  => '15004023405',
    'nome' => 'Cleiton',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605544'
    )
    
);

$Pessoa = new PessoaFisica();

