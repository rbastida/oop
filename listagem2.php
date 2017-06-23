<?php
require_once './i_bootstrap.php';
// require_once './Cliente.php';

$dados = array (
    
    '0' => array (   
    'id'  => '1',        
    'cpf'  => '15004023405',
    'nome' => 'Wesley',
    'idade' => '23',
    'endereco' => 'anchieta 200',
    'telefone' => '1997605432'
    ),
    
    '1' => array (    
    'id'  => '2',        
    'cpf'  => '12004323405',
    'nome' => 'Ricardo',
    'idade' => '33',
    'endereco' => 'anchieta 42',
    'telefone' => '1998731234'
    ),

    '2' => array (    
    'id'  => '3',                
    'cpf'  => '16004323405',
    'nome' => 'Anderson',
    'idade' => '19',
    'endereco' => 'afonso marcondes 132',
    'telefone' => '11772222'
    ),

    '3' => array (    
    'id'  => '4',         
    'cpf'  => '15004023405',
    'nome' => 'Silva',
    'idade' => '20',
    'endereco' => 'rua teste 157',
    'telefone' => '1177662211'
    ),

    '4' => array (    
    'id'  => '5',         
    'cpf'  => '1444223405',
    'nome' => 'Marcos',
    'idade' => '21',
    'endereco' => 'rua teste 156',
    'telefone' => '1177664423'
    ),

    '5' => array (    
    'id'  => '6',         
    'cpf'  => '1104023405',
    'nome' => 'Francisco',
    'idade' => '22',
    'endereco' => 'rua teste 155',
    'telefone' => '1177664422'
    ),

    '6' => array (    
    'id'  => '7', 
    'cpf'  => '10004023405',
    'nome' => 'Clarice',
    'idade' => '24',
    'endereco' => 'rua teste 154',
    'telefone' => '1177664455'
    ),

    '7' => array (    
    'id'  => '8',         
    'cpf'  => '12344023405',
    'nome' => 'Natanael',
    'idade' => '25',
    'endereco' => 'rua teste 153',
    'telefone' => '1988774455'
    ),

    '8' => array (    
    'id'  => '9',         
    'cpf'  => '19874023405',
    'nome' => 'Fernanda',
    'idade' => '26',
    'endereco' => 'rua teste 152',
    'telefone' => '1998774477'
    ),

    '9' => array (    
    'id'  => '10', 
    'cpf'  => '14994023405',
    'nome' => 'Marcela',
    'idade' => '27',
    'endereco' => 'rua teste 151',
    'telefone' => '1998774466'
    ),

    '10' => array (    
    'id'  => '11',         
    'cpf'  => '11234023405',
    'nome' => 'Cleiton',
    'idade' => '28',
    'endereco' => 'anchieta 12',
    'telefone' => '1998774455'
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
            <?php            
            for ($x=0; $x<=10; $x++) {
            ?>
                <tr>
                    <td><?php echo $dados[$x]['id']; ?></a></td>
                    <td><?php echo $dados[$x]['cpf']; ?></td>                                        
                    <td><a href="listagem.php?indice=<?php echo $dados[$x]['id']-1; ?>"><?php echo $dados[$x]['nome']; ?></a></td>
                    <td><?php echo $dados[$x]['idade']; ?></td>                    
                    <td><?php echo $dados[$x]['endereco']; ?></td>                                        
                    <td><?php echo $dados[$x]['telefone']; ?></td>                                        
<!--                    <td>
                        <a href=""><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href=""><span class="glyphicon glyphicon-trash"></span></a>
                        <a href=""><span class="glyphicon glyphicon-plus"></span></a>
                    </td>-->
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