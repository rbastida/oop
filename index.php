<?php
require_once 'autoload.php';
require_once './i_bootstrap.php';
require_once './conn.php';

$clienteModel = new DEV\Cliente\Model\ClienteModel($conexao);

if (isset($_GET['order'])) {
    $clientes = $clienteModel->fetchAll($_GET['order']);
} else {
    $clientes = $clienteModel->fetchAll();
}
?>

<body>
    <div class="container">

        <div class="jumbotron">
            <h1>Gestão de Clientes</h1>
            <p>Exercício do Curso de PHP OO da School of Net</p>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ordenar
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="?order=ASC">Crescente</a></li>
                <li><a href="?order=DESC">Decrescente</a></li>
            </ul>
        </div>

        <table class="table table-striped table-hover">
            <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Endereço</td>
            <td>Tipo</td>
            <td>Ações</td>
            </thead>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente->getId(); ?></td>
                    <td><?php echo $cliente->getNome(); ?></td>
                    <td><?php echo $cliente->getCPF(); ?></td>
                    <td><?php echo $cliente->getEndereco(); ?></td>
                    <td>
                        <?php echo ($cliente->isPessoaFisica()) ? "Pessoa Física" : "Pessoa Juridica"; ?></td>
                    <td><a href="<?php echo 'cliente_individual.php?id=' . $cliente->getId() ?>" class="btn btn-primary" title="Visualizar"><span class="glyphicon glyphicon-new-window"></span></a></td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
