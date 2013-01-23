<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Step</title>
		<meta name="author" content="Romulus" />
		<!-- Date: 2012-10-24 -->
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		
   		<!-- INCLUSION DES SCRIPTS JS -->
		<script type="text/javascript" src="biblio/jquery-1.8.2.js"></script>
   		<script type="text/javascript" src="bikingtrails.js"></script>
		 
		
	</head>
	<body>
	<?php include("includes/header.php");if(!isset($_SESSION['firstN'])) {echo '<META HTTP-EQUIV="Refresh" CONTENT="2; URL=../gathering_people/identification.php">';die('Vous devez être enregistré pour accéder à cette partie du site');}?>
	
	
	<?php include("includes/menu.php");?>
	
		<!-- LIENS RENVOYANT LES FICHIERS JSON -->
		<div id="bikingtrails">
		<ul>
			<li><a href="#" id="BikingTrails1"> First Step </a></li>
			<li><a href="#" id="BikingTrails2"> Second Step </a></li>
			<li><a href="#" id="BikingTrails3"> Third Step </a></li>
			<li><a href="#" id="other_trail_link"> Your Favorite List </a></li>
		</ul>
		
		</div>
		<a class="off" href="#" id="off"><em>Normal LIST</em></a></h3>
		<a class="on" href="#" id="on"><em>Lighting LIST</em></a></h3>
		
		
		
		
		<div id="bike_div_php">	
		</div>
		
		<div id="table_biking">
			
		</div>
	

	
	<?php include("includes/footer.php");?>

	</body>
</html>

