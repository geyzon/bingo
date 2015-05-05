<?php
// Monta o XML com os dados das cartelas do jogo
require_once ("func".DIRECTORY_SEPARATOR."functions.inc.php");
require_once ("class".DIRECTORY_SEPARATOR."Conexao.class.php");
require_once ("class".DIRECTORY_SEPARATOR."Jogo.class.php");
$conexao = new Conexao();
$Jogo = new Jogo($conexao);
if ((isset($_GET['act'])) && (VariavelSegura($_GET['act']) != "")) {
	$act = VariavelSegura($_GET['act']);
	switch($act) {
		case 'atualiza': 
			if ((isset($_GET['val'])) && (VariavelSegura($_GET['val']) != "")) { 
				$Jogo->atualizaBase($_GET['val']); 
			}
			break;
		case 'zera':
			$Jogo->zeraCartelas(); 
			break;
		default: 
	}
}
// Recupera Melhores Cartelas
$sql = "SELECT IDcartela, numeros, quant_sorteados, COUNT(quant_sorteados) AS total 
		FROM cartelas
		WHERE em_uso = 1
		GROUP BY quant_sorteados
		ORDER BY quant_sorteados
		DESC LIMIT 0,3";
$result = $conexao->Query($sql);
// Configura o cabecalho do XML
$xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
$xml = $xml. "<cartelas>\n";
while ($linha = $conexao->fetchAssoc($result)) {
	$xml = $xml."    <cartela>\n";
	$xml = $xml. "        <total>".$linha['total']."</total>\n";
	$xml = $xml. "        <sorteados>".$linha['quant_sorteados']."</sorteados>\n";
	$xml = $xml. "        <idcartela>".$linha['IDcartela']."</idcartela>\n";
	$xml = $xml. "        <numeros>\n";
	$numeros = explode (" ", $linha['numeros']);
	for ($i = 0; $i < count($numeros); $i++) {
		$xml = $xml. "            <numero>".$numeros[$i]."</numero>\n";
	}
	$xml = $xml. "        </numeros>\n";
	$xml = $xml. "    </cartela>\n";
}
$xml = $xml. "</cartelas>";
// Envia Cabeçalho que monta XML
header ("Content-type: text/xml");
print $xml;