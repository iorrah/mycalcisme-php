<?

session_start();

if (!isset($_SESSION['quantAcertos'])) {
	$_SESSION['quantAcertos'] = 0;
}

if (!isset($_SESSION['quantErros'])) {
	$_SESSION['quantErros'] = 0;
}

if (isset($_POST['numN3']) && isset($_POST['btnCalcular'])) {

	switch ($_POST['hddOperador']) {
		
		case "+":
			$resultReal = $_POST['hddN1'] + $_POST['hddN2'];
			break;
		case "-":
			$resultReal = $_POST['hddN1'] - $_POST['hddN2'];
			break;
		case "*":
			$resultReal = $_POST['hddN1'] * $_POST['hddN2'];
			break;
		case "/":
			$resultReal = $_POST['hddN1'] / $_POST['hddN2'];
			break;

		default:
			die("Erro! Informações perdidas no caminho.");
			break;

	}

	if ($resultReal==$_POST['numN3']) {
		$mensagemResult = "Parabéns, você acertou!!! <br><br><br>";
		$idResult = 1;
		$_SESSION['quantAcertos']++;
		$hexaFundo = "#1AC685";
	} else {
		$mensagemResult = "Vish... Incorreto. Mais sorte na próxima vez! (: <br><br><br>";
		$idResult = 2;
		$_SESSION['quantErros']++;
		$hexaFundo = "#CA222B";
	}

} else {
	$mensagemResult = "";
}

// GERAR NUMERO RANDOMICO
$randN1 = mt_rand(0,5);
$randN2 = mt_rand(0,5);
$arrOperadores = array("+","-","*");
$indexOperador = array_rand($arrOperadores, 1);
$operador = $arrOperadores[$indexOperador];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercicio Tabuada</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="jquery-1.11.2.min.js"></script>
</head>
<body>
	<div class="desktop" <?if (isset($hexaFundo)) {?>style="background-color: <?=$hexaFundo;?> !important;"<?}?>>
		<div class="middle">
		<div class="calculadora">
			<form method="post" name="formCalc" id="formCalc">
				<div class="boxQuantAcertos font-white"><?=str_pad($_SESSION['quantAcertos'], 2, '0', STR_PAD_LEFT);?></div>
				<div class="boxQuantErros font-white"><?=str_pad($_SESSION['quantErros'], 2, '0', STR_PAD_LEFT);?></div>
				<div class="quebraFloat"></div>
				<input type="hidden" name="hddN1" id="hddN1" value="<?=$randN1;?>" />
				<input type="hidden" name="hddN2" id="hddN2" value="<?=$randN2;?>" />
				<input type="hidden" name="hddOperador" id="hddOperador" value="<?=$operador;?>" />
				<label class="boxEquacao" for="numN3"><?=$randN1;?> <?=$operador;?> <?=$randN2;?> = </label>
				<div class="boxResultado">
					<input type="text" name="numN3" id="numN3" value="" autofocus required maxlength="3" class="caixaTexto" />
				</div>
				<div class="boxBotao">
					<input type="submit" value="Enviar" name="btnCalcular" id="btnCalcular" class="botaoSucesso" />
					<input type="button" value="Pular" name="btnPular" id="btnPular" class="botaoInfo" />
				</div>
			</form>
		</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function() {
			$("#btnPular").click(function() {
				fPular();
			});
			$("#numN3").blur(function() {
				$("#numN3").focus();
			});
			$("#numN3").keypress(function(e) {
				var keyCode = e.which;
				var keyVal = String.fromCharCode(!event.charCode ? event.which : event.charCode);
				var regex = new RegExp("^[0-9]+$");
			    if (keyCode==32) {
			    	fPular();
			    	return;
			    }
			    if (keyCode==13) {
			    	fCalcular();
			    	return;
			    }
			    if (!regex.test(keyVal)) {
			    	return false;
			    }
			});
		});
		function fPular() {
			window.location = "calc.php";
		}
		function fCalcular() {
			$("#formCalc").submit();
		}
	</script>
</body>
</html>