<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="dist/js/bootstrap.js"></script>
<title> 
	Registration
</title>
</head>

<body>
	<?php include("includes/header.php");?>
	
	
	<?php include("includes/menu.php");?>
    <div class="container">
	    <form method="post" action="traitement.php">
		<h1>Gathering people registration</h1>
		<fieldset>
		<legend>Your coordinates</legend>
			<label for="firstname">FirstName  </label>
			<input type="text" name="firstname" id="firstname" /><br />
			
			<label for="lastname">LastName  </label>
			<input type="text" name="lastname" id="lastname" /><br />
			
			<label for="email">E-mail  </label>
			<input type="text" name="email" id="email" /><br />
			
			<label for="password">Password  </label>
			<input type="text" name="password" id="password" /></br></br>
			
			
			</fieldset>
			Choose 5 center of interest  </br>
			<select name="interet1" id="interet1">
				<option value="cinema">Cinema</option>
				<option value="goodfood">Good food</option>
				<option value="travels">Travels</option>
				<option value="sport"> Sport </option>
				<option value="relaxation"> Relaxation </option>
				<option value="musics"> Musics </option>
				<option value="technology"> Technology </option>
				<option value="astronomy"> Astronomy </option>
				<option value="car"> Car / Motobike </option>
			</select>
			<select name="interet2" id="interet2">
				<option value="cinema">Cinema</option>
				<option value="goodfood">Good food</option>
				<option value="travels">Travels</option>
				<option value="sport"> Sport </option>
				<option value="relaxation"> Relaxation </option>
				<option value="musics"> Musics </option>
				<option value="technology"> Technology </option>
				<option value="astronomy"> Astronomy </option>
				<option value="car"> Car / Motobike </option>
			</select>
			<select name="interet3" id="interet3">
				<option value="cinema">Cinema</option>
				<option value="goodfood">Good food</option>
				<option value="travels">Travels</option>
				<option value="sport"> Sport </option>
				<option value="relaxation"> Relaxation </option>
				<option value="musics"> Musics </option>
				<option value="technology"> Technology </option>
				<option value="astronomy"> Astronomy </option>
				<option value="car"> Car / Motobike </option>
			</select>
			<select name="interet4" id="interet4">
				<option value="cinema">Cinema</option>
				<option value="goodfood">Good food</option>
				<option value="travels">Travels</option>
				<option value="sport"> Sport </option>
				<option value="relaxation"> Relaxation </option>
				<option value="musics"> Musics </option>
				<option value="technology"> Technology </option>
				<option value="astronomy"> Astronomy </option>
				<option value="car"> Car / Motobike </option>
			</select>
			<select name="interet5" id="interet5">
				<option value="cinema">Cinema</option>
				<option value="goodfood">Good food</option>
				<option value="travels">Travels</option>
				<option value="sport"> Sport </option>
				<option value="relaxation"> Relaxation </option>
				<option value="musics"> Musics </option>
				<option value="technology"> Technology </option>
				<option value="astronomy"> Astronomy </option>
				<option value="car"> Car / Motobike </option>
			</select>

		<p><input type="submit" value="Envoyer" /></p>
	</form>
	
    </div>
	<?php include("includes/footer.php");?>
</body>

</html>