<?php
session_start();
if(isset($_SESSION['login_user']))
{

					unset($_SESSION['login_user']);
					unset($_SESSION['login_id']);
					unset($_SESSION['pic']);
					unset($_SESSION['type']);
					unset($_SESSION['login_email']);
				
			}

		

	mysqli_query($db,"DELETE FROM `cart` WHERE `Cus_id`='$_SESSION[login_id]';");

header("location:../index.php");
?>

