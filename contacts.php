﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="dist/js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="biblio/jquery-ui.js"></script>
        <link href="biblio/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="style.css" rel="stylesheet" type="text/css" media="screen" />

        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="style.css"></script>
        <style type="text/css"> </style>
        <script>
            $(function () {
                $("#accordion").accordion();
            });
        </script>

        <title> Contact </title>
    </head>
    <body>
        
        <!--header-->
        <?php
        include("includes/header.php");
//        if(!isset($_SESSION['firstN'])) {
//            echo '<META HTTP-EQUIV="Refresh" CONTENT="2; URL=../gathering_people/identification.php">';
//            die('Vous devez être enregistré pour accéder à cette partie du site');
//            
//        }
        ?>
        <!-- end #header -->

        <!--menu-->
        <?php include("includes/menu.php"); ?>
        <!--endmenu-->
<br>
            
        <br>
        <div id="accordion" class="container"> 
            <h3>Address</h3>  
            <div>       
                <p>    
                    gathering people </br> ITB, college of blanchardstown </br> DUBLIN </br> IRLAND </br> EUROPE
                </p>    
            </div>   
            <h3>E-Mail</h3>  
            <div>      
                <p>
                  <a href="mailto:romain.fauconnier@yahoo.fr">Send a message</a>
                </p>    
            </div>    
        </div> 

        <!--footer-->
        <?php include("includes/footer.php"); ?>
        <!-- end #footer -->
    </body>
</html>
