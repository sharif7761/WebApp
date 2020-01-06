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

<?php
	include "includes/customer_header.php";
	?>



<!-- slider starts -->
<div class="container" id="animation">
	<div class="col-md-12">
		
			<p>AGRO FARM</p>

</div>
	
</div>

<?php
	include "includes/Login_pop.php";
	?>


<div class="container" id="whywe">
	<div class="col-md-12">
	<legend>
<h1><span style="color: yellow"><b>Why</b></span><span> We?</span></h1>
</legend>
		<div class="row">
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-apple"></i>
				</div>
					<h3>Fresh Fruits</h3>
					<p>Agro Farms plan to increase the production of fresh fruits for export into existing markets and penetrate new markets in the near future</p>

					
				</div>

				<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-eercast"></i>
				</div>
					<h3>Quality Products</h3>
					<p>Fruits and vegetables are expected to continue to grow in niche areas as consumers look for novel flavors from around the world. Increases in disposable personal income will support purchases of premium fruits and vegetables</p>

					
				</div>

				<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-envira"></i>
				</div>
					<h3>Supports Farmers Livelihood</h3>
					<p>Source of livelihood for 3,000 farmers within the rural areas in 5 administrative regions of Ghana – Central, Greater Accra, Eastern, Volta and Ashanti</p>

					
				</div>

				<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-pagelines"></i>
				</div>
					<h3>Fresh Vegetables</h3>

					<p>Vegetables provide nutrients vital for health and maintenance of your body. Most vegetables are naturally low in fat and calories. None have cholesterol. </p>

					
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