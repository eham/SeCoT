<?php
	if(!isset($_GET["view"]) || $_GET["view"] != "test"){
		exit();
	}

	$page = "index";
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>IV SeCoT</title>
		<link type="text/css" rel="stylesheet" href="css/fonts.css" />
		<link type="text/css" rel="stylesheet" href="css/layout.css" />
		<style type="text/css">

			.content {
				background-color: #FFF;
				border-radius: 4px;
				clear: left;
				float: left;
				margin: 0 10px 10px 10px;
				overflow: hidden;
				width: 680px;
				-moz-border-radius: 4px;
				-moz-box-shadow: 0 0 6px #c6c6c6;
				-webkit-border-radius: 4px;
				-webkit-box-shadow: 0 0 6px #c6c6c6;
			}

			.titulo {
				color: #000;
				display: block;
				font: 40px/60px 'RobotoLight', Arial, sans-serif;
				margin: 20px 30px 10px 30px;
				width: 600px;
			}

			p {
				font: 15px/20px 'RobotoLight', Arial, sans-serif;
				margin: 0 30px 20px 30px;
			}

			p a {
				color: #595959;
			}

			.side {
				background-color: #FFF;
				border-radius: 4px;
				clear: right;
				margin: 10px 0 10px 10px;
				overflow: hidden;
				width: 260px;
				-moz-border-radius: 4px;
				-moz-box-shadow: 0 0 6px #c6c6c6;
				-webkit-border-radius: 4px;
				-webkit-box-shadow: 0 0 6px #c6c6c6;
			}

			#data,
			#inscricao,
			#patrocinadores {
				color: #FFF;
				font: 25px/60px 'RobotoLight', Arial, sans-serif;
				height: 60px;
				text-align: center;
				width: 100%;
			}

			#data {	
				background-color: #0e5b8c;
			}

			#inscricao {
				background-color: #0e5b8c;
				cursor: pointer;
			}

			.preco {
				display: block;
				margin: 8px 40px;
				text-align: right;
				width: 180px;
			}

			#patrocinadores {
				background-color: #0e5b8c;
			}

			.patrocinio {
				margin: 15px 20px;
				width: 220px;
			}

		</style>
		<script type="text/javascript" src="js/countdown.js"></script>
	</head>
	<body>
		<div id="top">
			<?php include "header.php" ?>
		</div>
		<div id="middle">
			<div class="content">
				<span class="titulo">Bem-vindo!</span>
				<p>A Semana da Computação e Tecnologia (<a href="#">SeCot</a>) é um evento realizado pelos alunos de <a href="#">Ciências da Computação</a> da <a href="#">UFSCar Sorocaba</a>. Seu foco é disseminar conhecimentos e gerar debates sobre computação e suas tecnologias, introduzir às diversas carreiras no mercado de trabalho e gerar networking entre a comunidade.</p>
    				<p>O evento será realizado entre os dias 07 e 12 de maio, no <a href="#">campus da UFSCar Sorocaba</a>, as inscrições terão o custo de R$15 para alunos do campus, R$20 para outros estudantes e R$40 para os demais.</p>
    				<p>O contato pode ser feito pelo nosso <a href="mailto:ufscar.caccs@gmail.com">e-mail</a>  e dúvidas específicas podem ser tiradas pelo nosso FAQ.</p>
				<p>Contamos com a sua presença!</p>
			</div>
			<div class="content">
				<span class="titulo">Palestrantes:</span>
				<p>Em breve...</p>
			</div>
			<div class="content">
				<span class="titulo">Fotos do evento:</span>
				<p>Em breve...</p>
			</div>
			<div id="d" class="side">
				<div id="data">07 à 12 de Maio</div>
				<canvas id="countdown" width="260" height="100"></canvas>
			</div>
			<div class="side">
				<div id="inscricao">Inscreva-se</div>
				<span class="preco">Aluno UFSCar: R$ 15,00</span>
				<span class="preco">Estudante: R$ 20,00</span>
				<span class="preco">Demais: R$ 40,00</span>
			</div>
			<div class="side">
				<div id="patrocinadores">Patrocinadores</div>
				<img src="http://www2.ufscar.br/uploads/22581_logoufscar.jpg" class="patrocinio" />
				<img src="https://www.google.com.br/images/srpr/logo3w.png" class="patrocinio" />
				<img src="http://desconto.yazigi.com.br/assets/yazigi/logo-e6c24a57d4ab65cdc7cb04390c44098a.png" class="patrocinio" />
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
