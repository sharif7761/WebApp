<?php
session_start();
?>

<?php
include "includes/connection.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Farm Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="styles/style.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

			<meta charset="utf-8">

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




	body{
	font-family: "Roboto",Helvetica,Arial,sans-sarif;
	font-size: 14px;
	line-height: 1.42857143;
	color: #333333;
	background-color: #f0f0f0;
}



#animation
{
	background:#fafafa;
	background-color: black;
	width: 100%;
	height: 400px;
	background-image: url('img/5.jpg');
	background-size: 100% 100%;
}
 #animation p{
	text-align: center;
	margin-top: 50px;
	font-size: 100px;
	line-height: 100px;
	text-transform: uppercase;
	background:url(img/grass.jpg);
	-webkit-background-clip:text;
	-webkit-text-fill-color:transparent;
	animation: animate 15s linear infinite;
	font-weight: bold;
	font-family: baloo;

}

 @keyframes animate{
0%{
	background-position: 0 0;
}

100%{
	background-position: 100% 100%;	
}
}

/*why we*/

#whywe{
			background-size: cover;
			background-position: center;
			color: black !important;
			background-color: white !important;
			width: 100%;
			margin-top: 10px;
			margin-bottom: 10px;

		}


		#whywe h1{
			font-family: sans-serif;
			text-align: center;
			letter-spacing: 1px;

		}

		#whywe h1:after{
			content: '';
			background: white;
			display: block;
			width: 150px;
			margin: 10px auto;
			width: 100%;
			height: 3px;

		}	

		#whywe .icon{
			font-size: 40px;
			margin: 20px auto;
			padding: 20px;
			height: 80px;
			width: 80px;
			border:1px solid white;
			border-radius: 50%;
		}

		#whywe .col-md-3:hover{
			box-shadow: 5px 7px 9px -3px rgba(0,0,0,0.5);
			 
		}


</style>

</head>
<body>
<?php include "includes/index_header.php"?>




<!-- slider starts -->
<div class="container" id="animation">
	<div class="col-md-12">
		
			<p>AGRO FARM</p>

</div>
	
</div>

<!-- 2nd head ends-->

<!-- 3rd head starts-->

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
				<label><a href="updatePass.php">Forget Password</a></label>
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
		{
			$correctpass=md5($_POST['password']);
			$count=0;
			$result=mysqli_query($db,"SELECT * FROM `user` WHERE Email='$_POST[email]' && Password='$correctpass';");

			$row=mysqli_fetch_assoc($result);
			$count=mysqli_num_rows($result);

			if($count==0)
			{
				$result=mysqli_query($db,"SELECT * FROM `customer` WHERE email='$_POST[email]' && password='$correctpass';");

				$row=mysqli_fetch_assoc($result);
				$count=mysqli_num_rows($result);

				if($count==0)
				{

			?>
			<!--
			<script type="text/javascript">
	alert("incorrect usernam or password");
</script>

-->			<script type="text/javascript">
	alert("incorrect username or password");
</script>
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



<div class="container" id="whywe">
	<div class="col-md-12">
	<legend>
<h1><span style="color: yellow"><b>Why</b></span><span> We?</span></h1>
</legend>
		<div class="row">
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-desktop"></i>
				</div>
					<h3>Fresh Fruits</h3>
					<p>Srighan Farms plan to increase the production of fresh fruits for export into existing markets and penetrate new markets in the near future</p>

					
				</div>

				<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-desktop"></i>
				</div>
					<h3>Fresh Fruits</h3>
					<p>Srighan Farms plan to increase the production of fresh fruits for export into existing markets and penetrate new markets in the near future</p>

					
				</div>

				<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-desktop"></i>
				</div>
					<h3>Fresh Fruits</h3>
					<p>Srighan Farms plan to increase the production of fresh fruits for export into existing markets and penetrate new markets in the near future</p>

					
				</div>

				<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-tablet"></i>
				</div>
					<h3>Fresh Fruits</h3>
					<p>Srighan Farms plan to increase the production of fresh fruits for export into existing markets and penetrate new markets in the near future</p>

					
				</div>
				
			</div>
		</div>
	</div>

			
</div>
	
</div>

		
	
<footer>
	<?php
	include "includes/shop_footer.php";
	?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>