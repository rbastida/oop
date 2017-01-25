<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<title></title>

</head>
<body>

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


$indice     = $_GET['indice'];

if (isset($ordem)) {
    $ordem = $_GET['ordem'];
    $dados = orderna_array($ordem, $dados);
}

if (isset($indice)) {
    
    $indice     = $_GET['indice'];
    
    $id         = $dados[$indice]['id'];
    $nome       = $dados[$indice]['nome'];
    $cpf        = $dados[$indice]['cpf'];
    $idade      = $dados[$indice]['idade'];          
    $endereco   = $dados[$indice]['endereco'];
    $telefone   = $dados[$indice]['telefone'];
    
    
//    echo '<h4>dados</h4><br>';
//    echo '<h4>id='.$id.'</h4><br>';
//    echo '<h4>nome='.$nome.'</h4><br>';
//    echo '<h4>cpf='.$cpf.'</h4><br>';
//    echo '<h4>idade='.$idade.'</h4><br>';
//    echo '<h4>endereco='.$endereco.'</h4><br>';
//    echo '<h4>telefone='.$telefone.'</h4><br>';
    
    
    ?>


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
</div>    
    
    <?php
    
    exit();
}












//print_r($dados);

//var_dump($dados);


?>
    
<div class="container">

    <h2>Clientes</h2>    

    <div class="col-md-12">
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th><a href="listagem.php?ordem=crescente"><span class="glyphicon glyphicon-arrow-Up"></span></a>
                    Id
                <a href="listagem.php?ordem=decrescente"><span class="glyphicon glyphicon-arrow-down"></span></a></th>
              
                <th>CPF</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereco</th>
                <th>Telefone</th>
<!--                <th>Opcoes</th>-->
            </tr>
        </thead>
        <tbody>
            
            <?php            
            for ($x=0; $x<=10; $x++) {
            ?>
                <tr>
                    <td><?php echo $dados[$x]['id']; ?></a></td>
                    <td><?php echo $dados[$x]['cpf']; ?></td>                                        
                    <td><a href="listagem.php?indice=<?php echo $x; ?>"><?php echo $dados[$x]['nome']; ?></a></td>
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