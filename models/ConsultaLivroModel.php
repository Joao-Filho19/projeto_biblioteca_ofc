<?php
	namespace models;
	date_default_timezone_set('America/Sao_Paulo');
	class ConsultaLivroModel extends Model
	{

		//Aqui é o método para puxar os clientes!
		public static function listarLivros(){
		$livros = \MySql::connect()->prepare("SELECT * FROM livros");
		$livros->execute();
		return $livros->fetchAll();
		}
	}
?>