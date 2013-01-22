<?php
   session_start();
// Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard UTF-8)
header('Content-type: text/html; charset=UTF-8');

/* Création d'une fonction - utilisée dans la récupération des variables - qui teste la configuration get_magic_quotes_gpc du serveur.
Si oui, supprime avec la fonction stripslashes les antislashes "\" insérés dans les chaines de caractère des variables gpc (GET, POST, COOKIE) */
function Verif_magicquotes ($chaine) 
{
if (get_magic_quotes_gpc()) $chaine = stripslashes($chaine);

return $chaine;
} 


// Initialisation du message de réponse
$message = null;


// Si le formulaire est envoyé
if (isset($_POST['identification'])) 
{

    /* Récupération des variables issues du formulaire
    Teste l'existence les données post en vérifiant qu'elles existent, qu'elles sont non vides et non composées uniquement d'espaces.
    (Ce dernier point est facultatif et l'on pourrait se passer d'utiliser la fonction trim())
    En cas de succès, on applique notre fonction Verif_magicquotes pour (éventuellement) nettoyer la variable */
    $identification = (isset($_POST['identification']) && trim($_POST['identification']) != '')? Verif_magicquotes($_POST['identification']) : null;
    $mdp = (isset($_POST['mdp']) && trim($_POST['mdp']) != '')? Verif_magicquotes($_POST['mdp']) : null;
    

    // Si $identification et $mdp différents de null
    if(isset($identification,$mdp)) 
    {
        require_once('includes/connex.php');
            
         // Indique à mySql de travailler en UTF-8 (par défaut mySql risque de travailler au standard ISO-8859-1)
         mysql_query("SET NAMES 'utf8'");
    
         // Préparation des données pour les requêtes à l'aide de la fonction mysql_real_escape_string
         $mail = mysql_real_escape_string($identification);
       //  $mdpword = mysql_real_escape_string(sha1($mdp));
		 $mdpword = mysql_real_escape_string($mdp);
    
    
         /* Requête pour récupérer les enregistrements répondant à la clause : 
         champ du identification et champ du mdp de la table = identification et mdp postés dans le formulaire*/
		
        $requete = "SELECT * FROM user WHERE mail = '".$mail."' AND password = '".$mdpword."'";  
    
         // Exécution de la requête
         $req_exec = mysql_query($requete) or die(mysql_error());
    
         // Création du tableau associatif du résultat
         $resultat = mysql_fetch_assoc($req_exec); 

          
			  
				 	 if ($resultat['mail'] && $resultat['password'])  
        
				{
							
                 /* Démarre la session et enregistre le identification dans la variable de session $_SESSION['login']
                 qui donne au visiteur la possibilité de visiter les pages protégées.  */
           
				 $_SESSION['idUser']=$resultat['idUser'];
                 $_SESSION['firstN'] = $resultat['firstName'];
				  $_SESSION['lastN'] = $resultat['lastName'];
				   $_SESSION['mail'] = $resultat['mail'];
						 
				 mysql_close();  // on ferme la connexion
				  header("Location: accueil.php");
				  
				}			 
				  
                else
                {   // Le identification ou le mot de passe sont incorrect
                $message = 'L\'identification ou le mot de passe sont incorrect';
                } 
			
	 
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formulaire de connexion</title>
<style type="text/css">
<!--
body, p, h1,form, input {
margin:0;
padding:0;
}
body {
background-color:#FFFFFF
}
#connexion {
width:380px;
background:#FFFFFF;
margin:20px auto;
font-family: Arial, Helvetica, sans-serif;
font-size:1em;
border:2px solid #333333;
}
#connexion h1 {
text-align:center;
font-size:1.2em;
background:#333333;
padding-bottom:5px;
margin-bottom:15px;
color:#FFFFFF;
letter-spacing:0.05em;
}
#connexion p {
padding-top:15px;
padding-right:50px;
text-align:right;
}
#connexion input {
margin-left:30px;
width:150px;
}
#connexion #valider {
width:155px;
font-size:0.8em;
}
#connexion #message {
height:20px;
font-size:0.7em;
font-weight:bold;
text-align:center;
padding:5px 0 0 0;
}
#connexion #lien {
height:20px;
font-size:0.7em;
font-weight:bold;
text-align:center;
padding:5px 0 0 0;
}
-->
</style>
</head>
<body>
<div id = "connexion">
    <form action = "#" method="post">
    <h1>Connexion</h1>
    <p><label for = "identification">E-Mail : </label><input type="text" name="identification" id="identification" /></p>
    <p><label for = "mdp">Mot de passe : </label><input type="password" name="mdp" id="mdp" /></p>
    <p><input type="submit" value="Envoyer" id = "valider" /></p>
    </form>
	<p id = "lien"> <a href='#' >Mot de passe oublié ?</a>
   <p id = "message"><?php if(isset($message)) echo $message ?></p>
	
</div>
</body>
</html>
