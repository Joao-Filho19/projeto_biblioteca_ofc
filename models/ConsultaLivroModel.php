<?php
	namespace models;
	date_default_timezone_set('America/Sao_Paulo');
	class ConsultaLivroModel extends Model
	{
		// Método para listar os livros agrupados pelo título, incluindo o autor
		public static function listarLivrosAgrupados()
		{
			$query = "
				SELECT letra_titulo, letra_sobrenome, COUNT(*) as quantidade
				FROM livros
				GROUP BY letra_titulo, letra_sobrenome
			";

			$livros = \MySql::connect()->query($query);
			return $livros->fetchAll();
		}

	}


?>