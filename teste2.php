<?php

require_once './Cliente.php';

$dados = array (
    
    '0'        => array (   
    'id'       => '1',        
    'cpf'      => '15004023405',
    'nome'     => 'Wesley',
    'idade'    => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605432',
    'tipo'     => 'fisica',
    'grau'     => '3'
    ),
    
    '1'        => array (    
    'id'       => '2',        
    'cnpj'     => '22288882222',
    'nome'     => 'Ricardo',
    'idade'    => '33',
    'endereco' => 'anchieta 42',
    'telefone' => '1998731234',
    'tipo'     => 'juridica',
    'grau'     => '2'
    ),

    '2'        => array (    
    'id'       => '3',                
    'cnpj'     => '22288882222',
    'nome'     => 'Anderson',
    'idade'    => '19',
    'endereco' => 'afonso marcondes 132',
    'telefone' => '11772222',
    'tipo'     => 'juridica',
    'grau'     => '8'
    ),
    
    '3'        => array (    
    'id'       => '4',                
    'cnpj'     => '1444223405',
    'nome'     => 'Silva',
    'idade'    => '20',
    'endereco' => 'rua teste 157',
    'telefone' => '11772222',
    'tipo'     => 'juridica',
    'grau'     => '6'    
    ),
    
    '4'        => array (    
    'id'       => '5',                
    'cnpj'     => '1238980333',
    'nome'     => 'Teste da Silva',
    'idade'    => '32',
    'endereco' => 'rua angelo guimaraes 157',
    'telefone' => '1197348989',
    'tipo'     => 'fisica',
    'grau'     => '4'    
    ),

    '5'        => array (    
    'id'       => '6',                
    'cnpj'     => '33222222',
    'nome'     => 'Georgina',
    'idade'    => '22',
    'endereco' => 'rua oitava 127',
    'telefone' => '11772222',
    'tipo'     => 'juridica',
    'grau'     => '6'    
    ),   
    
    '6'        => array (    
    'id'       => '7',         
    'cpf'      => '123653478',
    'nome'     => 'Marcos Cesar',
    'idade'    => '21',
    'endereco' => 'rua teste 157',
    'telefone' => '1177664423',
    'tipo'     => 'fisica',
    'grau'     => '6'           
    ),

    '7'        => array (    
    'id'       => '8',         
    'cpf'      => '1104023405',
    'nome'     => 'Francisco',
    'idade'    => '22',
    'endereco' => 'rua teste 155',
    'telefone' => '1167834777',
    'tipo'     => 'fisica',
    'grau'     => '6'           
    ),

    '8'        => array (    
    'id'       => '9',         
    'cpf'      => '1104023405',
    'nome'     => 'Francisco',
    'idade'    => '22',
    'endereco' => 'rua teste 155',
    'telefone' => '1167834777',
    'tipo'     => 'fisica',
    'grau'     => '6'           
    ),

    '9'        => array (    
    'id'       => '10',         
    'cpf'      => '1104023405',
    'nome'     => 'Francisco',
    'idade'    => '22',
    'endereco' => 'rua teste 155',
    'telefone' => '1167834777',
    'tipo'     => 'fisica',
    'grau'     => '6'           
    )
    
);

foreach ($dados as $key => $value) {

    $Cliente = new Cliente();    
    
    if ($value['tipo'] == 'juridica') {        
        $Cliente->setCnpj($value['cnpj']);          
    } else {
        $Cliente->setCpf($value['cpf']);
    }

    $Cliente->setId($value['id']);
    $Cliente->setGrau($value['grau']);
    $Cliente->setIdade($value['idade']);
    $Cliente->setNome($value['nome']);
    $Cliente->setTelefone($value['telefone']);
    $Cliente->setTipo($value['tipo']);    
    
    $id       = $Cliente->getId();
    $grau     = $Cliente->getGrau();
    $idade    = $Cliente->getIdade();
    $nome     = $Cliente->getNome();
    $telefone = $Cliente->getTelefone();
    $tipo     = $Cliente->getTipo();     
    
    echo 'id='.$id.'<br>';
    echo 'grau='.$grau.'<br>';
    echo 'idade='.$idade.'<br>';
    echo 'nome='.$nome.'<br>';
    echo 'telefone='.$telefone.'<br>';
    echo 'tipo='.$tipo.'<br>';

    if ($value['tipo'] == 'juridica') {        
        $cnpj     = $Cliente->getCnpj();
        echo 'cnpj='.$cnpj.'<br>';        
    } else {
        $cpf      = $Cliente->getCpf();
        echo 'cpf='.$cpf.'<br>';        
    }       
    
    echo '<br><br>';
    
   

    
}

//print_r($Cliente);