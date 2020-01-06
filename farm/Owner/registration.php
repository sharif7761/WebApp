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


<div id="shop_header">
	<div id="top"> <!--top bar start-->
		<div class="container">
			

			
              <label id="header_text">Free Shipping * Order Today</label>
					</div>	

		</div>

		<div class="container" id="header2">
          <div class="navbar-header">
				<a class="navbar-brand home" href="index.php">
					<img src="img/new.png" alt="Shop" class="hidden-xs">
					   <img src="img/new.png" alt="Shop" class="visible-xs">
                  </div>
                  <div id="title">

					   <h2> AGRO FARM </h2>
            <h4 style="margin-left: 25px; ">Best products here</h4>
            </a>
                  </div>
                  <div class="contactinfo">
                  	
                  
				<div class="callus">
					<h3>Call Us</h3>
					<h4>0171234556</h4>
					
				</div>


			<div class="contactus">
			<p class="social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</p>
				</div>
				</div>
			</div>	
		
  </div>

<!-- 2nd head ends-->

<!-- 3rd head starts-->

  	<div class="navbar  navbar-default" id="navbar">
		<div class="container">
			

			<div class="navbar-collapse" id="navigation">
				<div class="padding nav">
					<ul class="nav navbar-nav navbar-left">
						<li class="">
							<a href="common_home.php">HOME</a>
						</li>
						<li class="active">
							<a href="index.php">SHOP</a>
						</li>

						

						<li>
							<a href="about.php">About Us</a>
						</li>

						<li>
							<a href="services.php">Services</a>
						</li>

						<li>
							<a href="contactus.php">Contact Us</a>
						</li>

						
					</ul>
					<div class="nav-right">
					 <ul class="nav navbar-nav navbar-right">
						<?php
				if(isset($_SESSION['login_user']))
				{
					
					?>
				
						<li class="active"><i class="fa fa-user fa-2x">
							<a href="#" id="login_style"><?php echo $_SESSION['login_user']; ?></a>
						</i></li>
						
						<a href="cart.php" id="cart_style">
					<i class="fa fa-shopping-cart fa-2x"></i>
					<label><p> 4 </p></label>
				</a>
						
						<li class="active"><i class="fa fa-sign-out fa-2x">
							<a href="logout.php" id="login_style">Logout</a>
						</i></li>

				<?php
				}
				else{

					?>
					<li class="active"><i class="fa fa-user fa-2x">
							<a href="#" id="login_style">Login</a>
						</i></li>
					<?php
				}
				?>
						
						
			
					</ul>

<!--				
				
					<div class="cart_style">
				<a href="cart.php" class="navbar-btn right">
					<i class="fa fa-shopping-cart fa-2x"></i>
					<label><p>4</p></label>
				</a>
			</div>
		-->

		</div>
</div>
</div>
</div>
</div>
</a>
</div>
</div>
</div>



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
						<input type="text" name="name" required="" class="form-control"equired>
						
					</div>

					<div class="form-group">
						<label>Email <label style="color: red"> * </label></label>
						<input type="email" name="email" required="" class="form-control"equired>
						
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


<?php
include "includes/Login_pop.php";
?>

<?php

if(isset($_POST['submit']))	
{
	$count=0;

			$result=mysqli_query($db,"SELECT * FROM `user` WHERE Email='$_POST[email]';");

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
	if($count==0){
	mysqli_query($db,"insert into `customer` values('','$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[password]','$_POST[address]','customer','user22.png');");

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



