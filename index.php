<?

session_start();

require_once "include/trata_session.php";

require_once "include/HTML_partecima.php";

if($_SESSION['nameUser']!=""){

	if($_SESSION['partidasJogadas']==$totalPartidas){

		require_once "include/finaliza.php";

	}else{
	
		require_once "include/calculadora.php";

	}

}else if($_SESSION['nameUser']=="" && $_SESSION['partidasJogadas']==0){

	require_once "include/registro.php";

}

require_once "include/HTML_partebaixo.php";

?>