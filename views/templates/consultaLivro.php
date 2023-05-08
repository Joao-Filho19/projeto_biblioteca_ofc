<main>
    <h2>Acervo de Livros</h2>
    <table id="customers" style="border: 1px solid black">
        <tr>
                <th>Codigo</th>
                <th>CDD</th>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Exemplar</th>
                <th>Edição</th>
        </tr>
        <?php 
            $livros = \Models\ConsultaLivroModel::listarLivros();
            foreach ($livros as $value) {
        ?>
        <tr>
            <td><?php echo $value['cod_livro']?></td>
            <td><?php echo $value['cdd']?></td>
            <td><?php echo $value['letra_sobrenome']?></td>
            <td><?php echo $value['letra_titulo']?></td>
            <td><?php echo $value['exemplar']?></td>
            <td><?php echo $value['edicao']?></td>
        </tr>

        <?php 
            }
        ?>
    </table>
</main>
