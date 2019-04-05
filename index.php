<!doctype html>
<html class="container-fluid">
	<head>
		<meta charset='utf-8'>
		<title>Bingo!</title>
		<link href="../css/bingo.css" rel="stylesheet" type="text/css">
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script type="text/javascript" src="../jquery/jquery-2.1.1.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/scriptjogo.js"></script>
	</head>

	<body>

		<ul class="nav nav-tabs">
			<li><a  data-toggle="tab" href="#menu">Menu</a></li>
			<li><a  data-toggle="tab" href="#configuracoes">Configurações</a></li>
			<li class="active"><a data-toggle="tab" href="#jogo">Roleta</a></li>
			<li><a  data-toggle="tab" href="#quadro">Quadro</a></li>
		</ul>
		<div class="tab-content">
				<div class="tab-pane" id="menu">
						 <ul>
							 <li id="zera">Zerar Jogo</li>
							 <!--<li id="cadastra"><a href="cadastro_cartelas.php">Cadastrar Cartela</a></li>-->
							 <li id="vincula"><a href="escolha_cartelas.php">Escolher Cartela</a></li>
							 <li id="libera"><a href="escolha_cartelas.php?act=libera">Liberar Cartelas</a></li>
						 </ul>
				</div>
				
				<div class="tab-pane" id="configuracoes"> </div>

			<div class="tab-pane active" id="jogo">
						<div class="subarea" id="roleta">
								<p><button type="submit" class="btn btn-primary" id="botao_sortear">INICIAR</button></p>
								<p id="sorteado"></p>
						</div>
				
						<div class="subarea" id="placar">
								 <p style="text-align:center; font-weight:bold">PLACAR</p>
								 <hr />
								 <ul style="list-style:none">
									 <li> </li>
									 <li> </li>
									 <li> </li>
								 </ul>
						</div>
			
						
						<div class="subarea" id="apDiv7">
							<p style="text-align:center; font-weight:bold">CARTELA(S) VENCEDORA(S)</p>
						 	<hr />
						 	<ul style="list-style:none">
							 		<li> </li>
							 		<li> </li>
							 		<li> </li>
						 	</ul>
					</div>
						
				</div>

			<div class="tab-pane" id="quadro">
							 <?php
								for ($i = 0; $i <= 8; $i++) {
										for ($j = 1; $j <= 10; $j++) {
											$numtab = ($i * 10) + $j;
												print "<div class='numquadro' id=".$numtab.">";
							print($numtab < 10 ? "0" : "").$numtab;
							print "</div>";
										}
								}
							 ?>
				</div>   

		</div>

	</body>
</html>