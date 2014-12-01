<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Cartelas</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.10.0.min.js"></script>
</head>
<body>
<?php
define('HTTP_SERVER', 'http://www.swcorp.com.br/');
require_once ("func".DIRECTORY_SEPARATOR."functions.inc.php");
require_once ("class".DIRECTORY_SEPARATOR."Conexao.class.php");

$conn = mysql_connect ('mysql1000.mochahost.com','geyzon_bingo','d130perc');

if (isset($_POST['numeros']) && (VariavelSegura($_POST['numeros']) != "") &&
	isset($_POST['idcartela']) &&(VariavelSegura($_POST['idcartela']) != "") ) {
	$sql = "INSERT INTO cartelas VALUE('','".$_POST['numeros']."', 0, 0)";
	$result = mysql_query($sql);
}
?>
<form name="form1" id="form1" method="post" action="cadastro_cartelas.php">
<div style="width: 280px; margin: 8px auto; font-size: 19px ">
	<table border="0" cellspacing="4px">
    <?php
    	for ($i = 0; $i <= 8; $i++) {
        	print "<tr>";
            for ($j = 1; $j <= 10; $j++) {
            	$numtab = ($i * 10) + $j;
				if ($numtab < 10) $numtab = "0".$numtab;
                print "<td class='numsorteado' id=".$numtab.">".$numtab."</td>";
            }
            print "</tr>";
        }
    ?>
    </table>
</div>
<div style="width: 362px; margin: 8px auto">
<input name="numeros" class="numeros" type="text" id="numeros" size="39" maxlength="44"> 
<?php
$sql = "SELECT IDcartela FROM cartelas ORDER BY IDcartela DESC LIMIT 0,1";
$result = mysql_query($sql);
$linha = mysql_fetch_assoc($result);
$inicio = $linha['IDcartela'];
?>
  <select class="elemform" name="idcartela" id="idcartela">
  	<?php
		for ($i = $inicio + 1; $i <= 48; $i++) {
			print "<option value='".$i."'>".$i."</option>";
		}
	?>		
  </select>
</div> 
<div style="width: 105px; margin: 8px auto">
	<input class="elemform" id="submit" type="button" value="Cadastrar">
</div>
</form>
<script type="text/javascript" src="js/scriptcartela.js"></script>
</body>
</html>