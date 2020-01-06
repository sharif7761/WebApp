<?php
session_start();
?>

<?php
include "includes/connection.php";
include "fruitfetch.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Fruits</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style type="text/css">
	
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
<?php
	include "includes/customer_header.php";
?>




<div id="content">
	<div class="container">
		<div class="col-md-12"> <!-- top home|shop nav start -->
			<ul class="breadcrumb">
				<li><a href="home.php">Shop</a></li>
				<li>Fruit</li>
				
			</ul>
			
		</div> <!-- top home|shop nav End -->
			
		<div class="col-md-3"> <!-- Side nav start -->
	<div class="box">
				<h1>Fruit Shop</h1>
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
   url:"fruitfetch.php",
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

<?php
	include "Login_pop.php";
	
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