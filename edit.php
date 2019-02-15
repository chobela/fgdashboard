<?php
    include('config.php');

    $id=$_GET['id'];
	
    $market=$_POST['market'];
    $category=$_POST['category'];
    $commodity=$_POST['commodity'];
    $price=$_POST['price'];
    $unit=$_POST['unit'];
    $supply=$_POST['supply'];
    $date=$_POST['date'];
	
    mysqli_query($db, "update marketprices set market='$market', category='$category', commodity='$commodity', price='$price', unit='$unit', supply='$supply', created_at='$date' where id='$id'");
	header('location:index.php');
?>