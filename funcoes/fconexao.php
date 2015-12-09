<?
$cConecta = mysql_connect('127.0.0.1', 'root', '');
if (!$cConecta) {
    die('Erro ao se conectar ao Servidor: ' . mysql_error());
}
$dbSelecionado = mysql_select_db('dbCalculadora', $cConecta);
if (!$dbSelecionado) {
    die('Erro ao se conectar ao Banco de Dados : ' . mysql_error());
}
?>