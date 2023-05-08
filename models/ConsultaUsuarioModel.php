<?php
	namespace models;
	date_default_timezone_set('America/Sao_Paulo');
	class ConsultaUsuarioModel extends Model
	{

		//Aqui é o método para puxar os clientes!
		public static function listarUsuarios(){
		$usuarios = \MySql::connect()->prepare("SELECT * FROM usuario");
		$usuarios->execute();
		return $usuarios->fetchAll();
		}
	}
?>