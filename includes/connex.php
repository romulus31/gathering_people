<?php
// Configuration de la connexion � la base de donn�es
define('MYSQL_HOTE', 'localhost');
define('MYSQL_UTILISATEUR', 'root');
define('MYSQL_MOT_DE_PASSE', '');
define('MYSQL_BASE_DE_DONNEES', 'gathering_people');
 
//$choix = isset($_POST['choix']) ? $_POST['choix'] : '';
 
// ...
 
// Connexion � la base de donn�e
mysql_connect(MYSQL_HOTE, MYSQL_UTILISATEUR, MYSQL_MOT_DE_PASSE) or die('<h1>Connexion au serveur impossible !</h1>');
mysql_select_db(MYSQL_BASE_DE_DONNEES) or die('<h1>Connexion impossible � la base</h1>');
 
// Affichage de la requete choisi
/*if ($choix) {
    $query = mysql_query("SELECT num_cli FROM client;") or die (mysql_error());
    $array = mysql_fetch_assoc($query);
    echo 'Vous avez choisi le client : ' . $array['nom_cli'];
}*/
 
// D�but du script

 
// ...
?>