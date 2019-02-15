<?php
	include('config.php');
	$id=$_GET['id'];
	mysqli_query($db,"delete from marketprices where id='$id'");
	header('location:index.php');

?>