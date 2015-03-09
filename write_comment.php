<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>SORT</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="biblio/jquery-1.8.2.js"></script>

<link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="dist/js/bootstrap.js"</script>


<style type="text/css">

</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="biblio/jquery-1.8.2.js"></script>
<script type="text/javascript" src="biblio/jquery-ui.js"></script>
<link href="biblio/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css"> </style>

<!-- Resizable -->
 <style>
    #resizable { width: 880px; height: 386px; margin-left:18%; border: 5px solid black;  }
    #resizable h3 { text-align: center; color:rgb(27,70,105); background: white; margin: 0; }
    </style>
    <script>
    $(function() {
        $( "#resizable" ).resizable();
    });
    </script>
	
<!-- Sortable -->
	<style>
		#sortable { display:block; list-style-type: none; margin: 0; padding: 0; }
		#sortable li { text-align:center; color:white; background:rgb(27,70,105); margin: 0px 3px 3px 3px; padding: 0.4em; font-size: 1 em; height: 100%; width:98%; }
		#sortable li span { position: absolute; }
    </style>
    <script>
    $(function() {
        $( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
    });
    </script>
</head>

<body>
	<!--header-->
	<?php include("includes/header.php");
//        if(!isset($_SESSION['firstN'])) {
//            echo '<META HTTP-EQUIV="Refresh" CONTENT="2; URL=../gathering_people/identification.php">';
//            die('Vous devez �tre enregistr� pour acc�der � cette partie du site');
//            
//        }
//        ?>
	<!-- end #header -->
	<!--menu-->
	<?php include("includes/menu.php"); ?>
	<!--endmenu-->
<!--Corps-->
   


	
    <div id="resizable" class="container">
		<h3 class="ui-widget-header">Sort your Favorite interest</h3>
		<ul id="sortable">
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>SPORT</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>CINEMA</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>GOOD FOOD</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>TRAVELS</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>RELAXATION</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>MUSICS</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>TECHNOLOGIES </li>
			
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>CARS / MOTOBIKE</li>
		</ul>

    </div>
</div>
</br>
</br>
</br>

 



<!--footer-->
	<?php include("includes/footer.php"); ?>
<!-- end #footer -->
</body>
</html>
