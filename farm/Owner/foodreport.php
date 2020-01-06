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
					<legend><h1>Food Report</h1></legend>
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
		$q=mysqli_query($db,"select * from food where Fname like '%$_POST[search]%'");
		if(mysqli_num_rows($q)==0)
		{
			?>
			<script type="text/javascript">
				alert("No Food Found");
			</script>
			<?php
			
			$result=mysqli_query($db,"select * from `food`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Food ID";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Type";  echo "</th>";
	echo "<th>";  echo "Production Rate";  echo "</th>";
	echo "<th>";  echo "Selling Rate";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Fid'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Type'];  echo "</td>";
		echo "<td>";  echo $row['PRate'];  echo "</td>";
		echo "<td>";  echo $row['SRate'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
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
	echo "<th>";  echo "Food ID";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Type";  echo "</th>";
	echo "<th>";  echo "Production Rate";  echo "</th>";
	echo "<th>";  echo "Selling Rate";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	
echo "</tr>";

while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
		echo "<td>";  echo $row['Fid'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Type'];  echo "</td>";
		echo "<td>";  echo $row['PRate'];  echo "</td>";
		echo "<td>";  echo $row['SRate'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
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

elseif(isset($_POST['add_food']))  
{
	if( isset($_FILES['file']))
	{
		$product_image = $_FILES['file'] ['name'];
	$product_image_tmp = $_FILES['file'] ['tmp_name'];

	move_uploaded_file($product_image_tmp, "../img/$product_image");

			}
	if( isset($_FILES['file1']))
	{
		$product_image1 = $_FILES['file1'] ['name'];
	$product_image_tmp1 = $_FILES['file1'] ['tmp_name'];

	move_uploaded_file($product_image_tmp1, "../img/$product_image1");
		
	}
	if( isset($_FILES['file2']))
	{
		$product_image2 = $_FILES['file2'] ['name'];
	$product_image_tmp2 = $_FILES['file2'] ['tmp_name'];

	move_uploaded_file($product_image_tmp2, "../img/$product_image2");

		}
	



mysqli_query($db,"INSERT INTO `food`(`Fname`, `Quantity`, `Type`, `PRate`, `SRate`, `Fimage`, `Description`, `Fimage2`, `Fimage1`) VALUES ('$_POST[food_name]','$_POST[quantity]','$_POST[type]','$_POST[PRate]','$_POST[SRate]','$product_image','$_POST[Description]','$product_image2','$product_image1');");


mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES (CONCAT('$_POST[food_name]',' Production'),'debit','$_POST[PRate]'*'$_POST[quantity]','Production Expense',CURDATE());");

mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=Quantity+'$_POST[quantity]' WHERE `FoodName`='$_POST[food_name]';");

echo "<script>window.open('foodreport.php','_self')</script>";

?>
<script type="text/javascript">
alert("Food Added");	
</script>
<?php
$result=mysqli_query($db,"select * from `food`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Food ID";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Type";  echo "</th>";
	echo "<th>";  echo "Production Rate";  echo "</th>";
	echo "<th>";  echo "Selling Rate";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Fid'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Type'];  echo "</td>";
		echo "<td>";  echo $row['PRate'];  echo "</td>";
		echo "<td>";  echo $row['SRate'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";
}	




	


elseif (isset($_POST['update_food']))

{
	$result=mysqli_query($db,"SELECT * FROM food WHERE `Fid`=$_POST[Fid]");
	$row=mysqli_fetch_assoc($result);

	

	if($row['Quantity']< "$_POST[quantity]")
	{
		mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES (CONCAT('$_POST[food_name]',' Production'),'debit',('$_POST[quantity]'- (SELECT Quantity FROM food WHERE `Fid`=$_POST[Fid]))*'$_POST[PRate]','Production Adjusting',CURDATE());");
		mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=Quantity+('$_POST[quantity]'- (SELECT Quantity FROM food WHERE `Fid`=$_POST[Fid])) WHERE `FoodName`='$_POST[food_name]';");
	}
	if($row['Quantity']> "$_POST[quantity]")
	{
		mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES (CONCAT('$_POST[food_name]',' Production'),'credit',((SELECT Quantity FROM food WHERE `Fid`=$_POST[Fid])-'$_POST[quantity]')*'$_POST[PRate]','Production Adjusting',CURDATE());");
		mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=Quantity-((SELECT Quantity FROM food WHERE `Fid`=$_POST[Fid])-'$_POST[quantity]') WHERE `FoodName`='$_POST[food_name]';");
	}


mysqli_query($db,"UPDATE `food` SET `Fname`='$_POST[food_name]',`Quantity`='$_POST[quantity]',`Type`='$_POST[type]',`PRate`='$_POST[PRate]',`SRate`='$_POST[SRate]',`Description`='$_POST[Description]' WHERE `Fid`=$_POST[Fid];");
	
	if( isset($_FILES['file']))
	{
		$product_image = $_FILES['file'] ['name'];
	$product_image_tmp = $_FILES['file'] ['tmp_name'];

	move_uploaded_file($product_image_tmp, "../img/$product_image");

		mysqli_query($db,"UPDATE `food` SET `Fimage`='$product_image' WHERE `Fid`=$_POST[Fid];");
	}
	if( isset($_FILES['file1']))
	{
		$product_image1 = $_FILES['file1'] ['name'];
	$product_image_tmp1 = $_FILES['file1'] ['tmp_name'];

	move_uploaded_file($product_image_tmp1, "../img/$product_image1");

		mysqli_query($db,"UPDATE `food` SET `Fimage1`='$product_image1' WHERE `Fid`=$_POST[Fid];");
	}
	if( isset($_FILES['file2']))
	{
		$product_image2 = $_FILES['file2'] ['name'];
	$product_image_tmp2 = $_FILES['file2'] ['tmp_name'];

	move_uploaded_file($product_image_tmp2, "../img/$product_image2");

		mysqli_query($db,"UPDATE `food` SET `Fimage2`='$product_image2' WHERE `Fid`=$_POST[Fid];");
	}

?>
<script type="text/javascript">
alert("Food Updated");	
</script>
<?php
$result=mysqli_query($db,"select * from `food`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Food ID";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Type";  echo "</th>";
	echo "<th>";  echo "Production Rate";  echo "</th>";
	echo "<th>";  echo "Selling Rate";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Fid'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Type'];  echo "</td>";
		echo "<td>";  echo $row['PRate'];  echo "</td>";
		echo "<td>";  echo $row['SRate'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		echo "</td>";						
	echo "</tr>";

}

echo "</table>";
}	

elseif (isset($_POST['delete_food']))

{
mysqli_query($db,"DELETE FROM `food`  WHERE `Fid`=$_POST[Fid];");


?>
<script type="text/javascript">
alert("Food Deleted");	
</script>
<?php
$result=mysqli_query($db,"select * from `food`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Food ID";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Type";  echo "</th>";
	echo "<th>";  echo "Production Rate";  echo "</th>";
	echo "<th>";  echo "Selling Rate";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Fid'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Type'];  echo "</td>";
		echo "<td>";  echo $row['PRate'];  echo "</td>";
		echo "<td>";  echo $row['SRate'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
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
	$result=mysqli_query($db,"select * from `food`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";

	//table header
	echo "<th>";  echo "Food ID";  echo "</th>";
	echo "<th>";  echo "Food Name";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Type";  echo "</th>";
	echo "<th>";  echo "Production Rate";  echo "</th>";
	echo "<th>";  echo "Selling Rate";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Fid'];  echo "</td>";
		echo "<td>";  echo $row['Fname'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		echo "<td>";  echo $row['Type'];  echo "</td>";
		echo "<td>";  echo $row['PRate'];  echo "</td>";
		echo "<td>";  echo $row['SRate'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
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

					<div class="box-footer">
						
						<div class="pull-right">
							
							
							<a href="#" class="btn btn-primary" id="add_item" style="background-color: red;">Add Item <i class="fa fa-plus"></i></a>	
							
						</div>

						
					</div>


				</form>
				
			</div>   <!-- box ends  -->
</div>


<footer>
	<?php
	include "shop_footer.php";
	?>
</footer>


<!-- poopup add item  -->

<div class="bg-modal">
			<div class="modal-content">
				<div class="close">
					+
				</div>


				<form action="" id="popup" method="POST" enctype="multipart/form-data">
					
					<input type="file" name="file">
					<input type="file" name="file1">
					<input type="file" name="file2">
					<input type="text" name="food_name" placeholder="Food Name">
					<input type="text" name="quantity" placeholder="Quantity">
					<select name="type" style="width: 50%;">
 					<option selected disabled hidden >Select Type</option>
  					<option value="Vegetable">Vegetable</option>
  					<option value="Fruit">Fruit</option>
 				    <option value="Crops">Crops</option>
					</select>
					<input type="text" name="PRate" placeholder="Production Rate">
					<input type="text" name="SRate" placeholder="Selling Rate">
					<input type="text" name="Description" placeholder="Description">
					
					<button class="btn btn-default fa fa-plus" type="submit" name="add_food" style="background-color:slateblue; color: white;">Add Food</button>
				</form>

			</div>
		</div>
		<!-- poopup edit item  -->

<div class="bg-modal2" id="editmodal">
			<div class="modal-content2">
				<div class="close2">
					+
				</div>


				<form action="" id="popup" method="POST" enctype="multipart/form-data">
					<input type="file" name="file" id="file">
					<input type="file" name="file1" id="file1">
					<input type="file" name="file2" id="file2">
					<input type="text" name="Fid" id="Fid" placeholder="Fid" readonly>
					<input type="text" name="food_name" id="Fname" placeholder="Fname">
					<input type="text" name="quantity" id="Quantity" placeholder="Quantity">
					<select name="type" id="Type" style="width: 50%;">
 					<option disabled hidden >Select Type</option>
  					<option value="Vegetable">Vegetable</option>
  					<option value="Fruit">Fruit</option>
 				    <option value="Crops">Crops</option>
					</select>
					<input type="text" name="PRate" id="PRate" placeholder="PRate">
					<input type="text" name="SRate" id="SRate" placeholder="SRate">
					<input type="text" name="Description" id="Description" placeholder="Description">
					
		<button class="btn btn-default" type="submit" name="update_food" class="fa fa-chevron-right" style="background-color: green; color: white;">Update Food</button>
		<button class="btn btn-default" type="submit" name="delete_food" class="fa fa-trash" style="background-color: red;color: white;">Delete Food</button>
				</form>
				

			</div>
		</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">

	document.getElementById('add_item').addEventListener('click',function(){
document.querySelector('.bg-modal').style.display='flex';
document.querySelector('.bg-modal2').style.display='none';
});


$(document).ready(function(){
	$('.edition').on('click',function(){
		
		document.querySelector('.bg-modal').style.display='none';
document.querySelector('.bg-modal2').style.display='flex';

$tr=$(this).closest('tr');
var data = $tr.children("td").map(function(){
return $(this).text();
}).get();

console.log(data);
$('#Fid').val(data[0]);
$('#Fname').val(data[1]);
$('#Quantity').val(data[2]);
$('#Type').val(data[3]);
$('#PRate').val(data[4]);
$('#SRate').val(data[5]);
$('#Description').val(data[6]);


		});
	
	});



	 
	document.querySelector('.close').addEventListener('click',function(){
		document.querySelector('.bg-modal').style.display='none';

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