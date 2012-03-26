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
			}

			form input {
				border: 1px solid #ccc;
				height: 30px;
				margin-bottom: 5px;
				padding: 3px 10px;
				width: 300px;
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
					<input type="text" id="name"		placeholder="Nome" 			/><br />
					<input type="text" id="rg"			placeholder="RG" 			/><br />
					<input type="text" id="instituicao" placeholder="Instituição" 	/><br />
				</form>
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
