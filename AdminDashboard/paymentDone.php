<?php
    require "config.php";
    $id =$_GET['did'];		
	$newsql ="DELETE FROM `customerbookings` WHERE `BookingId` ='$id' ";
	if(mysqli_query($conn,$newsql))
	{
		echo '<script>alert("Customer Payment Done")</script>';
	} 
	header("Location: payment.php");
?>