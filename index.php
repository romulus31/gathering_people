<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>HOME1</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="biblio/jquery-1.8.2.js"></script>
<script type="text/javascript" src="biblio/jquery-1.8.2.js"></script>
<script type="text/javascript" src="biblio/jquery-ui.js"></script>
<link href="biblio/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />


<style type="text/css">

</style>
 <style>
        
    </style>
    <script>
    $(function() {
        var state = true;
        $( "#button" ).click(function() {
            if ( state ) {
                $( "#effect" ).animate({
                    backgroundColor: "#aa0000",
                    color: "#fff",
                    width: 500
                }, 1000 );
            } else {
                $( "#effect" ).animate({
                    backgroundColor: "#fff",
                    color: "#000",
                    width: 240
                }, 1000 );
            }
            state = !state;
        });
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
 <a href="#" id="button" class="ui-state-default ui-corner-all">Extend Effect</a></br>
<div class="toggler">
    <div id="effect" class="ui-widget-content ui-corner-all">
	
Our first objective is to gather people with the same interest. 
We want to develop a website with a login, where people are gathered 
according to their centre of interest, age or other, on a forum, where
 they can organise meeting or other. We know this already exists: Facebook,
 twitter, and other social network. 

<h3>How to gather people? </h3>

The first thing to do is to know the center of interest of each people. 
But also, we want to recover the personality of the people and what they expect in this activity,
 center of interest, and where they live.
</br>

    </div>
</div>

<!--footer-->
	<?php include("includes/footer.php"); ?>
<!-- end #footer -->
</body>
</html>
