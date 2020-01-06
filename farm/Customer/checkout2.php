

<?php
session_start();
include "includes/connection.php";

include "includes/customer_header.php";


?>

<?php

  $get_user="select * from customer where email='$_SESSION[login_email]';";
  $run_user= mysqli_query($db,$get_user);
  $row= mysqli_fetch_assoc($run_user);
  $Cus_id=$row['Cus_id'];
  $Cus_name=$row['name'];
  $Cus_email=$row['email'];
  $Cus_phone=$row['phone'];
  $Cus_address=$row['address'];

?>

<?php

$ip_add = getRealUserIp();

$select_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($db,$select_cart);

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

}

}

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="">


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="Style.css">
<style type="text/css">
  
  #Checkout {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}
#Checkout h2{
text-align:left;
}

#Checkout * {
  box-sizing: border-box;
}

#Checkout .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -10px;
}

#Checkout .col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

#Checkout .col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

#Checkout .col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

#Checkout .col-25,
#Checkout .col-50,
#Checkout .col-75 {
  padding: 0 16px;
}

#Checkout .container {
  background-color: #cfcccc85;
  padding: 3px 18px 13px 18px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

#Checkout input[type=text] {
 width: 60%; 
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

#Checkout label {
  margin-bottom: 10px;
  display: block;
}

#Checkout .icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

#Checkout .btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

#Checkout .btn:hover {
  background-color: #45a049;
}

#Checkout a {
  color: #2196F3;
}

#Checkout hr {
  border: 1px solid lightgrey;
}

#Checkout span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
#Checkout  .row {
    flex-direction: column-reverse;
  }
  #Checkout .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<script type="text/javascript">
  $(function() {
    $("#addchk").change(function(){
      var st =this.checked;
      if(st){
        $("#addtxt").prop("readonly",false);
      }
      else{

        $("#addtxt").prop("readonly",true);
      }
      
    });
  });
</script>




  

  



<div id="Checkout">
<h2>Checkout Form</h2>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-md-8">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $Cus_name; ?>" readonly>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" style="width: 60%;" value="<?php echo $Cus_email; ?>" readonly>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address <h5 style="display: inline-block; color: grey;"> Change Address &nbsp &nbsp</h5><input type="checkbox" name="" id="addchk"></label>
            <input type="text"  name="address" id="addtxt" value="<?php echo $Cus_address; ?>" readonly>
            <label for="city"><i class="fa fa-phone"></i> Phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo $Cus_phone; ?>" readonly>



            
          <div class="col-50">
            <h3>Payment</h3>
            
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Confirm checkout" class="btn" name="con_checkout">
      </form>
    
  </div>
  <div class="col-md-4">
    
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php items(); ?></b></span></h4>



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

<th >Product</th>

<th>Quantity</th>

<th>Unit Price</th>



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


<td>

<a href="#" > <?php echo $product_title; ?> </a>

</td>

<td style="text-align: center;">
<?php echo $F_qty; ?>
</td>

<td>

BDT<?php echo $only_price; ?>.00

</td>



<td>

BDT<?php echo $sub_total; ?>.00

</td>

</tr><!-- tr Ends -->

<?php } } ?>

</tbody><!-- tbody Ends -->

<tfoot><!-- tfoot Starts -->

<tr>

<th colspan="3"> Total </th>

<th colspan="2"> BDT<?php echo $total; ?>.00 </th>

</tr>

</tfoot><!-- tfoot Ends -->

</table><!-- table Ends -->


</div><!-- table-responsive Ends -->

    </div>
  </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>




<?php
if(isset($_POST["con_checkout"])){

$con_cart=mysqli_query($db,"select * from cart where Cus_id='$_SESSION[login_id]'");
while($row_cart = mysqli_fetch_array($con_cart)){
  mysqli_query($db,"INSERT INTO `orders`(`Cus_id`, `name`, `email`, `phone`, `address`, `Fid`, `Fname`, `Quantity`, `Total_price`, `Status`) VALUES ('$_SESSION[login_id]',(select name from customer where Cus_id='$row_cart[Cus_id]'),(select email from customer where Cus_id='$row_cart[Cus_id]'),(select phone from customer where Cus_id='$row_cart[Cus_id]'),'$_POST[address]','$row_cart[Fid]',(select Fname from food where Fid='$row_cart[Fid]'),'$row_cart[qty]',((select SRate from food where Fid='$row_cart[Fid]')*'$row_cart[qty]'),'Pending');");
   
mysqli_query($db,"UPDATE `food` SET `Quantity`=(Quantity-'$row_cart[qty]') WHERE Fid='$row_cart[Fid]'");


mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=(Quantity-'$row_cart[qty]') WHERE FoodName=(select Fname from food where Fid='$row_cart[Fid]')");




  }


mysqli_query($db,"DELETE FROM `cart` WHERE `Cus_id`='$_SESSION[login_id]';");







?>
<script type="text/javascript"> alert("Thank you for ordering! Admin will notify you soon");</script>


<?php
echo "<script>window.open('checkout2.php','_self')</script>";


}

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