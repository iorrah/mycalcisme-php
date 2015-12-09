$(function(){
	$("#btnPular").click(function(){
		fPular();
	});
	$(".caixaTexto").blur(function(){
		$(".caixaTexto").focus();
	});
	$("#numN3").keypress(function(e){
		var keyCode = e.which;
		var keyVal = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		var regexY = new RegExp("^[0-9]+$");
		var regexN = new RegExp("^[a-zA-Z]+$");
	    if(regexN.test(keyVal)){
	    	return false;
	    }
	    if(keyCode==32){
	    	fPular();
	    }
	});
});
function fPular(){
	$("#numN3").val("");
	window.location.reload();
}
function fCalcular(){
	$("#formCalc").submit();
}

$("#btnStartAgain").click(function(){
	window.location.reload();
});

$("#btnHelp").click(function(){
	$("#helperTip").slideToggle();
});