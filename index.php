<?php
session_start();
?>

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
						<p class="about">Bienvenue sur McHelp ! Si vous êtes nouveau, il est recommandé de vous <a class="link" href="inscription.php">inscrire</a>. 
						Sinon, <a class="link" href="connexion.php">connectez vous</a>.<br>
						 Nous vous invitons aussi à cliquer sur l'onglet <span>"TOP Serveurs"</span> qui vous redirigera sur la
						page des serveurs recommandés par les joueurs de McHelp (pvp, minigames, etc..).<br>
						Nous <span>recrutons</span> ! Pour plus d'infos, voir le <span>bas de la page</span>.</a><br><br>
						
						<div class="question">
							<span>Alors, ça sert à quoi McHelp?</span><br>
							Vous trouverez des réponses <span>RAPIDEMENT</span> aux problèmes que vous rencontrez sur Minecraft.
						</div><br>
						
						<div class="question">
							<span>Et si la solution à mon problème n'est pas sur McHelp?</span><br>
							Aucun soucis ! Il vous suffit d'aller de créer un sujet dans l'onglet <span>"Solutions"</span> et d'y expliquer votre problème, en donnant le maximum de détails possible.
						</div><br>
						
						<div class="question">
							<span>Ok, c'est cool McHelp, mais je peux aller sur Google taper mon problème!</span><br>
							Oui, vous pouvez le faire, mais des millions de recherches apparaitront sans même être sûr que la motié y 
							apporte <span>VRAIMENT</span> la solution.
						</div>
					
						</p>

						<div id="staff">
							<h1 class="title">Le staff</h1>

								<div class="staffbox">
									<img src="stevehead.jpg" class="staffboximg">
									<p class="staffboxtext">
										<span>Pseudo:</span> <em>Gweedzy</em><br>
										<span>Rank:</span> <em>Fondateur</em><br>
										<span>Inscrit depuis:</span> <em>2015</em> <br>
										<span>Spécialité:</span> <em>WebMaster</em><br>
									</p>
								</div>
								<div class="staffbox">	
									<img src="stevehead.jpg" class="staffboximg">
									<p class="staffboxtext">	
										<span>Pseudo:</span> <em>Liiway</em><br>
										<span>Rank:</span> <em>Co-Fondateur</em><br>
										<span>Inscrit depuis:</span> <em>2015</em> <br>
										<span>Spécialité:</span> <em>PvP-Soup</em><br>
									</p>
								</div>	

								<div class="staffbox">	
									<img src="stevehead.jpg" class="staffboximg">
									<p class="staffboxtext">	
										<span>Pseudo:</span> <em>???</em><br>
										<span>Rank:</span> <em>Modérateur Web</em><br>
										<span>Inscrit depuis:</span> <em>???</em> <br>
										<span>Spécialité:</span> <em>Modération</em><br>
									</p>
								</div>	
								<div class="staffbox">	
									<img src="stevehead.jpg" class="staffboximg">
									<p class="staffboxtext">	
										<span>Pseudo:</span> <em>???</em><br>
										<span>Rank:</span> <em>Modérateur Web</em><br>
										<span>Inscrit depuis: </span> <em>???</em> <br>
										<span>Spécialité:</span> <em>Modération</em><br>
									</p>
								</div>
						
					
					<p class="aboutrecr">Nous recrutons 2 modérateurs web, un <span>bon niveau d'orthographe</span> est nécessaire, recrutement sous <span>candidature</span>. 
						Si vous avez au minimum <span>14 ans</span>, que vous êtes <span>mature</span> et <span>responsable</span> et que vous savez modérer, alors ce rank est 
						fait pour vous! Si vous êtes motivés, <a href="#">envoyez votre candidature</a>!
					</p>
					</div>

			</div>
			<footer>
				<p class="copyrights">&copy;2015 McHelp</p>
				<?php

					if(isset($_SESSION['auth'])) {
					    echo "<p><span>Connecté en tant que ".$_SESSION['auth']."</span></p>";
					}
					//La variable était définie dans connexion.php
					//Le cookie PHPSSEID est présent sur presque tous les sites
					//C'est un cookie qui contient l'id de session PHP

					?>
			</footer>
		</body>
</html>