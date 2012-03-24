<?php
	if(!isset($_GET["view"]) || $_GET["view"] != "test"){
		exit();
	}

	$page = "faq";
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
			.pergunta {
				color: #000;
				display: block;
				font: 20px/30px 'RobotoRegular', Arial, sans-serif;
				margin: 30px 50px 0px 30px;
				width: 600px;
			}

			p {
				font: 15px/20px 'RobotoLight', Arial, sans-serif;
				margin: 0px 10px 30px 30px;
			}

			#maps {
				height: 160px;
				margin: 20px 0;
				width: 100%;
			}

		</style>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDyFF-3JC8dszBJFX_VITT76XA5dhogAnE&sensor=true"></script>
		<script type="text/javascript" src="js/infobox.js"></script>
		<script type="text/javascript">

			function initialize() {

				var myOptions = {
					zoom: 14,
					center: new google.maps.LatLng(-23.580114, -47.525675),
					disableDefaultUI: true,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}

				var map = new google.maps.Map(document.getElementById("maps"), myOptions);

				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(-23.580114, -47.525675),
					map: map,
					title:"UFSCar Sorocaba"
				});

				var infoboxOptions = {
					content: "UFSCar - Campus Sorocaba<br/>Rodovia João Leme dos Santos (SP-264), Km 110<br />Bairro do Itinga - Sorocaba - São Paulo - Brasil<br />CEP 18052-780",
					disableAutoPan: false,
					maxWidth: 0,
					pixelOffset: new google.maps.Size(-450, -60),
					zIndex: null,
					boxStyle: { 
						background: "#FFF",
						height: "90px",
						opacity: 1,
						overflow: "hidden",
						padding: "10px",
						width: "365px",
						"-moz-box-shadow": "0 0 6px #c6c6c6",
						"-webkit-box-shadow": "0 0 6px #c6c6c6"
					},
					closeBoxMargin: "-30px -30px 0 0",
					infoBoxClearance: new google.maps.Size(1, 1),
					isHidden: false,
					pane: "floatPane",
					enableEventPropagation: false
				};

				var ib = new InfoBox(infoboxOptions);
				ib.open(map, marker);
			}

			window.onload = initialize;
		</script>
    </script>
	</head>
	<body>
		<div id="top">
			<?php include "header.php" ?>
		</div>
		<div id="middle">
			<div id="content">
				<span class="pergunta">O que é a Secot?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
				<span class="pergunta">Quando será a edição 2012?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
				<span class="pergunta">Como posso me inscrever?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
				<span class="pergunta">Como chegar?</span>
				<div id="maps"></div>
				<span class="pergunta">Quais serão as palestras?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
				<span class="pergunta">Quais são as opções de alimentação?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
				<span class="pergunta">Eu recebo um certificado ao final do evento?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>
				<span class="pergunta">Quem são os organizadores do evento?</span>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ipsum, ultricies et pharetra laoreet, faucibus at lectus. Sed dui nibh, sodales sit amet pharetra sit amet, ullamcorper vitae odio. Etiam auctor posuere leo, ut sollicitudin erat venenatis vitae. Mauris sagittis mauris sed ante fringilla eget fermentum felis dignissim. Aliquam erat volutpat. Nulla porttitor velit viverra nisi vestibulum non rhoncus purus pulvinar. Curabitur lacus mauris, iaculis eget tincidunt a, ultrices ac nisi. Nunc luctus lacus et nunc eleifend sed suscipit tortor feugiat. Etiam eu enim sit amet libero fermentum rutrum. Duis sed cursus enim.</p>						
			</div>
			<div class="clear"></div>
		</div>
		<div id="bottom">
			&copy; 2012 Universidade Federal de São Carlos - Campus Sorocaba
		</div>
	</body>
</html>
