<?php
	use models\AlterarEditarUsuarioModel;
	$alt = models\AlterarEditarUsuarioModel::listarUsuario2();
    foreach ($alt as $value) {
?>

<form method="post">
	<p>
		<input type="hidden" name="id_usuario" value="<?php echo $value["id_usuario"]; ?>">
		<label for="">Nome:</label>
		<input type="text" name="nome" value="<?php echo $value["nome"]; ?>" required>
	</p>
	<p>
		<label for="">Sexo:</label>
		<input type="text" name="sexo" value="<?php echo $value["sexo"]; ?>" required>
	</p>
    <p>
		<label for="">Idade:</label>
		<input type="text" name="idade" value="<?php echo $value["idade"]; ?>" required>
	</p>
	<p>
		<label for="">Telefone:</label>
		<input type="text" name="telefone" value="<?php echo $value["telefone"]; ?>" required>
	</p>
	<p>
		<label for="">Endereco:</label>
		<input type="text" name="endereco" value="<?php echo $value["endereco"]; ?>" required>
	</p>
    <p>
		<label for="">Observacao:</label>
		<input type="text" name="observacao" value="<?php echo $value["observacao"]; ?>" required>
	</p>
	<input type="submit" name="bt-atualizar" value="Atualizar">
</form>
<?php 
}
?>
<?php
$alt = new AlterarEditarUsuarioModel();
$alt->alterarUsuario();
?>