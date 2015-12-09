<?

if(isset($_POST['txtNameUser']) && $_POST['txtNameUser']!="" && isset($_POST['btnRegister'])){
	$_SESSION['nameUser'] = $_POST['txtNameUser'];
	echo "<script>window.location.reload();</script>";
}

?>
<div class="desktop">
	<div class="middle">
		<div class="calculadora" id="main">
			<form method="post" name="formCalc" id="formCalc">
				<div class="title">Heeey!</div>
				<div class="subtitle">Type ur name below, huh?</div>
				<div class="boxResultado">
					<input type="text" name="txtNameUser" id="txtNameUser" value="" autofocus required maxlength="200" class="caixaTexto texto" />
				</div>
				<div class="boxBotao">
					<input type="submit" value="Go!" name="btnRegister" id="btnRegister" class="botaoSucesso" />
					<input type="button" value="Help?" name="btnHelp" id="btnHelp" class="botaoInfo" />
				</div>
				<div id="helperTip">
					<p><b>Controls:</b> you can use <i>Space Bar</i> to skip some question and <i>Enter</i> do submit answer. There are also buttons with these functions.</p>
					<p><b>Developer:</b> the phpaper - Gaspar, Gab.</p>
				</div>
			</form>
		</div>
	</div>
</div>