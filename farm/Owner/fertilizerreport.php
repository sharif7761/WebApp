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
	height: 300px;
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


<?php
include "includes/owner_header.php";
?>




<!-- 3rd head ends-->

</div>


		<div class="col-md-12" id="cart">
			<div class="box">
				<form action="" method="post" enctype="multipart-form-data">
					<legend><h1>Fertilizer Report</h1></legend>
					<div>
					
					<span class="pull-right">
							<input type="text" name="search" placeholder="Search by fertilizer Name">
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
		$q=mysqli_query($db,"select * from fertilizer where FrName like '%$_POST[search]%'");
		if(mysqli_num_rows($q)==0)
		{
			?>
			<script type="text/javascript">
				alert("No Food Found");
			</script>
			<?php
			
			$result=mysqli_query($db,"select * from `fertilizer`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Fertilizer ID";  echo "</th>";
	echo "<th>";  echo "Fertilizer Name";  echo "</th>";
	echo "<th>";  echo "Rate";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	
	echo "</tr>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Frid'];  echo "</td>";
		echo "<td>";  echo $row['FrName'];  echo "</td>";
		echo "<td>";  echo $row['Rate'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		
		
		
	echo "</tr>";

}

echo "</table>";

		}

		else
		{
				echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Fertilizer ID";  echo "</th>";
	echo "<th>";  echo "Fertilizer Name";  echo "</th>";
	echo "<th>";  echo "Rate";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	
echo "</tr>";

while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
		echo "<td>";  echo $row['Frid'];  echo "</td>";
		echo "<td>";  echo $row['FrName'];  echo "</td>";
		
		echo "<td>";  echo $row['Rate'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		
	echo "</tr>";

}

echo "</table>";

		}
}

elseif(isset($_POST['add_fertilizer']))  
{
mysqli_query($db,"INSERT INTO `fertilizer`(`FrName`, `Rate`, `Quantity`) VALUES ('$_POST[fertilizer_name]','$_POST[Rate]','$_POST[Quantity]');");

mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES (CONCAT('$_POST[fertilizer_name]',' Expense'),'debit','$_POST[Rate]'*'$_POST[Quantity]','Fertilizer Expense',CURDATE());");

?>
<script type="text/javascript">
alert("Fertilizer Added");	
</script>
<?php
$result=mysqli_query($db,"select * from `fertilizer`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Fertilizer ID";  echo "</th>";
	echo "<th>";  echo "Fertilizer Name";  echo "</th>";
	echo "<th>";  echo "Rate";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Frid'];  echo "</td>";
		echo "<td>";  echo $row['FrName'];  echo "</td>";
		echo "<td>";  echo $row['Rate'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";
}	




	


elseif (isset($_POST['update_fertilizer']))

{
mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES (CONCAT('$_POST[fertilizer_name]',' Expense'),'debit',('$_POST[Quantity]'- (SELECT Quantity FROM fertilizer WHERE `Frid`=$_POST[Frid]))*'$_POST[Rate]','Fertilizer Expense',CURDATE());");

mysqli_query($db,"UPDATE `fertilizer` SET `FrName`='$_POST[fertilizer_name]',`Rate`='$_POST[Rate]',`Quantity`='$_POST[Quantity]' WHERE `Frid`=$_POST[Frid];");


?>
<script type="text/javascript">
alert("Fertilizer Updated");	
</script>
<?php
$result=mysqli_query($db,"select * from `fertilizer`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Fertilizer ID";  echo "</th>";
	echo "<th>";  echo "Fertilizer Name";  echo "</th>";
	echo "<th>";  echo "Rate";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";

	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Frid'];  echo "</td>";
		echo "<td>";  echo $row['FrName'];  echo "</td>";
		echo "<td>";  echo $row['Rate'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";
}	

elseif (isset($_POST['delete_fertilizer']))

{
mysqli_query($db,"DELETE FROM `fertilizer`  WHERE `Frid`=$_POST[Frid];");


?>
<script type="text/javascript">
alert("Fertilizer Deleted");	
</script>
<?php
$result=mysqli_query($db,"select * from `fertilizer`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Fertilizer ID";  echo "</th>";
	echo "<th>";  echo "Fertilizer Name";  echo "</th>";
	echo "<th>";  echo "Rate";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Frid'];  echo "</td>";
		echo "<td>";  echo $row['FrName'];  echo "</td>";
		echo "<td>";  echo $row['Rate'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		
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
	$result=mysqli_query($db,"select * from `fertilizer`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Fertilizer ID";  echo "</th>";
	echo "<th>";  echo "Fertilizer Name";  echo "</th>";
	echo "<th>";  echo "Rate";  echo "</th>";
	echo "<th>";  echo "Quantity";  echo "</th>";
	
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['Frid'];  echo "</td>";
		echo "<td>";  echo $row['FrName'];  echo "</td>";
		echo "<td>";  echo $row['Rate'];  echo "</td>";
		echo "<td>";  echo $row['Quantity'];  echo "</td>";
		
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


<!-- poopup add item  -->

<div class="bg-modal">
			<div class="modal-content">
				<div class="close">
					+
				</div>


				<form action="" id="popup" method="POST">
					<input type="text" name="fertilizer_name" placeholder="Fertilizer Name">
					<input type="text" name="Rate" placeholder="Rate">
					<input type="text" name="Quantity" placeholder="Quantity">
					
					
					<button class="btn btn-default fa fa-plus" type="submit" name="add_fertilizer" style="background-color:slateblue; color: white;">Add Fertilizer</button>
				</form>

			</div>
		</div>
		<!-- poopup edit item  -->

<div class="bg-modal2" id="editmodal">
			<div class="modal-content2">
				<div class="close2">
					+
				</div>


				<form action="" id="popup" method="post">
					<input type="text" name="Frid" id="Frid" placeholder="Frid" readonly>
					<input type="text" name="fertilizer_name" id="FrName" placeholder="FrName">
					<input type="text" name="Rate" id="Rate" placeholder="Rate">
					<input type="text" name="Quantity" id="Quantity" placeholder="Quantity">
					
					
					
		<button class="btn btn-default" type="submit" name="update_fertilizer" class="fa fa-chevron-right" style="background-color: green; color: white;">Update Fertilizer</button>
		<button class="btn btn-default" type="submit" name="delete_fertilizer" class="fa fa-trash" style="background-color: red;color: white;">Delete Food</button>
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
$('#Frid').val(data[0]);
$('#FrName').val(data[1]);
$('#Rate').val(data[2]);
$('#Quantity').val(data[3]);


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




<footer>
	<?php
	include "shop_footer.php";
	?>
</footer>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>



