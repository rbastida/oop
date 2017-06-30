<?php
require_once './i_bootstrap.php';
require_once './Interfaces/EnderecoCobrancaInterface.php';
require_once './Interfaces/GrauImportanciaInterface.php';
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

if (isset($_GET['indice'])) {
    
    $indice = $_GET['indice'];
    showPessoa($dados, $indice);
    exit();
} 

if (isset($_GET['ordem'])) {
    
    $ordem = $_GET['ordem'];
    $dados = orderna_array($ordem, $dados);    
}

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

?>
    
<div class="container">
    <h2>Clientes</h2>  
    <div class="col-md-12">
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th><a href="listagem.php?ordem=crescente"><span class="glyphicon glyphicon-arrow-Up"></span></a>Id
                <a href="listagem.php?ordem=decrescente"><span class="glyphicon glyphicon-arrow-down"></span></a></th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereco</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td><?php echo $value['id']; ?></a></td>
                <?php                
                if ($value['tipo'] === 'juridica') {        
                    $cnpj     = $Cliente->getCnpj();
                    ?>
                    <td><?php echo $cnpj; ?></td>
                    <?php

                } else {
                    $cpf      = $Cliente->getCpf();
                    ?>
                    <td><?php echo $cpf; ?></td>
                    <?php
                }                       
                ?>
                <td><?php echo $value[$x]['cpf']; ?></td>                                        
                <td><a href="listagem.php?indice=<?php echo $value[$x]['id']-1; ?>"><?php echo $value[$x]['nome']; ?></a></td>
                <td><?php echo $value[$x]['idade']; ?></td>                    
                <td><?php echo $value[$x]['endereco']; ?></td>                                        
                <td><?php echo $value[$x]['telefone']; ?></td>                                        
                </tr>
            <?php            
            }
            ?>
        </tbody>
    </table>    
    </div>
</div>
</body>
</html>

<?php


function orderna_array($ordem, $dados) {
    
    if ($ordem == 'crescente') {    
        $ordem_array = SORT_ASC;
    } else {
        $ordem_array = SORT_DESC;
    }
    
    $lista = array(); 

    foreach ($dados as $dado) {
        $lista[] = $dado['id'];    
    }

    array_multisort($lista, $ordem_array, $dados);    
    
    return ($dados);
}

function showPessoa($dados, $indice) {

    $id         = $dados[$indice]['id'];
    $nome       = $dados[$indice]['nome'];
    $cpf        = $dados[$indice]['cpf'];
    $idade      = $dados[$indice]['idade'];          
    $endereco   = $dados[$indice]['endereco'];
    $telefone   = $dados[$indice]['telefone'];
    ?>

    <form name="voltar" action="listagem.php" method="POST">
    <div class="container">
        <h2>Dados do Cliente</h2>    
        <div class="col-md-12">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <th>Id</th>              
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereco</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>    
                <tr>
                    <td><?php echo $id; ?></a></td>
                    <td><?php echo $cpf; ?></td>                                        
                    <td><?php echo $nome; ?></a></td>
                    <td><?php echo $idade; ?></td>                    
                    <td><?php echo $endereco; ?></td>                                        
                    <td><?php echo $telefone; ?></td>     
                </tr>
            </tbody>
        </table> 
        </div>
        <button type="submit" class="btn btn-primary">Voltar</button>
    </div>    
    </form>
    
<?php
}
?>



























