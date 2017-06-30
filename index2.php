<?php
require_once './Interfaces/EnderecoCobrancaInterface.php';
require_once './Interfaces/GrauImportanciaInterface.php';
require_once './Cliente.php';
require_once './ClientePF.php';
require_once './ClientePJ.php';
require_once './DadosClientes.php';


$dados = DadosClientes::$clientes;

print_r($dados);





//foreach ($dados as $key => $value) {
//
//    $Cliente = new Cliente();    
//    
//    if ($value['tipo'] == 'juridica') {        
//        $Cliente->setCnpj($value['cnpj']);          
//    } else {
//        $Cliente->setCpf($value['cpf']);
//    }
//
//    $Cliente->setId($value['id']);
//    $Cliente->setGrau($value['grau']);
//    $Cliente->setIdade($value['idade']);
//    $Cliente->setNome($value['nome']);
//    $Cliente->setTelefone($value['telefone']);
//    $Cliente->setTipo($value['tipo']);    
//    
//    $id       = $Cliente->getId();
//    $grau     = $Cliente->getGrau();
//    $idade    = $Cliente->getIdade();
//    $nome     = $Cliente->getNome();
//    $telefone = $Cliente->getTelefone();
//    $tipo     = $Cliente->getTipo();     
//    
//    echo 'id='.$id.'<br>';
//    echo 'grau='.$grau.'<br>';
//    echo 'idade='.$idade.'<br>';
//    echo 'nome='.$nome.'<br>';
//    echo 'telefone='.$telefone.'<br>';
//    echo 'tipo='.$tipo.'<br>';
//
//    if ($value['tipo'] == 'juridica') {        
//        $cnpj     = $Cliente->getCnpj();
//        echo 'cnpj='.$cnpj.'<br>';        
//    } else {
//        $cpf      = $Cliente->getCpf();
//        echo 'cpf='.$cpf.'<br>';        
//    }       
//    
//    echo '<br><br>';
//    
//   
//
//    
//}
//
//
//
//
//
//
//
//
//
//$Pessoa = new PessoaFisica();
//
