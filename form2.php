<?php
		session_start();
		$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
   	 	$db = new PDO('mysql:host=localhost;dbname=mchelp','root','',$options);

    if(isset($_POST['connect']))// Si on clique sur le bouton de connexion
    {
		if(isset($_POST['pseudo']) && isset($_POST['password']))// Et que les champs existent et ne sont pas vides
		{
			$select = $db->prepare('SELECT pseudo FROM membres WHERE pseudo=? AND password=?');
			$select->execute(array($_POST['pseudo'], $_POST['password']));
			
			if($select->rowCount() > 0) 
			{
				$_SESSION['auth'] = $_POST['pseudo'];
				header('Location:index.php');

	 		} 

	 		else{
	 			$fail = true;
	 			sleep(2);
	 			header('Location:connexion.php?fail=true');
	 		}
		}
	}
?>