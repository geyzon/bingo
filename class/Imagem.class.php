<?php

class Imagem extends Arquivo {
	
	//
	public function geraThumbnail ($EnderecoFinal) {
		
		$img = null;
		if ($this->getExtensao() == 'jpg' || $this->getExtensao() == 'jpeg') {
	    	$img = imagecreatefromjpeg($EnderecoFinal);
		}
		elseif ($this->getExtensao() == 'png') {
			$img = imagecreatefrompng($EnderecoFinal);
		}
		elseif ($this->getExtensao() == 'gif') {
			$img = imagecreatefromgif($EnderecoFinal);
		}
	
		// If an image was successfully loaded, test the image for size
	  	if ($img) {
			// Get image size and scale ratio
			$largura = imagesx($img);
			$altura = imagesy($img);
			$escala = 90/$altura;
			// If the image is larger than the max shrink it
			if ($escala < 1) {
				$nova_largura = floor($escala*$largura);
				$nova_altura = floor($escala*$altura);
				// Create a new temporary image
				$tmp_img = imagecreatetruecolor($nova_largura, $nova_altura);
				// Copy and resize old image into new image
				imagecopyresized($tmp_img, $img,0,0,0,0,$nova_largura,$nova_altura,$largura,$altura);
				imagedestroy($img);
				$img = $tmp_img;
			}
		}
	
		if ($this->getExtensao() == 'jpg' || $this->getExtensao() == 'jpeg') {
			imagejpeg($img,$EnderecoFinal,85);
		}
		elseif ($this->getExtensao() == 'png') {
			imagepng($img,$EnderecoFinal);
		}
		elseif ($this->getExtensao() == 'gif') {
			imagegif($img,$EnderecoFinal);
		}
		imagedestroy($img);			
	
	}

}

?>