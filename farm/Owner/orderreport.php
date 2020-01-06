<?php

include "includes/connection.php";
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<style type="text/css">
	.scroll
	{
		
		width:100%;
		height:300px; 
		overflow: scroll;
	}

.table	img{
		width: 45px; 
                height: 45px; 
                object-fit: contain;"
	}



	
		/* popup style */
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
	height: 450px;
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


		/* edit popup style */
.bg-modal2{
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

.modal-content2{
	width: 500px;
	height: 470px;
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

.close2{
	position: absolute;
	top 0;
	right: 14px;
	font-size: 42px;
	transform: rotate(45deg);
	cursor: pointer;
}




</style>
</head>
<body>
	<?php $z=0;?>

<?php
include "includes/owner_header.php";
?>



<!-- 3rd head ends-->

</div>


		<div class="col-md-12" id="cart">
			<div class="box">
				<form action="" method="post" enctype="multipart-form-data">
					<legend><h1>Order Report</h1></legend>
					<div>
					
					<span class="pull-right">
							<input type="text" name="search" placeholder="Search by food Name">
							<button class="btn btn-default" type="submit" name="submit" value="submit" style="background-color: blue;color: white;">
								<i class="fa fa-search"> Search</i>
							</button>


					</span>	

				</div>

				<br>
				<br>
				<br>

					<div class="table-responsive">
						<div class="scroll">
						<table class="table">
							
<?php
if(isset($_POST['submit']))
{
		$q=mysqli_query($db,"select * from orders where Fname like '%$_POST[search]%' order by `Status`");
		if(mysqli_num_rows($q)==0)
		{
			?>
			<script type="text/javascript">
				alert("No Order Found");
			</script>
			<?php
			
			$result=mysqli_query($db,"select * from `orders` order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
	
		echo "</td>";	
		
	echo "</tr>";

}

echo "</table>";

		}

		else
		{
				echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>";

while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		
		echo "</td>";	
		
	echo "</tr>";

}

echo "</table>";

		}
}


elseif (isset($_POST['update_order']))

{
	$result=mysqli_query($db,"SELECT * FROM orders WHERE `Order_id`=$_POST[Order_id]");
	$row=mysqli_fetch_assoc($result);
	if ($row['Status']!='Approved')
	{
		if ("$_POST[Status]"=='Approved')
	{
		mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES (CONCAT('$_POST[Fname]',' Sold'),'credit','$_POST[Total_price]','Order Approved',CURDATE());");
	}
	

	mysqli_query($db,"UPDATE `orders` SET `Status`='$_POST[Status]' WHERE Order_id=$_POST[Order_id];");

	?>
<script type="text/javascript">
alert("Order Updated");	
</script>
<?php
$result=mysqli_query($db,"select * from `orders` order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";

		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		
		echo "</td>";						
	echo "</tr>";

}

echo "</table>";
	}
	else 
	{
		?>
<script type="text/javascript">
alert("Already Approved");	
</script>
<?php
$result=mysqli_query($db,"select * from `orders` order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";

		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		
		echo "</td>";						
	echo "</tr>";

}

echo "</table>";
	}
	
	

}	

elseif (isset($_POST['delete_order']))

{
mysqli_query($db,"DELETE FROM `orders`  WHERE `Order_id`=$_POST[Order_id];");


?>
<script type="text/javascript">
alert("Food Deleted");	
</script>
<?php
$result=mysqli_query($db,"select * from `orders` order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		
		echo "</td>";						
	echo "</tr>";

}

echo "</table>";
}	


//if search button is not pressed
else //if search button is not pressed
{
	$result=mysqli_query($db,"select * from `orders` order by `Status`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";

	//table header
	echo "<th>";  echo "Order ID";  echo "</th>";
	echo "<th>";  echo "Customer ID";  echo "</th>";
	echo "<th>";  echo "Email";  echo "</th>";
	echo "<th>";  echo "Phone";  echo "</th>";
	echo "<th>";  echo "Address";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Total";  echo "</th>";
	echo "<th>";  echo "Status";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Order_id'];  echo "</td>";
		echo "<td>";  echo $row['Cus_id'];  echo "</td>";
		echo "<td>";  echo $row['email'];  echo "</td>";
		echo "<td>";  echo $row['phone'];  echo "</td>";
		echo "<td>";  echo $row['address'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Total_price'];  echo "</td>";
		echo "<td>";  echo $row['Status'];  echo "</td>";
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";

}
?>

</div>
</table>

					


				</form>
				
			</div>   <!-- box ends  -->
</div>


<footer>
	<?php
	include "shop_footer.php";
	?>
</footer>



		<!-- poopup edit item  -->

<div class="bg-modal2" id="editmodal">
			<div class="modal-content2">
				<div class="close2">
					+
				</div>


				<form action="" id="popup" method="POST">
					
					<input type="text" name="Order_id" id="Order_id" placeholder="Order_id" readonly>
					<input type="text" name="Cus_id" id="Cus_id" placeholder="Cus_id" readonly>
					<input type="text" name="email" id="email" placeholder="email" readonly>
					<input type="text" name="phone" id="phone" placeholder="phone" readonly>
					<input type="text" name="address" id="address" placeholder="address" readonly>
					<input type="text" name="Fname" id="Fname" placeholder="Fname" readonly>
					<input type="text" name="Quantity" id="Quantity" placeholder="Quantity" readonly>
					<input type="text" name="Total_price" id="Total_price" placeholder="Total_price" readonly>
					<select name="Status" id="Status" style="width: 50%;">
 					<option disabled hidden >Select Status</option>
  					<option  hidden value="Pending">Pending</option>
  					<option value="Approved">Approved</option>
					</select><br><br>
					
		<button class="btn btn-default" type="submit" name="update_order" class="fa fa-chevron-right" style="background-color: green; color: white;">Update Order</button>
		<button class="btn btn-default" type="submit" name="delete_order" class="fa fa-trash" style="background-color: red;color: white;">Delete Order</button>
				</form>
				

			</div>
		</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">

$(document).ready(function(){
	$('.edition').on('click',function(){
		
document.querySelector('.bg-modal2').style.display='flex';

$tr=$(this).closest('tr');
var data = $tr.children("td").map(function(){
return $(this).text();
}).get();

console.log(data);
$('#Order_id').val(data[0]);
$('#Cus_id').val(data[1]);
$('#email').val(data[2]);
$('#phone').val(data[3]);
$('#address').val(data[4]);
$('#Fname').val(data[5]);
$('#Quantity').val(data[6]);
$('#Total_price').val(data[7]);
$('#Status').val(data[8]);


		});
	
	});



	 
	

	document.querySelector('.close2').addEventListener('click',function(){
		document.querySelector('.bg-modal2').style.display='none';
		
	});
</script>



<?php

?>






<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>