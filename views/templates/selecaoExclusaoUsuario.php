<form method="post">
<table>
<tr>
        <th>#</th>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Observacao</th>
</tr>
<?php 
    $livros = \Models\ConsultaUsuarioModel::listarUsuarios();
    foreach ($livros as $value) {
?>
    <tr>
        <td><input type="radio" name="codigo" value="<?php echo $value['id_usuario']?>" required></td>
        <td><?php echo $value['id_usuario']?></td>
        <td><?php echo $value['nome']?></td>
        <td><?php echo $value['sexo']?></td>
        <td><?php echo $value['idade']?></td>
        <td><?php echo $value['telefone']?></td>
        <td><?php echo $value['endereco']?></td>
        <td><?php echo $value['observacao']?></td>
    </tr>

<?php 
    }
?>
</table>
    <input class='bt_submit' type='submit' name='bt_excl' value='Excluir'>
</form>
<?php
use models\SelecaoExclusaoUsuarioModel;
$excl = new SelecaoExclusaoUsuarioModel();
$excl->excluirUsuarios();
?>