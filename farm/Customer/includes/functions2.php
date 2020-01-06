<?php
$db=mysqli_connect("localhost","root","","farm");


function getRealUserIp(){
    switch(true){
      case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
      case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
      case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
      default : return $_SERVER['REMOTE_ADDR'];
    }
 }
/// IP address code Ends /////

/// add_cart function Starts /////

function add_cart(){
global $db;



	


if(isset($_GET['add_cart'])){


$ip_add = getRealUserIp();

$F_id = $_GET['add_cart'];

$F_qty = $_POST['Quantity'];




$get_food="Select * from food where Fid='$F_id'";
$run_food= mysqli_query($db,$get_food);
$row= mysqli_fetch_assoc($run_food);
$F_Quantity=$row['Quantity'];
$product_title=$row['Fname'];


if(!isset($_SESSION['login_user'])){
						
 		echo "<script>alert('Please,login first ')</script>";
 		echo "<script>window.open('food_details.php?Fid=$F_id','_self')</script>";

 		
	}
else{

$check_product = "select * from cart where Cus_id='$_SESSION[login_id]' AND Fid='$F_id'";

$run_check = mysqli_query($db,$check_product);


if(mysqli_num_rows($run_check)>0){

echo "<script>alert('This Product is already added in cart')</script>";

echo "<script>window.open('food_details.php?Fid=$F_id','_self')</script>";

}
else {
	if($F_qty > $F_Quantity){
		echo "<script>alert('Sorry,Not enough quantity in the warehouse.please order $F_Quantity KG or  less ')</script>";

		echo "<script>window.open('food_details.php?Fid=$F_id','_self')</script>";	
	}
	else{
	$query = "insert into cart (Fid,ip_add,qty,Cus_id) values ('$F_id','$ip_add','$F_qty','$_SESSION[login_id]')";


$run_query = mysqli_query($db,$query);


echo "<script>window.open('food_details.php?Fid=$F_id','_self')</script>";

}

}

}

}

}


/// add_cart function Ends /////


// items function Starts ///

function items(){

global $db;

$ip_add = getRealUserIp();

$get_items = "select * from cart where Cus_id='$_SESSION[login_id]'";

$run_items = mysqli_query($db,$get_items);

$count_items = mysqli_num_rows($run_items);

echo $count_items;

}

////

// total_price function Starts //

function total_price(){

global $db;

$ip_add = getRealUserIp();

$total = 0;

$select_cart = "select * from cart where Cus_id='$_SESSION[login_id]'";

$run_cart = mysqli_query($db,$select_cart);

while($record=mysqli_fetch_array($run_cart)){

$F_id = $record['Fid'];

$F_qty = $record['qty'];

$get_price = "select * from Food where Fid='$F_id'";

$run_price = mysqli_query($db,$get_price);

while($row_price=mysqli_fetch_array($run_price)){


$sub_total = $row_price['SRate']*$F_qty;

$total += $sub_total;



}





}

echo "BDT " . $total;



}

//////////


function getVeg(){
	global $db;
	$get_Veg="select * from `food` where Type='Vegetable'";
	$run_Veg=mysqli_query($db,$get_Veg);
	while($row_Veg=mysqli_fetch_array($run_Veg)){
		$Fid=$row_Veg['Fid'];
		$Fname=$row_Veg['Fname'];
		$SRate=$row_Veg['SRate'];
		$Fimage=$row_Veg['Fimage'];

		
		echo "<div class='col-md-4 col-sm-6'>
				<div class='product'>
				<a href='food_details.php?Fid=$Fid'>
							<img class= 'img-responsive' src= ' $Fimage ' >
						</a>
						<div class='text'>
							<h3>
								<a href='food_details.php?Fid=$Fid'>$Fname</a>
							</h3>
							<p class='price'>$SRate BDT</p>
							<p class='buttons'>
								<a href='food_details.php?Fid=$Fid' class='btn btn-default'>View Details</a>

								


								<a href='food_details.php?Fid=$Fid' id='cart_add' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add to cart</a>
							</p>
						</div>


					</div>
				</div>

		";

	}
}


?>
<?php

function getFruit(){
	global $db;
	$get_Fruit="select * from `food` where Type='Fruit'";
	$run_Fruit=mysqli_query($db,$get_Fruit);
	while($row_Fruit=mysqli_fetch_array($run_Fruit)){
		$Fid=$row_Fruit['Fid'];
		$Fname=$row_Fruit['Fname'];
		$SRate=$row_Fruit['SRate'];
		$Fimage=$row_Fruit['Fimage'];

		echo "<div class='col-md-4 col-sm-6'>
				<div class='product'>
				<a href='food_details.php?Fid=$Fid'>
							<img class= 'img-responsive' src= ' $Fimage ' >
						</a>
						<div class='text'>
							<h3>
								<a href='food_details.php?Fid=$Fid'>$Fname</a>
							</h3>
							<p class='price'>$SRate BDT</p>
							<p class='buttons'>
								<a href='food_details.php?Fid=$Fid' class='btn btn-default'>View Details</a>
								<a href='food_details.php?Fid=$Fid' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add to cart</a>
							</p>
						</div>


					</div>
				</div>

		";

	}
}

?>
<?php

function getCrop(){
	global $db;
	$get_Crops="select * from `food` where Type='Crops'";
	$run_Crops=mysqli_query($db,$get_Crops);
	while($row_Crops=mysqli_fetch_array($run_Crops)){
		$Fid=$row_Crops['Fid'];
		$Fname=$row_Crops['Fname'];
		$SRate=$row_Crops['SRate'];
		$Fimage=$row_Crops['Fimage'];

		echo "<div class='col-md-4 col-sm-6'>
				<div class='product'>
				<a href='food_details.php?Fid=$Fid'>
							<img class= 'img-responsive' src= ' $Fimage ' >
						</a>
						<div class='text'>
							<h3>
								<a href='food_details.php?Fid=$Fid'>$Fname</a>
							</h3>
							<p class='price'>$SRate BDT</p>
							<p class='buttons'>
								<a href='food_details.php?Fid=$Fid' class='btn btn-default'>View Details</a>
								<a href='food_details.php?Fid=$Fid' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add to cart</a>
							</p>
						</div>


					</div>
				</div>

		";

	}
}

?>