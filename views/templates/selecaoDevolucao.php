<main>
    <h2>Livros Emprestados</h2>
    <table id="customers">
        <tr>
            <th class='rotulo'>#</th> 
            <th class='rotulo'>Cód. Livro</th> 
            <th class='rotulo'>Cód. Usuário</th>
            <th class='rotulo'>Usuário</th>   
            <th class='rotulo'>Livro</th>
            <th class='rotulo'>Status</th>
            <th class='rotulo'>Data Emprestimo</th>
            <th class='rotulo'>Data Devolucao</th>
        </tr>
        <?php 
            $emprestimo = \Models\ConsultaEmprestimoModel::listarEmprestimos();
            foreach ($emprestimo as $value) {
        ?>
        <tr>
            <td><input type="radio" name="id_emprestimo" value="<?php echo $value['id_emprestimo']?>" required></td>
            <td><?php echo $value['cod_livro']?></td>
            <td><?php echo $value['id_usuario']?></td>
            <td><?php echo $value['nome']?></td>
            <td><?php echo $value['letra_titulo']?></td>
            <td><?php echo $value['status']?></td>
            <td><?php echo $value['data_registro']?></td>
            <td><?php echo $value['data_devolucao']?></td>
        </tr>

    <?php 
        }
    ?>
    </table>
    <input class='bt-submit' type='submit' name='bt-dev' value='Excluir'>
</form>
</main>
<?php
use models\SelecaoDevolucaoModel;
$excl = new SelecaoDevolucaoModel();
$excl->devolverLivro();
?>

