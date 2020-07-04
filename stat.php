<html>


<body>

<html>
	<head>
		<title>Covid 19</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="index.html">Acceuil</a></li>
							<li><a href="connexion.html">Connexion</a></li>
							<li><a href="information.html">Information</a></li>
							<li><a href="stat.php">Statistique</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Covid-19</h1>
							<p>Reste à la maison ...</p>
							<ul class="actions">
								<li><a href="conseil.html" class="button scrolly">Conseil</a></li>
							</ul>
						</div>
					</section>

				



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	
<?php


			$db_hostname='localhost';
			$db_database='covid19';
			$db_username='root';
			$db_password='';
			
			
		
		
			//connexion
			$db_server=mysqli_connect($db_hostname,$db_username,$db_password);
			if (!$db_server) die ("unable to connect to mysql :" . mysql_error());
			
			
			
			
			//selection de la base facture
             mysqli_select_db($db_server,$db_database) 
			 or die ("unable to connect to mysql :" . mysql_error());
		
			//verification de la seletion de base facture
			if (!$db_database) 
			{
			die ('Impossible de sélectionner la base de données ...');
			}
			
			
			
			
		
		
		
		$requete = 'SELECT * FROM ville ORDER BY porteuse DESC';
		$resultat = $db_server->query($requete);
		
		while($row = $resultat->fetch_assoc()) 
{echo   "<center><table border='1'bgcolor=violet><tr><td width='100'>".$row["nom"]
				."</td><td >ID ville======>:".$row["idville"].
				 "<br><font color=red>nombre de personne porteuse de covid 19======>:".$row["porteuse"]."</font>
				<font color=green><br>nombre de personne retabli de covid 19======>:".$row["retabli"]."</font>
				<br>nombre deces de covid 19======>:".$row["deces"]."</td></tr></table></center>";
		}
		
		?>
		<h3 align="center"><a href="index.php">logout</a></h3>

	</body> 
</html>