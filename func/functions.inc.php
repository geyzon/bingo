<?php
function VariavelSegura ($var) {
	$criterios = array ("'",";","-","*","delete","insert","update","select","create","grant","truncate","String","fromCharCode"," ");
	return str_ireplace ($criterios,"",$var);
}
function UrlAmigavel ($string) {
	$caracteres['caracteresNormalizados'] = array (
		'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
		'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
		'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
		'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
		'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
		'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
		'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f', ' '=>'-', '--'=>'-','&'=>'-e-'
	);
	$string = strtr ($string, $caracteres['caracteresNormalizados']); // Substitui os caracteres especiais
    $string = trim (preg_replace('/[^\w\d_ -]/si', '', $string)); // Remove todos os caracteres ilegais
	return strtolower($string); //finaliza, gerando uma saída em minúsculo para a funcao
}
function DataPorExtenso () {

	switch (date('l')) {
		case 'Sunday':
			$data = 'Domingo, ';
			break;
		case 'Monday':
			$data = 'Segunda, ';
			break;
		case 'Tuesday':
			$data = 'Terça, ';
			break;
		case 'Wednesday':
			$data = 'Quarta, ';
			break;
		case 'Thursday':
			$data = 'Quinta, ';
			break;
		case 'Friday':
			$data = 'Sexta, ';
			break;
		case 'Saturday':
			$data = 'Sábado, ';
			break;
		default:
	}
	
	$data .= date ('j \d\e ');
	
	switch (date('n')) {
		case '1':
			$data .= 'janeiro';
			break;
		case '2':
			$data .= 'fevereiro';
			break;
		case '3':
			$data .= 'março';
			break;
		case '4':
			$data .= 'abril';
			break;
		case '5':
			$data .= 'maio';
			break;
		case '6':
			$data .= 'junho';
			break;
		case '7':
			$data .= 'julho';
			break;
		case '8':
			$data .= 'agosto';
			break;
		case '9':
			$data .= 'setembro';
			break;
		case '10':
			$data .= 'outubro';
			break;
		case '11':
			$data .= 'novembro';
			break;
		case '12':
			$data .= 'dezembro';
			break;
		default:
	}
	$data .= date (' \d\e Y');
	return $data;
}
function GetMicrotime() 
{ 
    list($usec, $sec) = explode(" ", microtime()); 
    return ((float)$usec + (float)$sec)*100; 
} 
function Periodo ($i, $f) {
	$i = explode ("-",$i);
	$f = explode ("-",$f);
	
	$id = $i[2];
	$im = $i[1];
	$iy = $i[0];
	$fd = $f[2];
	$fm = $f[1];
	$fy = $f[0];
	
	$periodo = $id;
	
	if ($im <> $fm) {
		$periodo .= "/".$im;
		$diferente = TRUE;
	}
	else
		$diferente = FALSE;
		
	if ($iy <> $fy) {
		$periodo .= "/".$iy;
		$diferente = TRUE;
	}
	
	if (($diferente) || ($id <> $fd)) {
		$periodo .= " a ";
		$periodo .= $fd;
	}
	
	$periodo .= "/".$fm;
	//."/".$fy;
	return $periodo;
}
function Imagem ($nome,$legenda) {
	$codigo = "<a href='fotos/".$nome."' rel='lightbox' title='".$legenda."'><img src='fotos/".$nome."' width='184' heigth='115' style='float:left; margin: 10px;' border=0 /> </a>";
	return $codigo;
}