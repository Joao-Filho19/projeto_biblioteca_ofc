<?php
	namespace models;
	class CadastroLivroModel extends Model
	{

		public function cadastrarLivros(){
            date_default_timezone_set('America/Sao_Paulo');
			if (isset($_POST["bt_enviar"])) {
			$cdd = $_POST["cdd"];
			// Obtem sobrenome e nome do autor dos campos separados
            $sobrenome_autor = $_POST["sobrenome_autor"];
            $nome_autor = $_POST["nome_autor"];
            
            // Concatena sobrenome e nome com um espaço em branco
            $letra_sobrenome = $sobrenome_autor . ' ' . $nome_autor;

			$letra_titulo = $_POST["titulo"];
			$exemplar = $_POST["exemplar"];
			$edicao = $_POST["edicao"];
			$ano_registro = date('Y-m-d');
            $livros = \MySql::connect()->prepare("INSERT INTO livros(cdd,letra_sobrenome,letra_titulo, exemplar, edicao, ano_registro) values (?,?,?,?,?,?)");
			$livros -> execute (array ($cdd, $letra_sobrenome, $letra_titulo, $exemplar, $edicao, $ano_registro));
			if(!$livros->rowCount()>0){
				echo "Erro durante o insert: erro em $livros";
			}
			else{
				echo "<script> function cadastro(){
					alert('Cadastro realizado!')
					}
					cadastro();</script>";
			}
			}
			
		}
	}
?>