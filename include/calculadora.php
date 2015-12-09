	<?

	if(isset($_POST['numN3']) && trim($_POST['numN3'])!="" && isset($_POST['btnCalcular'])){

		$_SESSION['partidasJogadas']++;

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

		if($resultReal==$_POST['numN3']){
			// code...
			$_SESSION['quantAcertos']++;
			$hexaFundo = "#1AC685";
		}else{
			// code...
			$_SESSION['quantErros']++;
			$hexaFundo = "#CA222B";
		}

	}else{
		// code...
	}

	?>
	<div class="desktop" <?if(isset($hexaFundo)){?>style="background-color: <?=$hexaFundo;?> !important;"<?}?>>
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
					<input type="text" name="numN3" id="numN3" value="" autofocus required maxlength="3" class="caixaTexto numero" />
				</div>
				<div class="boxBotao">
					<input type="submit" value="Send" name="btnCalcular" id="btnCalcular" class="botaoSucesso" />
					<input type="button" value="Skip" name="btnPular" id="btnPular" class="botaoInfo" />
				</div>
			</form>
		</div>
		</div>
	</div>