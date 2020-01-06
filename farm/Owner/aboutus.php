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
<?php include "includes/owner_header.php"?>






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