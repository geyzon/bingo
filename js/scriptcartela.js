
$(document).ready(function() {
	var array = [];
	var i = 0;
	qtemaxnumporcartela = 15;
    $("td").click(function() {
		var valor = $(this).text();
		if ($(this).hasClass("numsorteado")) {
			if (array.length < qtemaxnumporcartela) {
				$(this).removeClass("numsorteado");
				$(this).addClass("numvencedor");
				array[i] = valor;
				array.sort();
				if ($("#numeros").length == 0) {
					$("#numeros").val(array[0]);
				}
				else {
					$("#numeros").val("");
					$("#numeros").val(array[0]);
					for (j = 1; j < array.length; j++) {
						$("#numeros").val($("#numeros").val() + " " + array[j]);
					}				
				}
				i++;
			} else alert("A caixa já possui " + qtemaxnumporcartela + " números! Retire algum se quiser incluir outro!");
		}
		else {
			$(this).removeClass("numvencedor");
			$(this).addClass("numsorteado");
			array = jQuery.grep(array, function(n,i) {
				return n != valor;
			});
			
			$("#numeros").val("");
			for (j = 0; j < array.length; j++) {
				if (j == 0) {
					$("#numeros").val(array[j]);
				}
				else {
					$("#numeros").val($("#numeros").val() + " " + array[j]);				
				}
			}	
			i--;
		}
	});
	
	$("#submit").click(function () {
		if (array.length < qtemaxnumporcartela) {
			alert("Faltam cerca de " + (qtemaxnumporcartela - array.length ) + " numeros!");
		}
		else {
			$("#submit").attr("type","submit");
			$("#submit").submit();
		}
	});
	
	$("#escolha").click(function () {
		if ($("input:checked").length == 0) {
			alert("Escolha ao menos uma cartela!");
		}
		else {
			$("#escolha").attr("type","submit");
			$("#escolha").submit();
		}
	});
	
});