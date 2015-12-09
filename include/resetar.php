<?

if(!isset($_SESSION)){
	session_start();
}

$_SESSION['quantAcertos'] = 0;
$_SESSION['quantErros'] = 0;
$_SESSION['nameUser'] = "";
$_SESSION['partidasJogadas'] = 0;

?>