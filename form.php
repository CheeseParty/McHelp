<?php 
	session_start();
	$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
   	$db = new PDO('mysql:host=localhost;dbname=mchelp','root','',$options);

   	if(isset($_POST['inscription']) && isset($_POST['pseudo']) && isset($_POST['password2']) && isset($_POST['email']) && ($_POST['password']===$_POST['password2']))
   	{	
   		//On vérifie si l'émail et le pseudo existent déjà
   		$check = $db->prepare('SELECT id FROM membres WHERE email=? OR pseudo=?');
   		$check->execute(array($_POST['email'], $_POST['pseudo']));

   		//S'ils existent
 		if($check->rowCount() > 0) 	
 		{
 			header('location:inscription.php?fail=true');
		}

		else{

	   		$inscription = $db->prepare("INSERT INTO membres (id, pseudo, password, email) VALUES (:id, :pseudo, :password, :email)");
	   		$inscription->execute(array(
	   			'id' => '',
	   			'pseudo' => $_POST['pseudo'],
	   			'password' => $_POST['password'],
	   			'email' => $_POST['email']));
	   		$inscription->closeCursor();
	   		header('Location:connexion.php');

   		}
   	}
?>