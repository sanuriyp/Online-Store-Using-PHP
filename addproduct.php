<?php 
session_start(); 
$pagename="Add a New Product";      //Create and populate a variable called $pagename 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";  //Call in stylesheet 
 
echo "<title>".$pagename."</title>";   //display name of the page as window title 
 
echo "<body>"; 
 
include ("headfile.html");     //include header layout file  
 
echo "<h4>".$pagename."</h4>";    //display name of the page on the web page 

//registration form 
echo "<form method='post' action='addproduct_conf.php'>";
echo "<table style='border:0px'>";

echo "<tr><td style='border:0px'>*Product Name </td>";
echo "<td style='border:0px'><input type=text name=productName size=35></td></tr>";

echo "<tr><td style='border:0px'>*Small Picture Name </td>";
echo "<td style='border:0px'><input type=text name=smallPicName size=35></td></tr>";

echo "<tr><td style='border:0px'>*Large Picture Name </td>";
echo "<td style='border:0px'><input type=text name=largePicName size=35></td></tr>";

echo "<tr><td style='border:0px'>*Short Description </td>";
echo "<td style='border:0px'><input type=text name=shortDescrip size=35></td></tr>";

echo "<tr><td style='border:0px'>*Long Description </td>";
echo "<td style='border:0px'><input type=text name=longDescrip size=35></td></tr>";

echo "<tr><td style='border:0px'>*Price </td>";
echo "<td style='border:0px'><input type=text name=price size=35></td></tr>";

echo "<tr><td style='border:0px'>*Initial Stock Quantity </td>";
echo "<td style='border:0px'><input type=text name=stockQuantity size=35></td></tr>";

echo "<tr><td style='border:0px'><input type=submit name=addProduct value='Add Product'></td>";
echo "<td style='border:0px'><input type=reset value='Clear Form'></td></tr>";

echo "</table>";
echo "</form>";

include("footfile.html");     //include head layout 
 
echo "</body>"; 
?>