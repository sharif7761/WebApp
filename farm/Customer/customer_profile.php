<?php

include "includes/connection.php";

session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<style type="text/css">
	.scroll
	{
		
		width:100%;
		height:300px; 
		overflow: scroll;
	}

.table	img{
		width: 45px; 
                height: 45px; 
                object-fit: contain;"
	}



	
		/* popup style */
.bg-modal{
	width: 100%;
	height: 1500px;
	background-color: rgba(0,0,0,0.7);
	
	position: absolute;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	display: none;
}

.modal-content{
	width: 500px;
	height: 330px;
	background-color: white;
	border-radius: 4px;
	text-align: center;
	padding: 20px;
	position: relative;
}
#popup input {
width: 50%;
display: block;

margin: 15px auto;
}

.close{
	position: absolute;
	top 0;
	right: 14px;
	font-size: 42px;
	transform: rotate(45deg);
	cursor: pointer;
}


		/* edit popup style */
.bg-modal2{
	width: 100%;
	height: 1500px;
	background-color: rgba(0,0,0,0.7);
	
	position: absolute;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	display: none;
}

.modal-content2{
	width: 500px;
	height: 200px;
	background-color: white;
	border-radius: 4px;
	text-align: center;
	padding: 20px;
	position: relative;
}
#popup input {
width: 50%;
display: block;

margin: 15px auto;
}

.close2{
	position: absolute;
	top 0;
	right: 14px;
	font-size: 42px;
	transform: rotate(45deg);
	cursor: pointer;
}


/* header style */

#shop_header{
	font-family: "Roboto",Helvetica,Arial,sans-sarif;
	font-size: 14px;
	line-height: 1.42857143;
	color: #333333;
	background-color: #f0f0f0;
}

#top{
	background-color: #005266;
	padding: 10px 0;
    text-align: center;

}

#top .offer{
	color: #fff;
}

#top .offer .btn{
	text-transform: uppercase;
}

@media(max-width: 991px){
	#top .offer{
		margin-bottom: 10px;
	}
}

@media(max-width: 991px){
	#top {
		font-size: 12px;
		text-align: center;
	}
}

#top a{
	color: #fff;

}

#top ul.menu{
 padding-top: 5px;
 margin: 0;
 text-align: right;
 font-size: 12px;
 list-style: none;
}

@media(max-width: 991px){
	#top ul.menu{
		text-align: center;
	}
}

#top ul.menu{
	text-align: center;
}

#top ul.menu >li a{
	color: #eeeeee;

}

#top ul.menu>li{
	display: inline-block;
}

#top ul.menu > li +li:before{
	content: "|\00a0";
	padding: 0 5px;
	color: #f7f7f7;
}




/* header style */

.navbar{
	background: white;
}

.navbar-collapse .right {
	float: right;
}

.navbar-brand{
	float: left;
	padding: 10px 15px;
	font-size: 18px;
	line-height: 20px;
	height: 17px;
}


.navbar-brand:hover,.navbar-brand:focus{
	text-decoration: none;
}

.navbar ul.nav>li>a{
	text-transform: uppercase;
	font-weight: bold;
	font-size: 14px;
}

.padding{
	padding-top: 10px;
}

.navbar ul.nav>li>a:hover{
	background: #e7e7e7;

}

.btn-primary{
	color: rgb(255,255,255);
	background-color: rgb(75,151,168);
	border-color: rgb(65,179,156);
}
  
  
  #header_text{
    font-size: 21px;
    
    color: #FFFFFF;
  }

  #title{
    margin-left: 90px;
  }
  .contactus{
  	
  	float: left;
  	width: 45%;
  	
  	margin: auto;
  	padding-top: 25px;
  }

  .callus{
  float: right;
  	margin-right: 20px;	
  	width: 25%;
  	height: 100%;
  	background-color: tomato;
  	text-align: center;
  }

  .contactinfo{
  	float: right;
  	
  	width: 50%;
  	height: 100%
  }
  




 .social{
text-align: left;

}

.social a{
margin: 12px 10px 0 0;	
color: #fff;
display: inline-block;
width: 30px;
height: 30px;
border-radius: 15px;
line-height: 30px;
font-size: 15px;
text-align: center;
transform: all 0.3s ease-out;
vertical-align: bottom;
background-color: #555555;

}
.social a i{
	padding-top:6px; 
}





#title h3{
	padding-left: 8px;
	color: tomato;
	text-transform: uppercase;
}

#title h4{
	color: grey;
	}

#header2{
	background-color: white;
	width: 100%;
	height: 117px;
}

.nav-right label{
	width: 20px;
	height: 30px;
	border-radius: 50%;

	color: tomato;
	font-size: 20px;
	background-color: red;
}

.nav-right p{
	color: white;
	text-align: center;
	
}

.nav-right a{
	padding-right: 50px;
	margin-top:  20px;
	
	text-decoration: none;

	
}

#login_style{
	color: tomato;
	margin-top: 10px;
	padding-top:  10px;
}

#cart_style{
padding:  0px;
}

.wrapper
		{
			width: 300px;
			margin:0 auto;
			background-color: white;
			color: black
			;	
		}


</style>
</head>
<body>

<?php
	include "includes/customer_header.php";
?>





<!-- 3rd head ends-->

</div>


		<div  id="" style="width: 100%;">
			<div class="box" style="width: 100%;">
				
<div class="container" style="background-color: white; width: 100%;">
	<div class="wrapper">
	
							<?php

		if(isset($_POST['submit1']))
		{
			?>

			<script type="text/javascript">
				window.location="edit.php";
			</script>

			<?php

		}

		?>


		<?php

		$q=mysqli_query($db,"select * from customer where email='$_SESSION[login_email]';");
		?>
		<legend>
			<h2 style="text-align: center;">My Profile</h2>
		</legend>		

		<?php

		$row=mysqli_fetch_assoc($q);

		echo "<div style='text-align:center'>
		<img class='img-circle profile_img' height=110 width=120 src='../img/".$row['pic']."'>
		</div>";
		

		?>

		<div style="text-align: center;">
			<h2 style="color:mediumseagreen; "><b>Welcome</b></h2>
			<h3 style="color:slateblue; ">
				<b><?php echo $_SESSION['login_user']; ?></b>
			</h3>
		</div>

		<br>

		<?php
		echo "<b>";
		echo "<table class='table table-bordered' style='width=100%;'>";

		echo "<tr>";
		echo "<td>";
		echo "<b> User ID: </b> ";
		echo "</td>";

		echo "<td>";
		echo $row['Cus_id'];
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>";
		echo "<b> User Name </b> ";
		echo "</td>";

		echo "<td>";
		echo $row['name'];
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>";
		echo "<b> Phone: </b> ";
		echo "</td>";

		echo "<td>";
		echo $row['phone'];
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>";
		echo "<b> Email: </b> ";
		echo "</td>";

		echo "<td>";
		echo $row['email'];
		echo "</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td>";
		echo "<b> Address: </b> ";
		echo "</td>";

		echo "<td>";
		echo $row['address'];
		echo "</td>";
		echo "</tr>";

		

		echo "</table>";
		echo "</b>";
		?>
		
						
						<div  align="center">
							
							
							<a href="#" class="btn btn-primary" id="edit_pro" style="background-color: green;">Edit Profile <i class="fa fa-pencil-square-o"></i></a>
							<a href="#" class="btn btn-primary" id="edit_pass" style="background-color: green;">Change Password <i class="fa fa-pencil-square-o"></i></a>	
							<br><br>
						</div>

						
					
		

</div>
</div>

</div>
</div>

<?php
if (isset($_POST['submit']))
{
	mysqli_query($db,"UPDATE `customer` SET `name`='$_POST[name]',`phone`='$_POST[phone]',`email`='$_POST[email]',`address`='$_POST[address]' WHERE `Cus_id`=$_POST[Cid];");

	if(isset($_FILES['file']))
	{
		$product_image = $_FILES['file'] ['name'];
	$product_image_tmp = $_FILES['file'] ['tmp_name'];

	move_uploaded_file($product_image_tmp, "../img/$product_image");

	mysqli_query($db,"UPDATE `customer` SET `pic`='$product_image' WHERE `Cus_id`=$_POST[Cid];");
			}


	?>
<script type="text/javascript">
alert("User Updated");	
window.location="customer_profile.php"
</script>
<?php
}

?>


<?php
if (isset($_POST['changePass']))
{
	mysqli_query($db,"select * from `customer` ' WHERE `Cus_id`='$_SESSION[login_id]';");
	if($_POST[old_pass]==$row['password']){

			$pass=$_POST['new_pass'];
	$con=$_POST['con_pass'];

	if($pass==$con){
				mysqli_query($db,"UPDATE `customer` SET `password`='$pass' WHERE `Cus_id`='$_SESSION[login_id]';");
				?>
<script type="text/javascript">
	alert("Password update successfully");
</script>

<?php			
			}

			else 
			{
				?>
<script type="text/javascript">
	alert("Confirm Password Does not matched");
</script>

<?php
			}
	}
	else{
		?>
<script type="text/javascript">
	alert("Old Password does not matched");
</script>

<?php
	}
}
?>

<footer>
	<?php
	include "includes/shop_footer.php";
	?>
</footer>

		<div class="bg-modal">
			<div class="modal-content">
				<div class="close">
					+
				</div>


				<form action="" id="popup" method="POST" enctype="multipart/form-data">
					<input type="file" name="file">
					<input type="text" name="Cid" id="Cid" placeholder="C_id" readonly value="<?php echo $row['Cus_id']; ?>">
					<input type="text" name="name" id="name" placeholder="Name" value="<?php echo $row['name']; ?>">
					<input type="text" name="phone" id="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>">
					<input type="email" name="email" id="email" placeholder="Email" value="<?php echo $row['email']; ?>">
					<input type="text" name="address" id="address" placeholder="Address" value="<?php echo $row['address']; ?>">


					
		<button class="btn btn-default" type="submit" name="submit" class="fa fa-send-o" style="background-color: red;color: white;">Submit</button>
				</form>

			</div>
		</div>

		<div class="bg-modal2">
			<div class="modal-content2">
				<div class="close2">
					+
				</div>


				<form action="" id="popup" method="POST">
					<input type="text" name="old_pass" id="old_pass" placeholder="Enter Old Password">
					<input type="password" name="new_pass" id="new_pass" placeholder="Enter New Password">
					<input type="password" name="con_pass" id="con_pass" placeholder="Confirm New Password">
					
					
		<button class="btn btn-default" type="submit" name="changePass" class="fa fa-send-o" style="background-color: red;color: white;">Submit</button>
				</form>

			</div>
		</div>

		





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
	document.getElementById('edit_pro').addEventListener('click',function(){
document.querySelector('.bg-modal').style.display='flex';
document.querySelector('.bg-modal2').style.display='none';
});

document.getElementById('edit_pass').addEventListener('click',function(){
document.querySelector('.bg-modal2').style.display='flex';
document.querySelector('.bg-modal').style.display='none';
});

	document.querySelector('.close').addEventListener('click',function(){
		document.querySelector('.bg-modal').style.display='none';

	});



document.querySelector('.close2').addEventListener('click',function(){
		document.querySelector('.bg-modal2').style.display='none';

	});	

	</script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>



