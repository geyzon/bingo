<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seleção de Cartelas para Jogar</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
<?php
require_once ("func".DIRECTORY_SEPARATOR."functions.inc.php");
require_once ("class".DIRECTORY_SEPARATOR."Conexao.class.php");

$conexao = new Conexao();

if (isset($_GET['act']) &&(VariavelSegura($_GET['act']) != "") ) {
	if (VariavelSegura($_GET['act']) == "libera") {
		$sql = "UPDATE cartelas SET quant_sorteados = 0, em_uso = 0";
		$result = $conexao->Query($sql);
	}
}

if (isset($_POST['idcartela']) &&(count(VariavelSegura($_POST['idcartela'])) > 0) ) {
	for ($i = 0; $i < count($_POST['idcartela']); $i++) {
		$sql = "UPDATE cartelas SET em_uso = 1 WHERE IDcartela = ".VariavelSegura($_POST['idcartela'][$i]);
		$result = $conexao->Query($sql);
	}
}
?>
<form name="form1" id="form1" method="post" action="escolha_cartelas.php">
<a href="index.php"><label>Voltar à Tela Principal</label></a>
<div style="width: 100%; margin: 8px auto">

<?php
$sql = "SELECT IDcartela, numeros FROM cartelas WHERE em_uso = 0 LIMIT 0,50";
$result = $conexao->Query($sql);
while ($linha = $conexao->fetchAssoc($result)) {
?>
	<div class="cartelasdalista">
	<input name="idcartela[]" type="checkbox" class="cx_selecao" value="<?=$linha['IDcartela']?>" id="id<?=$linha['IDcartela']?>"><label><b><?php print (($linha['IDcartela'] < 10) ? "0" : "").$linha['IDcartela']; ?></b></label> - <?=$linha['numeros']?>
    </div>
<?php
}
?>

</div>
<div style="width: 42px; position: relative; top: 17px; margin: 8px auto">
<p></p>
	<input class="elemform" id="escolha" type="button" value="Colocar no Jogo">
</div>
</form>
<script type="text/javascript" src="js/scriptcartela.js"></script>
</body>
</html>