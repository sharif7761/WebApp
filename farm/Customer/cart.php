<?php
session_start();
include "includes/connection.php";
?>
<!DOCTYPE html>
<html>

<head>
<title> </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="styles/style.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">
.box{
	background: #fff;
	width: 100%;
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

<?php
	include "includes/customer_header.php";
	?>


<div class="col-md-12" id="cart" ><!-- col-md-9 Starts -->

<div class="box" ><!-- box Starts -->

<form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->

<h1> Shopping Cart </h1>

<?php

$ip_add = getRealUserIp();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($db,$select_cart);

$count = mysqli_num_rows($run_cart);

?>

<p class="text-muted" > You currently have <?php echo $count; ?> item(s) in your cart. </p>

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table" ><!-- table Starts -->

<thead><!-- thead Starts -->

<tr>

<th colspan="2" >Product</th>

<th>Quantity</th>

<th>Unit Price</th>


<th colspan="1">Delete</th>

<th colspan="2"> Sub Total </th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$total = 0;

while($row_cart = mysqli_fetch_array($run_cart)){

$F_id = $row_cart['Fid'];


$F_qty = $row_cart['qty'];

$get_products = "select * from food where Fid='$F_id'";

$run_products = mysqli_query($db,$get_products);

while($row_products = mysqli_fetch_array($run_products)){

$product_title = $row_products['Fname'];

$product_img1 = $row_products['Fimage'];

$only_price = $row_products['SRate'];

$sub_total = $row_products['SRate']*$F_qty;

$total += $sub_total;

?>

<tr><!-- tr Starts -->

<td colspan="1">

<img  src="../img/<?php echo $product_img1; ?>" style="height: 70px;width: 70px;">

</td>

<td>

<a href="#" > <?php echo $product_title; ?> </a>

</td>

<td>
<?php echo $F_qty; ?>
</td>

<td>

BDT<?php echo $only_price; ?>.00

</td>



<td>
<input type="checkbox" name="remove[]" value="<?php echo $F_id; ?>" >
</td>

<td>

BDT<?php echo $sub_total; ?>.00

</td>

</tr><!-- tr Ends -->

<?php } } ?>

</tbody><!-- tbody Ends -->

<tfoot><!-- tfoot Starts -->

<tr>

<th colspan="5"> Total </th>

<th colspan="2"> BDT<?php echo $total; ?>.00 </th>

</tr>

</tfoot><!-- tfoot Ends -->

</table><!-- table Ends -->


</div><!-- table-responsive Ends -->


<div class="box-footer"><!-- box-footer Starts -->

<div class="pull-left"><!-- pull-left Starts -->

<a href="shop.php" class="btn btn-default">

<i class="fa fa-chevron-left"></i> Continue Shopping

</a>

</div><!-- pull-left Ends -->

<div class="pull-right"><!-- pull-right Starts -->

<button class="btn btn-default" type="submit" name="update" value="Update Cart">


<i class="fa fa-refresh"></i> Update Cart

</button>
<form method="post">
<button  class="btn btn-primary" type="submit" name="checkout">

Proceed to checkout <i class="fa fa-chevron-right"></i>

</button>
</form>





<?php
if(isset($_POST["checkout"])){
	

echo "<script>window.open('checkout2.php','_self')</script>";
}


 ?>



</div><!-- pull-right Ends -->

</div><!-- box-footer Ends -->

</form><!-- form Ends -->


</div><!-- box Ends -->



<?php

function update_cart(){

global $db;

if(isset($_POST['update'])){

foreach($_POST['remove'] as $remove_id){


$delete_product = "delete from cart where Fid='$remove_id'";

$run_delete = mysqli_query($db,$delete_product);

if($run_delete){
echo "<script>window.open('cart.php','_self')</script>";
}



}




}



}

echo @$up_cart = update_cart();



?>


<div class="col-md-12"><!-- col-md-3 Starts -->

<div class="box" id="order-summary"><!-- box Starts -->

<div class="box-header"><!-- box-header Starts -->

<h3>Order Summary</h3>

</div><!-- box-header Ends -->

<p class="text-muted">
Shipping and additional costs are calculated based on the values you have entered.
</p>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table"><!-- table Starts -->

<tbody><!-- tbody Starts -->

<tr>

<td> Order Subtotal </td>

<th> BDT <?php echo $total; ?>.00 </th>

</tr>

<tr>

<td> Shipping and handling </td>

<th>BD T0.00</th>

</tr>

<tr>

<td>Tax</td>

<th>BDT 0.00</th>

</tr>

<tr class="total">

<td>Total</td>

<th>BDT<?php echo $total; ?>.00</th>

</tr>

</tbody><!-- tbody Ends -->

</table><!-- table Ends -->

</div><!-- table-responsive Ends -->

</div><!-- box Ends -->

</div><!-- col-md-3 Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->

<?php
	include "includes/Login_pop.php";
	?>


<footer>
	<?php
	include "includes/shop_footer.php";
	?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>