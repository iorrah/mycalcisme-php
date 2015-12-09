<?
if(!isset($_SESSION['quantAcertos'])){
	$_SESSION['quantAcertos'] = 0;
}

if(!isset($_SESSION['quantErros'])){
	$_SESSION['quantErros'] = 0;
}

if(!isset($_SESSION['nameUser'])){
	$_SESSION['nameUser'] = "";
}

if(!isset($_SESSION['partidasJogadas'])){
	$_SESSION['partidasJogadas'] = 0;
}
?>