<?php
	function conectarbanco() {
		$host = "localhost";
		$banco = "final";
		$usuario = "root";
		$senha = "";
		$porta = "3306";
		$conn = new PDO ('mysql:host='.$host.';port='.$porta.';dbname='.$banco.'',$usuario, $senha);
		return $conn;
	}

	function executasql($sql) {
		$conn = conectarbanco();
		$conn->query($sql);
	}

	function selecionadiversosdados($sql) {
		$conn = conectarbanco();
		$retorno = $conn->prepare($sql);
		$retorno->execute();
		return $retorno;
	}

	function selecionaumdado($sql) {
		$conn = conectarbanco();
		$retorno = $conn->query($sql);
		return $retorno->fetch();
	}

	// function includee($a){
	// 	if ($a == "menu") {
	// 		include "include/menu.php";
	// 	} elseif ($a == "cabecalho") {
	// 		include "include/cabecalho.php";
	// 	} elseif ($a == "corpo") {
	// 		include "include/corpo.php";
	// 	} elseif ($a == "rodape") {
	// 		include "include/rodape.php";
	// 	} elseif ($a == "inicio") {
	// 		include "include/inicio.php";
	// 	} elseif ($a == "pg1") {
	// 		include "include/pg1.php";
	// 	} elseif ($a == "pg2") {
	// 		include "include/pg2.php";
	// 	} elseif ($a == "pg3") {
	// 		include "include/pg3.php";
	// 	} elseif ($a == "pg4") {
	// 		include "include/pg4.php";
	// 	}
	// }

	function includee($a){
		switch ($a) {
			case 'menu':
				include "include/menu.php";
				break;
			case 'cabecalho':
				include "include/cabecalho.php";
				break;
			case 'corpo':
				include "include/corpo.php";
				break;
			case 'rodape':
				include "include/rodape.php";
				break;
			case 'inicio':
				include "include/inicio.php";
				break;
			case 'pg1':
				include "include/pg1.php";
				break;
			case 'pg2':
				include "include/pg2.php";
				break;
			case 'pg3':
				include "include/pg3.php";
				break;
			case 'pg4':
				include "include/pg4.php";
				break;

			// default:
			// 	include "include/inicio.php";
			// 	break;
		}
	}
?>
