<!doctype html>
<html>
	<head>
		<title>McHelp</title>
		<meta charset="utf-8">
		<link rel="stylesheet"  href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="favicon.jpg" type="image/x-icon">
		<link rel="icon" href="favicon.jpg" type="image/x-icon">
	</head>

	<body>
			
			
			<div class="container">
				<div id="logodiv"> 
					<img src="logo.png" id="logo">
					<?php
						if(!isset($_SESSION['auth'])) 
						{
							echo '<a href="connexion.php" class="btn_log" id="conn"><svg class="svglog" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="15px" height="15px" viewBox="0 0 516.4 516.4" xml:space="preserve"><path d="M353.8 0C263.9 0 191.3 72.7 191.3 162.6c0 19.1 3.8 38.3 9.6 57.4L0 420.8v95.6h95.6V459H153v-57.4h57.4l86.1-86.1c17.2 5.7 36.3 9.6 57.4 9.6 89.9 0 162.6-72.7 162.6-162.6S443.7 0 353.8 0zM401.6 172.1c-32.5 0-57.4-24.9-57.4-57.4s24.9-57.4 57.4-57.4S459 82.2 459 114.8 434.1 172.1 401.6 172.1z"/></svg><span>Connexion</span></a>';
						} 
						else 
						{
							echo '<a href="deconnexion.php" class="btn_log" id="conn"><span>Déconnexion</span></a>';
						}
					?>
				</div>
				
				<div class="nav">
					<ul>
						<li ><a class="navbtnfirst" href="index.php">Accueil</a></li>
						<li><a class="navbtn" href="#">Solutions</a></li>
						<li><a class="navbtn" href="#">Top Serveurs</a></li>
					</ul>	
				</div>
			<div class="page">