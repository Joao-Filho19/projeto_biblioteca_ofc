<main>
    <h2>Alterar informações do usuário</h2>
<form method="post" action="alterarEditarUsuario">
<table id="customers" style="border: 1px solid black">
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
    $alt = \Models\ConsultaUsuarioModel::listarUsuarios();
    foreach ($alt as $value) {
?>
    <tr>
        <td><input type="radio" name="id_usuario" value="<?php echo $value['id_usuario']?>" required></td>
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
    <input class='bt-submit' type='submit' name='bt_alt' value='Alterar'>
</form>
</main>
