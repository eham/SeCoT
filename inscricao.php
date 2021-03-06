<?php
	if(!isset($_GET["view"]) || $_GET["view"] != "test"){
		exit();
	}

	$page = "inscricao";
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
			
			.title {
				background-color: #064972;
				color: #FFF;
				font-size: 20px;
				height: 50px;
				line-height: 50px;
				padding-left: 30px;
				vertical-align: middle;
				width: 100%;
			}

			form {
				margin: 30px;
				width: 100%;
			}

			#info input {
				border: 1px solid #ccc;
				height: 30px;
				margin-bottom: 5px;
				padding: 3px 10px;
				width: 300px;
			}

			#info,
			#palestras {
				display: inline-block;
				vertical-align: top;
			}

			#palestras {
				margin-left: 40px;
			}

			#info span,
			#palestras span {
				font-size: 20px;
			}

			#palestras input {
				margin-right: 10px;
			}

			#submit {
				background-color: #bf0000;
				border: 0px;
				color: #FFF;
				cursor: pointer;
				display: block;
				font-size: 20px;
				height: 50px;
				line-height: 50px;
				margin: 30px 0px -30px -30px;
				padding-left: 30px;
				vertical-align: middle;
				width: 100%;
			}

		</style>
    </script>
	</head>
	<body>
		<div id="top">
			<?php include "header.php" ?>
		</div>
		<div id="middle">
			<div id="content">
				<div class="title">Inscrição</div>
				<form>
					<div id="info">
						<span>Dados Pessoais:</span></br></br>
						<input type="text" id="name"		placeholder="Nome" 			/><br />
						<input type="text" id="email"		placeholder="Email" 		/><br />
						<input type="text" id="rg"			placeholder="RG" 			/><br />
						<input type="text" id="instituicao" placeholder="Instituição" 	/><br />
					</div>
					<div id="palestras">
						<span>Palestras escolhidas:</span></br></br>
						<input type="checkbox" />Design centrado no Usuário - Dr. Paulo Mello<br/>
						<input type="checkbox" />Javascript - Nando<br/>
						<input type="checkbox" />?? - Dr. Ricardo Oliveira<br/>
						<input type="checkbox" />?? - Dr. Jurandy Gomes de Almeida Jr<br/>
						<input type="checkbox" />?? - Andre (Claro)<br/>
					</div>
					<input type="submit" value="Concluir inscrição" id="submit" />
				</form>
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
