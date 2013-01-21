<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> <!-- L'utilisateur ne peut pas réduire ou modifier la carte -->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<!-- Insertion du script js de google map api -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true">

</script>
<script type="text/javascript" src="google_map_api.js"></script>
<title> 
	Find your friends
</title>
</head>

<body>
	<?php include("includes/header.php");?>
	
	
	<?php include("includes/menu.php");?>
	
	
	<div id="google_map">
		<table>
			<tr>	
				<td> <div id="map_div"> </div> </td>
				<td> <div id="side_bar"> </div> </td>
			</tr>
		</table>	
  <!--Formulaire d'affichage "zoom sur carte" d'une adresse -->
		<div id="destinationForm">
			<form action="" method="get" name="direction" id="direction">
				<label>Departure  </label></br>
				<input type="text" name="origin" id="origin" />
				<p><label>Destination :</label>
					"gathering-people company"  
					<input type="button" value="Get Direction" onclick="javascript:calculate()"/>
				</p>
			</form>
		</div>
<div id="panel"></div>
	</div>
	<div id="pathDetail"> </div>
	<?php include("includes/footer.php");?>
</body>

</html>