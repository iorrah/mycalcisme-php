<?
if(isset($_SESSION['partidasJogadas']) && $_SESSION['partidasJogadas']>0 && isset($_SESSION['nameUser']) && $_SESSION['nameUser']!=""){
	$SQL = "INSERT INTO
		tbl_ranking
	(
		 nome
		,pontuacao
		,partidas
		,vitorias
		,derrotas
		,datapartida
	) VALUES (
		'".$_SESSION['nameUser']."'
		,".mt_rand(0,300)."
		,".$_SESSION['partidasJogadas']."
		,".$_SESSION['quantAcertos']."
		,".$_SESSION['quantErros']."
		,'".date("Y-m-d H:i:s")."'
	);";
	$RS = mysql_query($SQL, $cConecta) or die(mysql_error());
}
?>
<div class="desktop">
	<div class="middle">
		<div class="calculadora" id="main">
			<form method="post" name="formCalc" id="formCalc">
				<div class="title">Gotcha!</div>
				<div class="subtitle">Congrats for arriving here, eh?</div>
				<div class="container-boxRanking">
					<table class="boxRanking">
						<tr><th colspan="2">Ranking</th></tr>
						<?
						$SQL = "SELECT
						      nome
						      ,pontuacao
						FROM
						    tbl_ranking
						WHERE
						     nome != ''
						     AND pontuacao != ''
						ORDER BY
						      pontuacao
						DESC;";
						$RS = mysql_query($SQL,$cConecta) or die(mysql_error());
						if(mysql_num_rows($RS)==0){
						?>
							<tr><td colspan="2">Nenhum resultado encontrado!</td></tr>
						<?	
						}else{
							while($RSArr = mysql_fetch_array($RS)){
							?>
								<tr><td><?=$RSArr[0];?></td><td><?=$RSArr[1];?></td></tr>
							<?
							}
						}
						?>
					</table>
				</div>
				<div class="boxBotao">
					<input type="button" value="Go Go!" name="btnStartAgain" id="btnStartAgain" class="botaoSucesso" />
					<input type="button" value="Rate" name="btnRate" id="btnRate" class="botaoInfo" />
				</div>
			</form>
		</div>
	</div>
</div>


<? require_once "resetar.php"; ?>