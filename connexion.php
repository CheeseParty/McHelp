<!doctype html>
<html>
	<head>
		<title>McHelp</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="favicon.ico">
	</head>

	<body>
			
			
			<div class="container">
				<div id="logodiv"> 
					<img src="logo.png" id="logo">
				</div>
				
					<div class="nav">
						<ul>
							<li ><a class="navbtnfirst" href="index.php">Accueil</a></li>
							<li><a class="navbtn" href="#">Solutions</a></li>
							<li><a class="navbtn" href="#">Top Serveurs</a></li>
						</ul>	
					</div>

					<div class="page">
					<p class="about">Bienvenue sur McHelp ! Si vous êtes nouveau, il est recommandé de vous <a class="link" href="inscription.php">inscrire</a>. <br>
					 Nous vous invitons aussi à cliquer sur l'onglet <span>"TOP Serveurs"</span> qui vous redirigera sur la
					page des serveurs recommandés par les joueurs de McHelp (pvp, minigames, etc..).<br>
					Nous <span>recrutons</span> ! Pour plus d'infos, <a href="index.php#staff"><span>cliquez ici</span></a>.</a>


				<form action="form2.php" id="form" method="post">
					<label for="pseudo">Pseudo<br>	
						<input type="text" name="pseudo" autocomplete="off" maxlenght="31" required=""><br>
					</label>

					<label for="password">Mot de passe<br>
						<input type="password" name="password" autocomplete="off" maxlenght="40" required=""></input>
					</label>
					<?php
						if(isset($_GET['fail']))
						{
							echo'<p class="error">Mauvais identifiants, veuillez réessayer</p>';
						}
					?>
					<input type="submit" value="Connexion" name="connect">

				</form>
			</div>
	</body>
	
</html>