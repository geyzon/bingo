// Altera valor apresentado no Display

maximo = 90;
max_cartela = 15;

$("#zera").click(function(){
	$("#botao_sortear").val("INICIAR");
	zeraCartelas();
});

$("#botao_sortear").click(function(){
	
		if ($(this)..val() == "INICIAR") {
			zeraCartelas();
			$(this).val("SORTEAR");
		}
		
		var html = "<img src='img/carregando.gif' width='150' height='150' alt=' '>";
		$("#sorteado").html(html);
		var cont = 0;
		var completo = false;
		$("#botao_sortear").fadeOut(100);
		var num = parseInt(Math.random() * maximo + 1);
		while ($("td").eq(num - 1).hasClass("numsorteado") && !(completo)) {
			num = parseInt(Math.random() * maximo + 1);
			cont++;
			if (cont == maximo) {
				completo = true;
				num = "FIM";		
			}
		}
		var tempo = parseInt(Math.random() *(parseInt(Math.random() * 4500 + 1)) + 1500);
		setTimeout(function(){
			$("#quadro div").eq(num - 1).addClass("numsorteado");
			valor = (num < 10) ? "0"+ num : num;
			$("#sorteado").text(valor);
			melhoresCartelas("cartelas.php?act=atualiza&val=" + valor);
			$("#botao_sortear").fadeIn(300);
		},tempo);
});

function iniciaAjax() {
	var objetoAjax = false;
	if (window.XMLHttpRequest) {
		objetoAjax = new XMLHttpRequest();
	} else if (window.ActiveXObject) {
		try {
			objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try {
				objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e) {
				objetoAjax = false;				
			}
		}
	}
	return objetoAjax;	
}

function atualizaCartelas(arquivo) {
	var requisicaoAjax = iniciaAjax();
	if (requisicaoAjax) {
		requisicaoAjax.onreadystatechange = function() {
			trataResposta (requisicaoAjax);
		}
		requisicaoAjax.open("GET", arquivo, true);
		requisicaoAjax.send(null);
	}
}

function melhoresCartelas(arquivo) {
	var requisicaoAjax = iniciaAjax();
	if (requisicaoAjax) {
		requisicaoAjax.onreadystatechange = function() {
			var dados = trataResposta (requisicaoAjax);
			var melhores = [];
			var fizeram = [];
			for (i = 0; i < 3; i++) {
				
				melhores[i] = dados.getElementsByTagName("total")[i].firstChild.nodeValue;
				
				if (melhores[i] == 1) {
					s = "";
				} else if (melhores[i] > 1) { 
					s = "s";
				} else $("#placar li:eq("+i+")").text("");
				
				fizeram[i] = dados.getElementsByTagName("sorteados")[i].firstChild.nodeValue;
				
				if (fizeram[i] > 0) {
					if (fizeram[i] == max_cartela) {
						if (melhores[i] == 1) {
							var cartelavencedora = dados.getElementsByTagName("idcartela")[0].firstChild.nodeValue;
							if (cartelavencedora < 10) "0" + cartelavencedora;
							s = "";
						} else { 
							s = "s";
						}
						$("#placar li:eq("+i+")").text(melhores[i] + " cartela" + s + " com " + fizeram[i] + " ponto" + fs);	
						$("#placar li:eq(0)").addClass("numvencedor");
						var $num = "";
						for (n = 0; n < 15; n++) {
							$total = dados.getElementsByTagName("numero")[n].firstChild.nodeValue;
							
							$("td").eq($total - 1).removeClass("numsorteado");
							$("td").eq($total - 1).addClass("numvencedor");
						}
						//$("#botao_sortear").val("INICIAR");
					}
					else {
						if (fizeram[i] == 1) fs = ""; else fs = "s";
						$("#placar li:eq("+i+")").text(melhores[i] + " cartela" + s + " com " + fizeram[i] + " ponto" + fs);	
					}
				} else $("#placar li:eq("+i+")").text("");
			}
		}
		requisicaoAjax.open("GET", arquivo, true);
		requisicaoAjax.send(null);
	}
}

function trataResposta(requisicaoAjax) {
	if(requisicaoAjax.readyState == 4) {
		if(requisicaoAjax.status == 200 || requisicaoAjax.status == 304) {
			var dados = requisicaoAjax.responseXML;
			return dados;
		} else {
			alert("Problema na comunicação com o servidor");
		}
	}
}

function zeraCartelas() {
	$("#sorteado").text("");
	$("td").removeClass("numsorteado");
	$("td").removeClass("numvencedor");
	$("#placar li:eq(0)").removeClass("numvencedor");
	$("#placar li").text("");
	melhoresCartelas("cartelas.php?act=zera");	
}
