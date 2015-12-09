<?

// $db_host = '127.0.0.1';
// $db_name = 'dbCalculadora';
// $db_user = 'root';
// $db_paas = '';

$db_host = 'mysql.hostinger.com.br';
$db_name = 'u767350937_appdw';
$db_user = 'u767350937_appdw';
$db_paas = 'e48c9Rymz';

$cConecta = mysql_connect($db_host, $db_user, $db_pass);

if (!$cConecta) {

    die('Erro ao se conectar ao Servidor: ' . mysql_error());

}

$dbSelecionado = mysql_select_db($db_name, $cConecta);

if (!$dbSelecionado) {

    die('Erro ao se conectar ao Banco de Dados : ' . mysql_error());

}

?>