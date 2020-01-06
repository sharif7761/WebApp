<?php

$db=mysqli_connect("localhost","root","","farm");  /*server name,username,password,db name */



if(!$db)
{
	die("connection failed: " . mysqli_connect_error());
}




?>
