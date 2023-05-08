<?php
	use models\AlterarEditarLivroModel;
	$alt = models\AlterarEditarLivroModel::listarLivros2();
    foreach ($alt as $value) {
?>

<form method="post">
	<p>
		<input type="hidden" name="cod_livro" value="<?php echo $value["cod_livro"]; ?>">
		<label for="">Autor:</label>
		<input type="text" name="letra_sobrenome" value="<?php echo $value["letra_sobrenome"]; ?>" required>
	</p>
	<p>
		<label for="">Titulo:</label>
		<input type="text" name="letra_titulo" value="<?php echo $value["letra_titulo"]; ?>" required>
	</p>
    <p>
		<label for="">Exemplar:</label>
		<input type="text" name="exemplar" value="<?php echo $value["exemplar"]; ?>" required>
	</p>
	<p>
		<label for="">Edicao:</label>
		<input type="text" name="edicao" value="<?php echo $value["edicao"]; ?>" required>
	</p>
	<p>
		<label for="">Ano de Registro:</label>
		<input type="text" name="ano_registro" value="<?php echo $value["ano_registro"]; ?>" required>
	</p>
	<input type="submit" name="bt-atualizar" value="Atualizar">
</form>
<?php 
}
?>
<?php 
$cad = new AlterarEditarLivroModel();
$cad ->alterarLivros();
?>