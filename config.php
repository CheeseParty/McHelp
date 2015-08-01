<?php

	$options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $db = new PDO('mysql:host=localhost;dbname=test2','root','',$options);

    if(isset($_POST['connect']))// Si on clique sur le bouton de connexion
    {
		if(isset($_POST['username']) && ($_POST['password']) && $_POST['username']!=NULL && $_POST['password']!=NULL)// Et que les champs existent et ne sont pas vides
		{
			//on vérifie si le pseudo existe
			$usernamec = $db->prepare('SELECT COUNT(username) AS username FROM membres WHERE username=?');
			$usernamec->execute(array($_POST['username']));
			$username = $usernamec->fetchAll();
			$usernamec->closecursor();
			$username=$username[0];

			//s'il existe alors on vérifie que le mdp correspond au pseudo
			if($username[0]=='1')
			{
				$passwordc = $db->prepare('SELECT password FROM membres WHERE username=?');
				$passwordc->execute(array($_POST['username']));
				$password = $passwordc->fetchAll();
				$passwordc->closecursor();
				$password=$password[0];

				if($password[0]==$_POST['password'])
				{
					echo'vous êtes connecté';
				}
			}

		}

		else
		{
			echo'remplissez les champs correctement';
		}
	}	

?>