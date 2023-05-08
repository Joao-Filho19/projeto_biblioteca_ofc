<main>
    <h2>Alterar Livros</h2>
<form method="post">
    <table id="customers">


    <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>CDD</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Exemplar</th>
            <th>Edição</th>
            <th>Ano Registro</th>
    </tr>
    <?php 
        $livros = \Models\ConsultaLivroModel::listarLivros();
        foreach ($livros as $value) {
    ?>
        <tr>
            <td><input type="radio" name="codigo" value="<?php echo $value['cod_livro']?>" required></td>
            <td><?php echo $value['cod_livro']?></td>
            <td><?php echo $value['cdd']?></td>
            <td><?php echo $value['letra_sobrenome']?></td>
            <td><?php echo $value['letra_titulo']?></td>
            <td><?php echo $value['exemplar']?></td>
            <td><?php echo $value['edicao']?></td>
            <td><?php echo $value['ano_registro']?></td>
        </tr>

    <?php 
        }
    ?>
    </table>
        <input class='bt_submit' type='submit' name='bt_excl' value='Excluir'>
    </form>
</main>   

<?php
use models\SelecaoExclusaoLivroModel;
$excl = new SelecaoExclusaoLivroModel();
$excl->excluirLivros();
?>