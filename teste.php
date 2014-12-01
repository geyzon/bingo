<?php
print "<pre>";
print "DOCUMENT_ROOT: ".$_SERVER['DOCUMENT_ROOT']."<br />";
print "SERVER_NAME..: ".$_SERVER['SERVER_NAME']."<br />";
print "HTTP_HOST....: ".$_SERVER['HTTP_HOST']."<br />";
print "PHP_SELF.....: ".$_SERVER['PHP_SELF']."<br />";
print "REQUEST_URI..: ".$_SERVER['REQUEST_URI']."<br />";
print "GETCWD.......: ".getcwd()."<br />";
switch ($_SERVER['SERVER_NAME']) {
	case '172.17.1.82':
	case 'ww3.joomla.tjse.jus.br':
		$_SERVER['HTTP_HOST'] = 'ww3.joomla.tjse.jus.br';
	case '172.17.1.122':
	case 'localhost':
		break;
	case 'gtic.tjse.jus.br':
		$_SERVER['HTTP_HOST'] = 'gtic.tjse.jus.br';
		break;				
	case 'agencia.tjse.jus.br':
		$_SERVER['HTTP_HOST'] = 'agencia.tjse.jus.br';
		break;				
	case 'www.esmese.com.br':
		$_SERVER['HTTP_HOST'] = 'www.esmese.com.br';
		break;				
	case 'www.colegiodepresidentes.jus.br':
		$_SERVER['HTTP_HOST'] = 'www.colegiodepresidentes.jus.br';
		break;
		
	case '172.17.3.28':
	case '172.17.3.35':
	case 'vpl-jomla-cte0000.tjse.jus.br':
	case 'vpl-joml1-cte0000.tjse.jus.br':
		$_SERVER['HTTP_HOST'] = 'www.tjse.jus.br';
		break;	
	default:
}

print "HTTP_HOST Alt: ".$_SERVER['HTTP_HOST']."<br />";
print DIRECTORY_SEPARATOR."<br />"."<br />";
$subdiretorios = explode(DIRECTORY_SEPARATOR, str_ireplace('/',DIRECTORY_SEPARATOR,strtolower($_SERVER['PHP_SELF'])) );
$pasta = ($subdiretorios[2] == "") ? '/' : $subdiretorios[1];
$enderecominusculo = strtolower(getcwd());
$raiz = substr($enderecominusculo, 0,strripos($enderecominusculo,$pasta));
$endereco = ($raiz == "" ? $_SERVER['DOCUMENT_ROOT'] : $raiz);
print "strtolower(GETCWD): ".strtolower(getcwd())."<br />";
print "Endereco..........: $endereco<br />";
print "Diretórios........: $subdiretorios[0] | $subdiretorios[1] | $subdiretorios[2]<br />";
print "Pasta.............: $pasta<br /><br />";

print $endereco."dados_conexao.inc.php<br />";
print dirname(__FILE__)."<br /><br />";
print "PHP : ".phpversion()."<br />";
print "</pre>";

?>
