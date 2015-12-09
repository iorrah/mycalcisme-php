<?
// CONFIGURACAO
$randN1 = mt_rand(0,10);
$randN2 = mt_rand(0,$randN1);
$arrOperadores = array("+","-","*");
$totalPartidas = 10;
$indexOperador = array_rand($arrOperadores, 1);
$operador = $arrOperadores[$indexOperador];
// DEFININDO O HORARIO PADRAO
date_default_timezone_set('America/Sao_Paulo');
?>