<?php
 // Enabling error reporting
        error_reporting(-1);
        ini_set('display_errors', 'On');
	include('config.php');
	
	$market=$_POST['market'];
	$category=$_POST['category'];
	$commodity=$_POST['commodity'];
	$price=$_POST['price'];
	$unit=$_POST['unit'];
    $supply=$_POST['supply'];
     $date= date('Y-m-d');
    
   
	
	 mysqli_query($db,"insert into marketprices (market, category, commodity, price, unit, supply, created_at) values ('$market', '$category', '$commodity', '$price', '$unit', '$supply', NOW())");
	 header('location:index.php');
	
?>