<?php
require_once 'autoload.php';
require_once './i_bootstrap.php';
require_once './conn.php';

$cliente = (new DEV\Cliente\Model\ClienteModel($conexao))->find($_GET['id']);

?>

<div class="container">

    <div class="jumbotron">
        <h1>Gestão de Clientes</h1>
        <p>Exercício do Curso de PHP OO da School of Net</p>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading"> <span class="glyphicon glyphicon-user"></span> <?php echo $cliente->getNome()?> </div>
        <div class="panel-body">
            <?php
                echo "<b>Nome: </b>".$cliente->getNome()."<br>";
                echo "<b>Endereço: </b>".$cliente->getEnderecoCobranca()."<br>";
                echo "<b>CPF: </b>".$cliente->getCPF()."<br>";

            ?>
        </div>
        <div class="panel-footer">
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
</div>
</body>
</html>