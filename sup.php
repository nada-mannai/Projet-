<?PHP
	//login
			$db_hostname='localhost';
			$db_database='covid19';
			$db_username='root';
			$db_password='';
		
		$t=$_POST['t0'];

		
			//connexion
			$con=mysqli_connect($db_hostname,$db_username,$db_password);
			if (!$con) die ("unable to connect to mysql :" . mysql_error());
			

	//selection de la base 
             mysqli_select_db($con,$db_database) 
			 or die ("unable to connect to mysql :" . mysql_error());
			 
			 
			 
			 
	$sql="DELETE FROM ville where idville='$t'"  or die(mysqli_error());
	$resultat=mysqli_query($con,$sql);
	
	if ($resultat)
	{
	echo "  L enregistrement est supprime";
	}
	
	 
	mysqli_close($con);
	?>
	<a href="supprime.html">Retour au formulaire</a>