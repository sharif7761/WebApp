<?php
session_start();
include "includes/connection.php";
if(isset($_SESSION['login_user']))
{
		mysqli_query($db,"DELETE FROM `cart` WHERE `Cus_id`='$_SESSION[login_id]';");
					unset($_SESSION['login_user']);
					unset($_SESSION['login_id']);
					unset($_SESSION['pic']);
					unset($_SESSION['type']);
					unset($_SESSION['login_email']);

	unset($_SESSION['login_user']);	
}
	

header("location:../index.php");
?>

