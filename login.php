<?php
session_start();

	$pagename="Login"; //Create and populate a variable called $pagename
	echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
	echo "<title>".$pagename."</title>"; //display name of the page as window title
	echo "<body>";
	include ("headfile.html"); //include header layout file
	echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
	
	echo"<form action= login_process.php method='POST'>";

	echo "
	<table  style='border: 0px'>
	
	<tr><td style='border: 0px'>Email :</td> <td style='border: 0px'><input type=text name='loginEmail'  autofocus></td></tr>
	
	<tr><td style='border: 0px'>Password : </td><td style='border: 0px'><input type=password name='loginPassword' ></td></tr>
	
	<td style='border: 0px'><input type=submit value='Login'></td>
	<td style='border: 0px'><input type=reset value='Cancel'></td>
	
	
	</table>";

	echo "</form>";
	
	include("footfile.html"); //include head layout
	echo "</body>";
?>