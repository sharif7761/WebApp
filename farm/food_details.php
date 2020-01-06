<?php
session_start();
include "includes/connection.php";
include "functions2.php";

?>
<?php
if(isset($_GET['Fid']))
{
	$Fid=$_GET['Fid'];
	$get_food="Select * from food where Fid='$Fid'";
	$run_food= mysqli_query($db,$get_food);
	$row= mysqli_fetch_assoc($run_food);
	$F_id=$row['Fid'];
	$F_name=$row['Fname'];
	$F_Quantity=$row['Quantity'];
	$F_Type=$row['Type'];
	$F_image=$row['Fimage'];
	$F_Price=$row['SRate'];
	$F_Description=$row['Description'];
	$F_image1=$row['Fimage1'];
	$F_image2=$row['Fimage2'];
	
}
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="styles/style.css">


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
.item{
	 width: 440px;
  height:280px;
  position: absolute;
  margin-left: auto;
  margin-right: auto;
  display: flex;
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



.box{
	background: #fff;
	margin: 0 0 30px;
	border: solid 1px #e6e6e6;
	padding: 20px;
	box-shadow: 0 1px 5px rgba(0,0,0,0.1);
}


#content #productmain{
	margin-bottom: 30px;
}

#content #productmain .price{
	font-size: 30px;
	font-weight: 300;
	text-align: center;
	margin-top: 40px;
}

#content #mainimage{
	box-shadow: 0 1px 5px rgba(0,0,0,0.7);
	position: absolute;
	height: 600px;

}

#content a .thumb {
	display: block;
	box-shadow: 0 1px 5px rgba(0,0,0,0.2);
	border: solid 2px transparent;
}

#content .headline{
	height: 200px;
}
/* details.php  ends */



	</style>
</head>
<body>

<?php include "includes/index_header.php"?>

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
	window.location="customer/shop.php"
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
	window.location="owner/shop.php"
</script>		
				
	<?php			
		}
}
	?>



<div id="content">
	<div class="container">
		<div class="col-md-12"> <!-- top home|shop nav start -->
			<ul class="breadcrumb">
				<li><a href="home.php">Shop</a></li>
				<li><a href= "index.php?F_Type=<?php echo $F_Type;?>"></a>
				</li>
				<li><?php echo $F_name;?></li>
				
				
			</ul>
			
		</div> <!-- top home|shop nav End -->
			
		<div class="col-md-3"> <!-- Side nav start -->

		</div> <!-- Side nav ends -->	

		<div class="col-md-9">
			<div class="row" id="productmain">
				<div class="col-sm-6"> <!-- col-sm-6 starts -->
					<div id="mainimage" style="height: 200px;">
						<div id="mycarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
								<li data-target="#mycarousel" data-slide-to="1" ></li>
								<li data-target="#mycarousel" data-slide-to="2" ></li>
								
							</ol>

							<div class="carousel-inner">
								<div class="item active">  <!-- Product-1 image 1 -->
									<center>
										<img class="img-responsive"src="img/<?php echo $F_image?>" >
									</center>
									
								</div>  <!-- Product-1 image 1 ends-->


								<div class="item ">  <!-- Product-1 image 2 -->
									<center>
										<img src="img/<?php echo $F_image1?>" class="img-responsive">
									</center>
									
								</div>  <!-- Product-1 image 2 ends -->

								<div class="item ">   <!-- Product-1 image 3 -->
									<center>
										<img src="img/<?php echo $F_image2?>" class="img-responsive">
									</center>
									
								</div>   <!-- Product-1 image 3 ends -->
								
							</div>

							<a href="#mycarousel" class="left carousel-control" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							
							<a href="#mycarousel" class="right carousel-control" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							

						</div>
						
					</div>
					
				</div>  <!-- col-sm-6 Endss -->
				

				<div class="col-sm-6">  <!-- col-sm-6 starts -->
					<div class="box">
						<h1 class="text-center"><?php echo $F_name; ?></h1>

						<?php

						add_cart();

						?>


						<form action="food_details.php?add_cart=<?php echo $Fid ?>" method="post" class="form-horizontal">
							<div class="form-group">  <!-- form group  starts -->
								<label class="col-md-5 control-label"><label>Quantity(kg.): </label></label>
								<div class="col-md-7">
									<input type="number" name="Quantity" required="">
								</div>
								
							</div>   <!-- form group  ends -->


					
							<p class="price"><label>Price:&nbsp</label><?php echo $F_Price;?><label>৳</label></p>
							<p class="text-center buttons">
								<button class="btn btn-primary" name="cart_add"  type="submit" style="margin: auto;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</p>
							
						</form>
						
					</div> <!-- box ends -->
					
					<div class="col-xs-4"> <!-- down small product pics -->
					<a href="" class="thumb">
						<img src="img/<?php echo $F_image1?>" class="img-responsive">
					</a>
						
					</div>

					<div class="col-xs-4"> <!-- down small product pics -->
					<a href="" class="thumb">
						<img src="img/<?php echo $F_image2?>" class="img-responsive">
					</a>
						
					</div>

					<div class="col-xs-4"> <!-- down small product pics -->
					<a href="" class="thumb">
						<img src="img/<?php echo $F_image?>" class="img-responsive">
					</a>
						
					</div>



				</div>  <!-- col-sm-6 ends -->


			</div> <!-- row ends -->

			
			<div class="box" id="details">
				<h4>Product Details</h4>
				<p><?php echo $F_Description ?></p>

			</div>  <!-- box ends -->


			<!-- suggested prod div starts  -->


			<div id="row same-height-row">
				<div class="col-md-3 col-sm-6">
					<div class="box same-height headline">
						<h3 class="text-center">You May Also Like These Products</h3>
						
					</div>
					
				</div>
				<?php 
                 $get_food="select * from `food` where Type='$F_Type' order by RAND() LIMIT 3";
                 $run_food=mysqli_query($db,$get_food);
                 while ($row=mysqli_fetch_assoc($run_food)) {

                 	$Fid=$row['Fid'];
                 	$S_name=$row['Fname'];
	               
	                 $S_Type=$row['Type'];
	                 $S_image=$row['Fimage'];
	                  $S_Price=$row['SRate'];
                 
				?>
				<div class="center-responsive col-md-3"> <!-- suggested prod 1  -->
					<div class="product same-height">
						<a href="food_details.php?Fid=$Fid">
							<img src="img/<?php echo $S_image?>" class="img-responsive">
						</a>
						
						<div class="text">
							<label>Name:&nbsp</label><a href="food_details.php?Fid=<?php echo $Fid ?>"><?php echo $S_name;?></a>
							<p class="price"><label>Price:&nbsp</label><?php echo $S_Price;?><label>৳</label></p>
						</div>
					</div>
				</div>

<?php
}
?>
				
				
			</div>  <!-- suggested prod div ends  -->


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





<footer>
	<?php
	include "includes/shop_footer.php";
	?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</footer>
</body>
</html>