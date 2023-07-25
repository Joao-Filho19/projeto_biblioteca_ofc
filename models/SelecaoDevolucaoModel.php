<?php
	namespace models;
	class SelecaoDevolucaoModel extends Model
	{
		public function devolverLivro(){
			if (isset($_POST["bt-dev"])) {
			$id_emprestimo = $_POST["id_emprestimo"];
            $excl = \MySql::connect()->prepare("DELETE FROM emprestado WHERE id_emprestimo=$id_emprestimo");
			$excl -> execute ();
			if(!$excl->rowCount()>0){
				echo "Erro durante o insert: erro em $excl";
			}
			else{
				echo "<script> function cadastro(){
					alert('Livro devolvido com sucessso!')
					}
					cadastro()
					window.location.href='http://localhost/estrutura_mvc/selecaoDevolucao';
					</script>";
			}
			}
			
		}
	}
?>