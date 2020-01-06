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




/*why we*/

#whywe{
			background-image: url("../img/about.jpg");
  background-repeat: no-repeat;
  background-color: #cccccc;
				background-size: cover;
			background-position: center;
			color: white !important;
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
<?php include "includes/customer_header.php"?>






<div class="container" id="whywe">
	<div class="col-md-12">
	<legend>
<h1><span style="color: yellow"><b>About</b></span><span style="color: white;"> Us </span></h1>
</legend>
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="icon">
					<i class="fa fa-houzz"></i>
				</div>
					<h3>Our Products</h3>
					<p>Fresh produce is in demand. 100% of households purchase fresh produce. Eating vegetables provides tremendous health benefits. People who make vegetables and fruits as part of their overall healthy diet are likely to have a reduced risk of some chronic diseases.</p>

					
				</div>

				<div class="col-md-4 text-center">
				<div class="icon">
					<i class="	fa fa-rebel"></i>
				</div>
					<h3>Our Socials</h3>
					<p>Development of out-grower model to provide an opportunity for Bangladeshi farmers to grow export-oriented vegetables to increase export earnings. </p>

					
				</div>

				<div class="col-md-4 text-center">
				<div class="icon">
					<i class="fa fa-tencent-weibo"></i>
				</div>
					<h3>Our Mission</h3>
					<p>To promote innovations in sustainable agriculture and rural enterprises through capacity development and South-South exchange of quality farmer-to-farmer training videos in local languages.</p>

					
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