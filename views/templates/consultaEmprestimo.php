<main>
    <h2>Livros Emprestados</h2>
    <table id="customers">
        <tr>
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
</main>
