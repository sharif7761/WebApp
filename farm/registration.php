<?php

include "includes/connection.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


	
	

<style type="text/css">
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
  

.bg-modal{
	width: 100%;
	height: 100%;
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
	height: 350px;
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






#title h2{
	padding-left: 15px;
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



</style>


</head>
<body>

<?php include "includes/index_header.php"?>




<div id="content">
	<div class="container">
		<div class="col-md-12"> <!-- top home|shop nav start -->
			<ul class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li>Registration</li>
				
			</ul>
			
		</div> <!-- top home|shop nav End -->
		<div class="col-md-1">
		</div>	
		<div class="col-md-10">
			<div class="box">
				<div class="box-header">
					<center>
						<h2>Register Now</h2>
						<p class="text-muted">
							If you have any questions, please fell free to contact us, our customer service center is working for you 24/7.
						</p>
					</center>
					
				</div>

				<form action="" method="post">
					<div class="form-group">
						<label>Full Name <label style="color: red"> * </label></label>
						<input type="text" name="name" required="" class="form-control" required>
						
					</div>

					<div class="form-group">
						<label>Email <label style="color: red"> * </label></label>
						<input type="email" name="email" required="" class="form-control" required>
						
					</div>

					<div class="form-group">
						<label>Phone Number <label style="color: red"> * </label></label>
						<input type="text" name="phone" required="" class="form-control" required>
						
					</div>

					<div class="form-group">
						<label>Password <label style="color: red"> * </label></label>
						<input type="password" name="password" required="" class="form-control" required>
					
					</div>
						<div class="form-group">
						<label>Confirm Password <label style="color: red"> * </label></label>
						<input type="password" name="con_password" required="" class="form-control" required>
					

					</div>

					<div class="form-group">
						<label>Full Address <label style="color: red"> * </label></label>
						<textarea name="address" required="" class="form-control"></textarea required>
						
					</div>

					<div class="text-center">
						<button type="submit" name="submit" class="btn btn-primary" style="background-color: tomato;"><i class="fa fa-user-md"> Register </i>
							
						</button>
						
					</div>

				</form>
				
			</div>
			
		</div>


	</div>
	
</div>


<div class="bg-modal">
			<div class="modal-content">
				<div class="close">
					+
				</div>


				<img src="img/user22.png">
				<form action="" id="popup" method="post">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="password" placeholder="Password">
					<button class="btn btn-default" type="submit" name="submit">Login</button>
				</form>
				<br>
				<label><a href="#">Forget Password</a></label>
				<label>New to this website?<a href="registration.php">Sign Up</a></label>


			</div>
		</div>

<script type="text/javascript">
	document.getElementById('login_style').addEventListener('click',function(){
document.querySelector('.bg-modal').style.display='flex';
});

	document.querySelector('.close').addEventListener('click',function(){
		document.querySelector('.bg-modal').style.display='none';
	});
</script>


				<?php

		if(isset($_POST['submit']))
		{   $correctpass=md5($_POST['password']);
			$count=0;
			$emailsql = mysqli_real_escape_string($db, $_POST['email']);
			$result=mysqli_query($db,"SELECT * FROM `user` WHERE Email='$emailsql' && Password='$correctpass';");

			$row=mysqli_fetch_assoc($result);
			$count=mysqli_num_rows($result);

			if($count==0)
			{   
				$result=mysqli_query($db,"SELECT * FROM `customer` WHERE email='$emailsql'  && password='$correctpass';");

				$row=mysqli_fetch_assoc($result);
				$count=mysqli_num_rows($result);

				if($count==0)
				{

			?>
			<!--
			<script type="text/javascript">
	alert("incorrect usernam or password");
</script>

-->			
			<?php	

			}

				else
				{
					$_SESSION['login_user']=$row['name'];
					$_SESSION['pic']=$row['pic'];
					$_SESSION['type']=$row['type'];
					$_SESSION['login_id']=$row['Cus_id'];
					$_SESSION['login_email']=$row['email'];

					?>
			<script type="text/javascript">
	window.location="customer/index.php"
</script>
			<?php		
				}
			}
			else
			{
				//correct pass and user

				
				$_SESSION['login_user']=$row['Uname'];
				$_SESSION['pic']=$row['pic'];
				$_SESSION['type']=$row['Position'];
				$_SESSION['login_id']=$row['Uid'];
				$_SESSION['login_email']=$row['Email'];

			?>
			<script type="text/javascript">
	window.location="owner/index.php"
</script>		
				
	<?php			
		}
}
	?>

<?php

if(isset($_POST['submit']))	
{
	$count=0;
$emailsql = mysqli_real_escape_string($db, $_POST['email']);
			$result=mysqli_query($db,"SELECT * FROM `user` WHERE Email='$emailsql';");

			$row=mysqli_fetch_assoc($result);
			$count=mysqli_num_rows($result);

			if($count==0)
			{
	$sql="select * from customer";
	$result=mysqli_query($db,$sql);

	while($row=mysqli_fetch_assoc($result))
	{
		if($row['email']==$_POST['email'])
		{
			$count++;
		}
	}
	

	$pass=$_POST['password'];
	$con=$_POST['con_password'];

	if($pass==$con){
		$passenc=md5($_POST['password']);
		
	if($count==0){
		$namesql = mysqli_real_escape_string($db, $_POST['name']);
		$emailsql = mysqli_real_escape_string($db, $_POST['email']);
		$phonesql = mysqli_real_escape_string($db, $_POST['phone']);
		$addresssql = mysqli_real_escape_string($db, $_POST['address']);
	mysqli_query($db,"insert into `customer` (name, email, phone, password, address, type, pic) values ('$namesql','$emailsql','$phonesql ','$passenc','$addresssql','customer','user22.png');");

?>
<script type="text/javascript">
	alert("Registration successful");
</script>

<?php
}

else{

	?>
<script type="text/javascript">
	alert("Email already exist");
</script>

<?php
}
}
else{

	?>
<script type="text/javascript">
	alert("Password doesn't match");
</script>

<?php
}


}

else
{
	?>
<script type="text/javascript">
	alert("Email already exist is admin ");
</script>

<?php

}


}

?>





<footer>
	<?php
	include "shop_footer.php";
	?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>



