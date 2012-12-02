<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>SORT</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="biblio/jquery-1.8.2.js"></script>


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
	<?php include("includes/header.php");?>
	<!-- end #header -->
	<!--menu-->
	<?php include("includes/menu.php"); ?>
	<!--endmenu-->
<!--Corps-->
   


	
    <div id="resizable" class="ui-state-content">
		<h3 class="ui-widget-header">Sort your Trails</h3>
		<ul id="sortable">
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>American River Bike Trail (Jedediah Smith Memorial Trail)</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Ashuelot Rail-Trail</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Baltimore and Annapolis Trail Park</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Banks-Vernonia State Trail</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Bike and Hike Trail</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Bizz Johnson National Recreation Trail</li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Blackwater Canyon Trail </li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Boreas Pass </li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Burke-Gilman Trail </li>
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
