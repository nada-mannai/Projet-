	<?php
			//login
			$db_hostname='localhost';
			$db_database='covid19';
			$db_username='root';
			$db_password='';
		
		
		
		//connexion
			$db_server=mysqli_connect($db_hostname,$db_username,$db_password);
			if (!$db_server) die ("unable to connect to mysql :" . mysql_error());
			
			
			
			
			//selection de la base 
             mysqli_select_db($db_server,$db_database) 
			 or die ("unable to connect to mysql :" . mysql_error());
			if ( isset($_POST['t0']) AND isset($_POST['t1']))
            {  
            if  ($_POST['t0'] != NULL 
		    AND $_POST['t1'] != NULL );
			
            {
			
            $id = $_POST['t0'];
            $nb = $_POST['t1'];
			
			
			
			
			
			//verification de la seletion de base 
			if (!$db_database) 
			{
			die ('Impossible de sélectionner la base de données ...');
			}
			
			//requete d'ajoutation de donné au tableau messages dans la base 
            $req=("UPDATE ville SET porteuse=porteuse+'$nb' where idville='$id'") or die(mysqli_error());
			$resultat=mysqli_query($db_server,$req);
			if (! $resultat)
				die ("database access failed :" .mysql_error());	
			else echo ('mise a jour effectué');
			
			
			
			//fermeture de la 
            mysqli_close($db_server);
            }
            }
?>