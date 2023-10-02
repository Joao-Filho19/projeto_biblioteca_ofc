<main>
    <h2>Livros presentes no acervo</h2>
    <table id="customers" style="border: 1px solid black">
        <tr>
            <th>Autor</th>
            <th>Título</th>
            <th>Quantidade de Exemplares</th>
        </tr>
        <?php 
        $livrosAgrupados = \Models\ConsultaLivroModel::listarLivrosAgrupados();
        foreach ($livrosAgrupados as $value) {
        ?>
        <tr>
            <td><?php echo $value['letra_sobrenome']?></td>
            <td><?php echo $value['letra_titulo']?></td>
            <td><?php echo $value['quantidade']?></td>
        </tr>
        <?php 
        }
        ?>
    </table>

</main>
