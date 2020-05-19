<?php 
session_start();
include("db.php");
$pagename="New Product Confirmation";      //Create and populate a variable called $pagename 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";  //Call in stylesheet 
 
echo "<title>".$pagename."</title>";   //display name of the page as window title 
 
echo "<body>"; 
 
include ("headfile.html");     //include header layout file  
 
echo "<h4>".$pagename."</h4>";    //display name of the page on the web page 

$productName = $_POST['productName'];
$smallPicName = $_POST['smallPicName'];
$largePicName = $_POST['largePicName'];
$shortDescrip = $_POST['shortDescrip'];
$longDescrip = $_POST['longDescrip'];
$proPrice = $_POST['price'];
$proStockQuantity = $_POST['stockQuantity'];

//if the mandatory fields in the form (all fields) are not empty, use the empty function 
if(!empty($productName)&&($smallPicName)&&($largePicName)&&($shortDescrip)&&($longDescrip)&&($proPrice)&&($proStockQuantity)) {
	
    //SQL query to insert a new user into product table and execute SQL query, Execute INSERT INTO SQL query 		
	$SQL="INSERT INTO product(prodName, prodPicNameSmall, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity) VALUES ('$productName', '$smallPicName', '$largePicName', '$shortDescrip', '$longDescrip', '$proPrice', '$proStockQuantity')";
	$exeSQL=mysqli_query($conn,$SQL) or die(mysqli_error($conn));
			
			//Return the SQL execution error number using the error detector, use mysqli_errno($conn)
			$errno = mysqli_errno($conn);
			
			if($errno == 0){
				echo "The product has been added<br><br>";
				echo "Name of the small picture: ".$smallPicName."<br><br>";
				echo "Name of the large picture: ".$largePicName."<br><br>";
				echo "Short Description: ".$shortDescrip."<br><br>";
				echo "Long Description: ".$longDescrip."<br><br>";
				echo "Price: ".$proPrice."<br><br>";
				echo "Initial Quantity: ".$proStockQuantity;
			}
			
			if($errno != 0){
			  if($errno = 1062){
				echo " The uniqueness of the product name has been breached";
		        echo "<br><a href='addproduct.php'>Go Back</a>";
			  }
			  if ($errno == 1064){
				echo "Illegal characters have been entered such as apostrophes [ ' ] and backslashes [ \ ]";
		        echo "<br><a href='addproduct.php'>Go Back</a>";
			  }
			  if($errno == 1054){
				echo "Illegal characters have been entered in the fields that are expecting numerical values";
		        echo "<br><a href='addproduct.php'>Go Back</a>";
			  }
			}
}
else{
	echo "Fill all the mandatory fields !!";
	echo "<br><a href='addproduct.php'>Go Back</a>";
}

include("footfile.html");     //include head layout 
 
echo "</body>"; 
?>