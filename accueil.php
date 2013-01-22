
Accueil
<?php // mettre ces lignes sur chaqu'une des pages 
	 session_start(); 
if(!isset($_SESSION['firstN'])) {echo '<META HTTP-EQUIV="Refresh" CONTENT="2; URL=../gathering_people/identification.php">';die('Vous devez être enregistré pour accéder à cette partie du site');}
print $_SESSION['idUser'].'<br/>';
               print  $_SESSION['firstN'].'<br/>' ;
				print  $_SESSION['lastN'].'<br/>';
				 print  $_SESSION['mail'].'<br/>';
print"Bienvenu dans l'espace membre".'<br/>';

print '<a href="includes/deconnexion.php">Déconnexion</a>';
?>