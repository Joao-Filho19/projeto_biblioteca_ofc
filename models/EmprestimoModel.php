<?php
	namespace models;
	class EmprestimoModel extends Model
	{
        
		public function emprestar(){
            date_default_timezone_set('America/Sao_Paulo');
			if (isset($_POST["bt_enviar"])) {
                $fk_cod_livro = $_POST["fk_cod_livro"];
                $fk_cod_usuario = $_POST["fk_cod_usuario"];
                $data_emprestimo = date('Y-m-d');
                $data_devolucao = date('Y-m-d',strtotime('+1 week'));
                $emprestimo = \MySql::connect()->prepare("INSERT INTO emprestado values (NULL,?,?,DEFAULT,?,?)");
                $emprestimo -> execute (array ($fk_cod_livro, $fk_cod_usuario, $data_emprestimo, $data_devolucao));
			if(!$emprestimo->rowCount()>0){
				echo "Erro durante o insert: erro em $emprestimo";
			}
			else{
				echo "<script> function cadastro(){
					alert('Emprestimo realizado!')
					}
					cadastro();</script>";
			}
			}
			
		}
	}
?>