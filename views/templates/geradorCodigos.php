<main style="margin-top:2rem">
	<?php
//select.php 

include 'connection.php';
/*query banco de dados*/
header('content-type: text/html; charset=utf-8');
// $sql = "SELECT * FROM livros";
$sql = "select cdd, concat(upper(substring(letra_sobrenome,1,1)),lower(substring(letra_titulo,1,1))) as letra_autor_letra_titulo,concat(substring(edicao,1,1),'.ed.v',volume) as edicao_volume,concat('ex.',exemplar),concat(cod_livro,'-',substring(ano_registro, 1,4)) as codigo_ano_regis from livros";
$result = $mysqli->query($sql);

$tabela = "<table>";
//result->num_rows quantidade de linhas de uma consulta
if($result->num_rows<=0){
	
}else{
    $tabela .= "
		<tr>
			<th class='rotulo'>Código</th> 
			<th class='rotulo'>CDD</th>
			<th class='rotulo'>Autor</th>   
			<th class='rotulo'>Titulo</th>
			<th class='rotulo'>Exemplar</th>
			<th class='rotulo'>Edição</th>
            <th class='rotulo'>ano_registro</th>
		</tr>
		<style>
		
		</style>
		";
	while(list($cdd, $letra_autor_letra_titulo, $edicao_volume, $exemplar, $codigo_ano_regis) = $result->fetch_row()) {
		$tabela .= "
			<tr>
				
				<td>$cdd</td>
				<td>$letra_autor_letra_titulo</td>
				<td>$edicao_volume</td>
				<td>$exemplar</td>
				<td>$codigo_ano_regis</td>

			
			</tr>
			<style>
			
			</style>
			";
	}//fim while
	$tabela .= "</table>";
}
?>


<?php 
echo $tabela;
?>
	</main>