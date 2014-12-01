<?php
function VariavelSegura ($var) {
	$criterios = array ("'",";","-","*","delete","insert","update","select","create","grant","truncate","String","fromCharCode"," ");
	return str_ireplace ($criterios,"",$var);
}
function UrlAmigavel ($string) {
	$caracteres['caracteresNormalizados'] = array (
		'�'=>'S', '�'=>'s', '�'=>'Dj','�'=>'Z', '�'=>'z', '�'=>'A', '�'=>'A', '�'=>'A', '�'=>'A', '�'=>'A',
		'�'=>'A', '�'=>'A', '�'=>'C', '�'=>'E', '�'=>'E', '�'=>'E', '�'=>'E', '�'=>'I', '�'=>'I', '�'=>'I',
		'�'=>'I', '�'=>'N', '�'=>'O', '�'=>'O', '�'=>'O', '�'=>'O', '�'=>'O', '�'=>'O', '�'=>'U', '�'=>'U',
		'�'=>'U', '�'=>'U', '�'=>'Y', '�'=>'B', '�'=>'Ss','�'=>'a', '�'=>'a', '�'=>'a', '�'=>'a', '�'=>'a',
		'�'=>'a', '�'=>'a', '�'=>'c', '�'=>'e', '�'=>'e', '�'=>'e', '�'=>'e', '�'=>'i', '�'=>'i', '�'=>'i',
		'�'=>'i', '�'=>'o', '�'=>'n', '�'=>'o', '�'=>'o', '�'=>'o', '�'=>'o', '�'=>'o', '�'=>'o', '�'=>'u',
		'�'=>'u', '�'=>'u', '�'=>'y', '�'=>'y', '�'=>'b', '�'=>'y', '�'=>'f', ' '=>'-', '--'=>'-','&'=>'-e-'
	);
	$string = strtr ($string, $caracteres['caracteresNormalizados']); // Substitui os caracteres especiais
    $string = trim (preg_replace('/[^\w\d_ -]/si', '', $string)); // Remove todos os caracteres ilegais
	return strtolower($string); //finaliza, gerando uma sa�da em min�sculo para a funcao
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
			$data = 'Ter�a, ';
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
			$data = 'S�bado, ';
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
			$data .= 'mar�o';
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