	<?PHP
	//login
			$db_hostname='localhost';
			$db_database='covid19';
			$db_username='root';
			$db_password='';
		
		

		
			//connexion
			$con=mysqli_connect($db_hostname,$db_username,$db_password);
			if (!$con) die ("unable to connect to mysql :" . mysql_error());
			

	//selection de la base 
             mysqli_select_db($con,$db_database) 
			 or die ("unable to connect to mysql :" . mysql_error());
			 
			 
			 
			 
	$sql=" INSERT INTO `ville` (`idville`, `nom`, `porteuse`, `retabli`, `deces`)
	VALUES('$_POST[t0]','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]')";
	$s = $con->query($sql);
	if (!$s)
	{
	die('impossible d ajouter cet enregistrement : ' . mysql_error());
	}
	echo "L’enregistrement est ajouté ";

	mysqli_close($con);
	?>
	<a href="ajout.html">Retour au formulaire</a>