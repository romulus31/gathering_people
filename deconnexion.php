
<?php
session_start();
if(!isset($_SESSION['firstN'])) {echo '<META HTTP-EQUIV="Refresh" CONTENT="2; URL=../gathering_people/identification.php">';die('Vous devez être enregistré pour accéder à cette partie du site');}

unset($_SESSION);
unset($_COOKIE);
reset($_SESSION);
reset($_COOKIE);
session_destroy();
header ('Location: ..\gathering_people\identification.php');

?>