<?php
	if(!isset($_GET["view"]) || $_GET["view"] != "test"){
		exit();
	}

	$page = "agenda";
?>
<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>IV SeCoT</title>
		<link type="text/css" rel="stylesheet" href="css/fonts.css" />
		<link type="text/css" rel="stylesheet" href="css/layout.css" />
		<style type="text/css">

			#content {
				background-color: #FFF;
				border-radius: 4px;
				float: left;
				margin: 0 10px;
				overflow: hidden;
				width: 960px;
				-moz-border-radius: 4px;
				-moz-box-shadow: 0 0 6px #c6c6c6;
				-webkit-border-radius: 4px;
				-webkit-box-shadow: 0 0 6px #c6c6c6;
			}


			table {
				border-collapse: collapse;
				width: 100%;
			}

			table tr {
				height: 50px;
			}

			table td {
				border: 1px solid #dedede;
				font: 14px 'RobotoLight', Arial, sans-serif;
				padding: 10px;
				width: 148px;
			}

			.table-header {
				background-color: #0e5b8c;
				color: #FFF;
				height: 40px;
			}

			.table-header td {
				border: 1px solid #064972;				
				font: 16px 'RobotoRegular', Arial, sans-serif;
				text-align: center;
			}

			.table-side {
				width: 72px;
				font: 16px 'RobotoRegular', Arial, sans-serif;
				text-align: center;
			}

		</style>
	</head>
	<body>
		<div id="top">
			<?php include "header.php" ?>
		</div>
		<div id="middle">
			<div id="content">
				<table>
					<tr class="table-header">
						<td class="table-side"></td>
						<td>Segunda<br/>(07/05)</td>
						<td>Terça<br/>(08/05)</td>
						<td>Quarta<br/>(09/05)</td>
						<td>Quinta<br/>(10/05)</td>
						<td>Sexta<br/>(11/05)</td>
						<td>Sábado<br/>(12/05)</td>
					</tr>
					<tr>
						<td class="table-side">10h</td>
						<td>Recepção e entrega das credenciais</td>
						<td rowspan="2">Palestra: Computação Paralela<br />Palestrante: Luiz Irber (INPE)</td>
						<td rowspan="2">Palestra: Mercado de trabalho no exterior<br />Palestrante: Talita Lencki (Experimento - Sorocaba)</td>
						<td rowspan="2">Palestra: Software Livre<br />Palestrante: Fabrício Matheus Gonçalves (GêBR - Campinas)</td>
						<td rowspan="7">Mini-Maratona</td>
						<td rowspan="7">GURU</td>
					</tr>
					<tr>
						<td class="table-side">11h</td>
						<td>Abertura do evento (formanda Katharina Carrapatoso Garcia)</td>
					</tr>
					<tr>
						<td class="table-side"></td>
						<td colspan="4">Tempo Livre</td>
					</tr>
					<tr>
						<td class="table-side">14h</td>
						<td>Palestra: Cloud Computing<br />Palestrante: Adriano Martins(Serpro)</td>
						<td>Palestra: Design Patterns e GRASP Palestrante: Fernando de Oliveira Padoan (C.E.S.A.R)</td>
						<td>Mini-Curso: Ruby on Rails (Fábio Akita - GoNow)<br />ou<br />Palestra: Mercado Financeiro (Home Broker - negociação de ações pela internet)<Br />Palestrante: Edson Ryohei Mizikami (CEO do grupo Mizinvest)</td>
						<td>Palestra: Metodologia Agile<br />Palestrante: Luiz Fernando Ribeiro (ThoughtWorks - Porto Alegre)</td>
					</tr>
					<tr>
						<td class="table-side"></td>
						<td colspan="4">Coffee Break</td>
					</tr>				
					<tr>
						<td class="table-side">16h30</td>
						<td>Palestra: Startup<br />Palestrante: Jonny Ken Itaya (CEO do Migre.me)</td>
						<td>Palestra: Desenvolvimento Mobile (plataforma Android)<br />Palestrante: Renato Molina Toth (C.E.S.A.R.)</td>
						<td>Mini-Curso: Ruby on Rails (Fábio Akita)<br />ou<br />Palestra: Computação Forense (crimes virtuais e investigação)<br />Palestrante: Claudemir Costa Santos (Polícia Civil)</td>
						<td>Palestra: Plano de Carreira<br />Palestrante: Raphael Marcos Menderico (Google - Belo Horizonte)</td>
					</tr>
					<tr>
						<td class="table-side">19h30</td>
						<td>Mini-Curso: PHP - sites dinâmicos (Endel Guimarães Silva)</td>
						<td>Mini-Curso: PHP - sites dinâmicos (Endel Guimarães Silva)</td>
						<td>Mini-Curso: Latex (Francisco Augusto César de Camargo Bellaz Guiraldelli)</td>
						<td>Mini-Curso: Latex (Francisco Augusto César de Camargo Bellaz Guiraldelli)</td>
					</tr>
				</table>
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
