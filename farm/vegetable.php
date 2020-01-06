<?php
session_start();
?>

<?php
include "includes/connection.php";
include "vegetablefetch.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Vegetable</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="">


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



	
/*vege*/



.box{
	background: #fff;
	margin: 0 0 30px;
	border: solid 1px #e6e6e6;
	padding: 20px;
	box-shadow: 0 1px 5px rgba(0,0,0,0.1);
}
.breadcrumb{
	padding: 8px 15px;
	margin-bottom: 20px;
	background-color: #ffffff;
	border-radius: 0;
	box-shadow: 0 1px 5px rgba(0,0,0,0.5);
}

.breadcrumb >li + li:before{
	content: ">\00a0";
	color:#cccccc;
}



@media(max-width: 991px){

.breadcrumb{
padding: 8px 0;
text-align: center;
}

}




/* shop product style (responsive) */

@media(max-width: 768px){
.center-responsive{
	width: 70%;
	margin: 0 auto;

}
}

@media(max-width:550px){
.center-responsive{
	width: 95%;
	margin: 0 auto;

}	
}


/* shop.php  Ends */

</style>	

</head>
<body>


<?php include "includes/index_header.php"?>






<div id="content">
	<div class="container">
		<div class="col-md-12"> <!-- top home|shop nav start -->
			<ul class="breadcrumb">
				<li><a href="home.php">Shop</a></li>
				<li>Vegetable</li>
				
			</ul>
			
		</div> <!-- top home|shop nav End -->
			
		<div class="col-md-3"> <!-- Side nav start -->
	<div class="box">
				<h1>Vegetable Shop</h1>
				<p>
					Chances are high that your item is available from a big box online retailer at a lower price.Consumers are motivated by more than price and convenience.
				</p>
		</div> <!-- Side nav ends -->	
</div>

		<div class="col-md-9">
			
				</div>
				
			

				<div class="row">
					<div id="load_data"></div>
   <div id="load_data_message"></div>
<script>

$(document).ready(function(){
 
 var limit = 3;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit,start)
 {
  $.ajax({
   url:"vegetablefetch.php",
   method:"POST",
   data:{limit:limit,start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }
 });
 
});
</script>
			</div> <!--row ends --> 
			
		
			

				

		


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
	window.location="customer/vegetable.php"
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
	window.location="owner/vegetable.php"
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

</footer>
</body>
</html>
