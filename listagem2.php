    

<div class="container">

    <h2>Clientes</h2>    

    <div class="col-md-12">
    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th><a href="listagem.php?ordem=crescente"><span class="glyphicon glyphicon-arrow-down"></span></a>
                    Id
                <a href="listagem.php?ordem=decrescente"><span class="glyphicon glyphicon-arrow-Up"></span></a></th>
              
                <th>CPF</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Endereco</th>
                <th>Telefone</th>
                <th>Opcoes</th>
            </tr>
        </thead>
        <tbody>
            
            <?php            
            for ($x=0; $x<=10; $x++) {
            ?>
                <tr>
                    <td><?php echo $dados[$x]['id']; ?></a></td>
                    <td><?php echo $dados[$x]['cpf']; ?></td>                                        
                    <td><?php echo $dados[$x]['nome']; ?></td>
                    <td><?php echo $dados[$x]['idade']; ?></td>                    
                    <td><?php echo $dados[$x]['endereco']; ?></td>                                        
                    <td><?php echo $dados[$x]['telefone']; ?></td>                                        
                    <td>
                        <a href=""><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href=""><span class="glyphicon glyphicon-trash"></span></a>
                        <a href=""><span class="glyphicon glyphicon-plus"></span></a>
                    </td>
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