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
        <script type="text/javascript" src="dist/js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="bikingtrails.js"></script>
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="dist/js/bootstrap.js"></script>


    </head>
    <body>
        <?php
        include("includes/header.php");
//        if(!isset($_SESSION['firstN'])) {
//            echo '<META HTTP-EQUIV="Refresh" CONTENT="2; URL=../gathering_people/identification.php">';
//            die('Vous devez être enregistré pour accéder à cette partie du site');
//            
//        }
        ?>


<?php include("includes/menu.php"); ?>
    <br><br><br>
    <!-- LIENS RENVOYANT LES FICHIERS JSON -->
    <div class="container">
        
        <div class="btn-group-vertical col-lg-3" role="group"> 
            <button id="BikingTrails1" type="button" class="btn btn-default"> <a href="#" > First Step </a></button>
            <button id="BikingTrails2" type="button" class="btn btn-default">  <a href="#" > Second Step </a></button>
            <button id="BikingTrails3" type="button" class="btn btn-default"> <a href="#" > Third Step </a></button>
        </div>

        <!--		<a class="off" href="#" id="off"><em>Normal LIST</em></a></h3>
                        <a class="on" href="#" id="on"><em>Lighting LIST</em></a></h3>-->




        <div id="bike_div_php" class="col-lg-6 ">	
        </div>
        <div id="table_biking">

        </div>
    </div>



<?php include("includes/footer.php"); ?>

</body>
</html>

