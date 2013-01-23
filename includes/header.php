<?php 
session_start(); 
if(isset($_SESSION['firstN'])) 
{
print $_SESSION['idUser'].'<br/>';
               print  $_SESSION['firstN'].'<br/>' ;
				print  $_SESSION['lastN'].'<br/>';
				 print  $_SESSION['mail'].'<br/>';
				 
}	?>
<div id="header">
	<div id="logo">
			<h1><a href="#">GATHERING PEOPLE</a></h1>
	</div>
</div>