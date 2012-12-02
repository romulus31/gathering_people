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
 <a href="#" id="button" class="ui-state-default ui-corner-all">Toggle Effect</a></br>
<div class="toggler">
    <div id="effect" class="ui-widget-content ui-corner-all">
	
Califonia's Trails is a compilation of bicycle trails throughout California helping 
cyclists and especially tourists to plan their tour across the "Sunshine State".
With the help of Rails-to-Trails most of the suggested trails were built and launched.


Rails-to-Trails Conservancy is a nonprofit organization based in Washington, D.C.linked with California's Trails, 
whose mission it is to create a nationwide network of bicycle trails from former rail 
lines and connecting corridors to create space for passionate cyclists 
and to offer a different type of experience for tourists visiting the country.

<h3>Who We Are</h3>
Rails-to-Trails Conservancy serves as the national voice for more than 
150,000 members and supporters, 20,000-plus miles of rail-trail throughout 
the country, and more than 9,000 miles of potential rail-trails waiting to be built. 

We have supported the tremendous growth and development of rail-trails since
 opening our doors February 1, 1986. Then, there were fewer than 200 known
 rail-trails. Today, there are more than 1,600 preserved bicycle trails that form
 the backbone of a growing trail system that spans communities and regions all across the country.

Rails-to-Trails Conservancy remains dedicated to the creation of a nationwide 
network of bicycle trails. Further, Rails-to-Trails Conservancy is committed to enhancing 
the health of America's environment, transportation, economy, neighborhoods and
 people-ensuring a better future made possible by trails and the connections they
 inspire.</br>

    </div>
</div>

<!--footer-->
	<?php include("includes/footer.php"); ?>
<!-- end #footer -->
</body>
</html>
