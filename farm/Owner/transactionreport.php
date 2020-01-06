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
					<legend><h1>Tansaction Report</h1></legend>
					<div>
					
					<span class="pull-right">
							<input type="text" name="search" placeholder="Search by transaction Name">
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
$total_debit=0;
$total_credit=0;

if(isset($_POST['submit']))
{
		$q=mysqli_query($db,"select * from transaction where TRname like '%$_POST[search]%'");
		if(mysqli_num_rows($q)==0)
		{
			?>
			<script type="text/javascript">
				alert("No Transaction Found");
			</script>
			<?php
			
			$result=mysqli_query($db,"select * from `transaction`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Transaction ID";  echo "</th>";
	echo "<th>";  echo "Transaction Name";  echo "</th>";
	echo "<th>";  echo "Transaction Type";  echo "</th>";
	echo "<th>";  echo "Price";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Date";  echo "</th>";
	echo "</tr>";
	
	
while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['TRid'];  echo "</td>";
		echo "<td>";  echo $row['TRname'];  echo "</td>";
		echo "<td>";  echo $row['TRType'];  echo "</td>";
		echo "<td>";  echo $row['Price'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>";  echo $row['Date'];  echo "</td>";
if($row['TRType']=="debit")
		{
			$total_debit +=$row['Price'];
		}
		elseif ($row['TRType']=="credit")
		{
			$total_credit +=$row['Price'];		
		}
		

		
	echo "</tr>";

}

echo "</table>";


		}

		else
		{
				echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Transaction ID";  echo "</th>";
	echo "<th>";  echo "Transaction Name";  echo "</th>";
	echo "<th>";  echo "Transaction Type";  echo "</th>";
	echo "<th>";  echo "Price";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Date";  echo "</th>";
	echo "</tr>";
	


while($row=mysqli_fetch_assoc($q))
{
	echo "<tr>";
		echo "<td>";  echo $row['TRid'];  echo "</td>";
		echo "<td>";  echo $row['TRname'];  echo "</td>";
		echo "<td>";  echo $row['TRType'];  echo "</td>";
		echo "<td>";  echo $row['Price'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>";  echo $row['Date'];  echo "</td>";

		if($row['TRType']=="debit")
		{
			$total_debit +=$row['Price'];
		}
		elseif ($row['TRType']=="credit")
		{
			$total_credit +=$row['Price'];		
		}
	echo "</tr>";


}

echo "</table>";


		}
}

elseif(isset($_POST['add_transaction']))  
{
	if("$_POST[TRType]" == 'debit')
	{
		mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES ('$_POST[TRname]','$_POST[TRType]','$_POST[Price]','$_POST[Description]',CURDATE());");

		?>
<script type="text/javascript">
alert("Transaction Added");	
</script>
<?php
	}



	if("$_POST[TRType]" == 'credit')
	{
		$count=0;
		$result=mysqli_query($db,"SELECT * FROM `food` WHERE Fname='$_POST[TRname]';");

		$row=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		$z="$_POST[Price]"/$row['SRate'];

		if($count!=0 && $z<=$row['Quantity'])
		{
			
			mysqli_query($db,"UPDATE `food` SET `Quantity`=Quantity-('$_POST[Price]'/ SRate) WHERE Fname = '$_POST[TRname]';");

			mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=Quantity-('$_POST[Price]'/(SELECT SRate FROM food WHERE Fname = '$_POST[TRname]')) WHERE `FoodName`='$_POST[TRname]';");

			mysqli_query($db,"INSERT INTO `transaction`(`TRname`, `TRType`, `Price`, `Description`, `Date`) VALUES ('$_POST[TRname]','$_POST[TRType]','$_POST[Price]','$_POST[Description]',CURDATE());");

			?>
<script type="text/javascript">
alert("Transaction Added");	
</script>
<?php
		}
		else
		{
			?>
				<script type="text/javascript">
	alert("Quantity not Available.");
</script>
			<?php
		}
	}


$result=mysqli_query($db,"select * from `transaction`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Transaction ID";  echo "</th>";
	echo "<th>";  echo "Transaction Name";  echo "</th>";
	echo "<th>";  echo "Transaction Type";  echo "</th>";
	echo "<th>";  echo "Price";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Date";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['TRid'];  echo "</td>";
		echo "<td>";  echo $row['TRname'];  echo "</td>";
		echo "<td>";  echo $row['TRType'];  echo "</td>";
		echo "<td>";  echo $row['Price'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>";  echo $row['Date'];  echo "</td>";
		if($row['TRType']=="debit")
		{
			$total_debit +=$row['Price'];
		}
		elseif ($row['TRType']=="credit")
		{
			$total_credit +=$row['Price'];		
		}
		
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>

		<?php
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";

}	




	


elseif (isset($_POST['update_transaction']))

{
	if("$_POST[TRType]" == 'debit')
	{
		mysqli_query($db,"UPDATE `transaction` SET `TRname`='$_POST[TRname]',`TRType`='$_POST[TRType]',`Price`='$_POST[Price]',`Description`='$_POST[Description]',`Date`='$_POST[Date]' WHERE `TRid`=$_POST[TRid];");


?>
<script type="text/javascript">
alert("Transaction Updated");	
</script>
<?php
	}

	if("$_POST[TRType]" == 'credit')
	{
		$result1=mysqli_query($db,"SELECT * FROM `transaction` WHERE `TRid`=$_POST[TRid];");
		$row1=mysqli_fetch_assoc($result1);

		$count=0;
		$result=mysqli_query($db,"SELECT * FROM `food` WHERE Fname='$_POST[TRname]';");

		$row=mysqli_fetch_assoc($result);
		$count=mysqli_num_rows($result);
		$z="$_POST[Price]"/$row['SRate'];

		if($row1['Price']<"$_POST[Price]")
		{
			if($count!=0 && $z<=$row['Quantity'])
		{

			
			mysqli_query($db,"UPDATE `food` SET `Quantity`=Quantity-(('$_POST[Price]'-(select Price from transaction where `TRid`=$_POST[TRid]))/ SRate) WHERE Fname = '$_POST[TRname]';");

			mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=Quantity-(('$_POST[Price]'-(select Price from transaction where `TRid`=$_POST[TRid]))/(SELECT SRate FROM food WHERE Fname = '$_POST[TRname]')) WHERE `FoodName`='$_POST[TRname]';");

			mysqli_query($db,"UPDATE `transaction` SET `TRname`='$_POST[TRname]',`TRType`='$_POST[TRType]',`Price`='$_POST[Price]',`Description`='$_POST[Description]',`Date`='$_POST[Date]' WHERE `TRid`=$_POST[TRid];");

			?>
<script type="text/javascript">
alert("Transaction Added");	
</script>
<?php
		}
		else
		{
			?>
				<script type="text/javascript">
	alert("Quantity not Available.");
</script>
			<?php
		}
		}

		if($row1['Price']>"$_POST[Price]")
		{
			if($count!=0 && $z<=$row['Quantity'])
		{

			
			mysqli_query($db,"UPDATE `food` SET `Quantity`=Quantity+(((select Price from transaction where `TRid`=$_POST[TRid])-'$_POST[Price]')/ SRate) WHERE Fname = '$_POST[TRname]';");

			mysqli_query($db,"UPDATE `warehouse` SET `Quantity`=Quantity+(((select Price from transaction where `TRid`=$_POST[TRid])-'$_POST[Price]')/(SELECT SRate FROM food WHERE Fname = '$_POST[TRname]')) WHERE `FoodName`='$_POST[TRname]';");

			mysqli_query($db,"UPDATE `transaction` SET `TRname`='$_POST[TRname]',`TRType`='$_POST[TRType]',`Price`='$_POST[Price]',`Description`='$_POST[Description]',`Date`='$_POST[Date]' WHERE `TRid`=$_POST[TRid];");

			?>
<script type="text/javascript">
alert("Transaction Added");	
</script>
<?php
		}
		else
		{
			?>
				<script type="text/javascript">
	alert("Quantity not Available.");
</script>
			<?php
		}
		}
		
	}

$result=mysqli_query($db,"select * from `transaction`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Transaction ID";  echo "</th>";
	echo "<th>";  echo "Transaction Name";  echo "</th>";
	echo "<th>";  echo "Transaction Type";  echo "</th>";
	echo "<th>";  echo "Price";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Date";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['TRid'];  echo "</td>";
		echo "<td>";  echo $row['TRname'];  echo "</td>";
		echo "<td>";  echo $row['TRType'];  echo "</td>";
		echo "<td>";  echo $row['Price'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>";  echo $row['Date'];  echo "</td>";
		if($row['TRType']=="debit")
		{
			$total_debit +=$row['Price'];
		}
		elseif ($row['TRType']=="credit")
		{
			$total_credit +=$row['Price'];		
		}
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";

}	

elseif (isset($_POST['delete_transaction']))

{
mysqli_query($db,"DELETE FROM `transaction`  WHERE `TRid`=$_POST[TRid];");


?>
<script type="text/javascript">
alert("Transaction Deleted");	
</script>
<?php
$result=mysqli_query($db,"select * from `transaction`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Transaction ID";  echo "</th>";
	echo "<th>";  echo "Transaction Name";  echo "</th>";
	echo "<th>";  echo "Transaction Type";  echo "</th>";
	echo "<th>";  echo "Price";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Date";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['TRid'];  echo "</td>";
		echo "<td>";  echo $row['TRname'];  echo "</td>";
		echo "<td>";  echo $row['TRType'];  echo "</td>";
		echo "<td>";  echo $row['Price'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>";  echo $row['Date'];  echo "</td>";
		if($row['TRType']=="debit")
		{
			$total_debit +=$row['Price'];
		}
		elseif ($row['TRType']=="credit")
		{
			$total_credit +=$row['Price'];		
		}
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
	$result=mysqli_query($db,"select * from `transaction`;");

echo "<table class='table table-bordered table-hover' >";
echo "<tr style='background-color: #9099f3;'>";
	//table header
	echo "<th>";  echo "Transaction ID";  echo "</th>";
	echo "<th>";  echo "Transaction Name";  echo "</th>";
	echo "<th>";  echo "Transaction Type";  echo "</th>";
	echo "<th>";  echo "Price";  echo "</th>";
	echo "<th>";  echo "Description";  echo "</th>";
	echo "<th>";  echo "Date";  echo "</th>";
	echo "<th>";  echo "Action";  echo "</th>";
	echo "</tr>"; 

while($row=mysqli_fetch_assoc($result))
{
	echo "<tr>";
		echo "<td>";  echo $row['TRid'];  echo "</td>";
		echo "<td>";  echo $row['TRname'];  echo "</td>";
		echo "<td>";  echo $row['TRType'];  echo "</td>";
		echo "<td>";  echo $row['Price'];  echo "</td>";
		echo "<td>";  echo $row['Description'];  echo "</td>";
		echo "<td>";  echo $row['Date'];  echo "</td>";
		if($row['TRType']=="debit")
		{
			$total_debit +=$row['Price'];
		}
		elseif ($row['TRType']=="credit")
		{
			$total_credit +=$row['Price'];		
		}
		echo "<td>"; ?><button class="btn btn-default edition" type="button" style="background-color: mediumseagreen;color: white;">
								<i class="fa fa-pencil-square-o"> Modify</i>
							</button>
		<?php
		echo "</td>";					
	echo "</tr>";

}

echo "</table>";

?>

<?php
}
?>



</div>
</table>
<?php
if(isset($_POST['submit']) && !empty($_POST['search']) && mysqli_num_rows($q)!=0)
{
	?>
<h3 style="color: red; display: none;visibility: hidden;">Total Debit: <span style="color: black;"> <?php echo $total_debit; ?> tk.</span> </h3>
<h3 style="color: green;display: none;visibility: hidden;">Total Credit: <span style="color: black;"> <?php echo $total_credit; ?> tk.</span> </h3> 	

<?php
}
else{
	?>
<h3 style="color: red;">Total Debit: <span style="color: black;"> <?php echo $total_debit; ?> tk.</span> </h3>
<h3 style="color: green;">Total Credit: <span style="color: black;"> <?php echo $total_credit; ?> tk.</span> </h3> 
<?php	
}
?>					<div class="box-footer">
						
						<div class="pull-right">
							
							
							<a href="#" class="btn btn-primary" id="add_transaction" style="background-color: red;">Add Transaction<i class="fa fa-plus"></i></a>	
							
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
					<input type="text" name="TRname" placeholder="TRname">
					<select name="TRType" style="width: 50%;">
 					<option selected disabled hidden >Select Type</option>
  					<option value="debit">Debit</option>
  					<option value="credit">Credit</option>
					</select>
					<input type="text" name="Price" placeholder="Price">
					<input type="text" name="Description" placeholder="Description">
					
					
					
					
					<button class="btn btn-default fa fa-plus" type="submit" name="add_transaction" style="background-color:slateblue; color: white;">Add Transaction</button>
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
					<input type="text" name="TRid" id="TRid" placeholder="TRid" readonly>
					<input type="text" name="TRname" id="TRname" placeholder="TRname">
					<select name="TRType" id="TRType" style="width: 50%;">
 					<option disabled hidden >Select Type</option>
  					<option value="debit">Debit</option>
  					<option value="credit">Credit</option>
					</select>
					<input type="text" name="Price" id="Price" placeholder="Price">
					<input type="text" name="Description" id="Description"placeholder="Description">
					<input type="text" name="Date" id="Date"placeholder="Date" readonly>
					
					
					
					
		<button class="btn btn-default" type="submit" name="update_transaction" class="fa fa-chevron-right" style="background-color: green; color: white;">Update Transaction</button>
		<button class="btn btn-default" type="submit" name="delete_transaction" class="fa fa-trash" style="background-color: red;color: white;">Delete Transaction</button>
				</form>

			</div>
		</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">

	document.getElementById('add_transaction').addEventListener('click',function(){
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
$('#TRid').val(data[0]);
$('#TRname').val(data[1]);
$('#TRType').val(data[2]);
$('#Price').val(data[3]);
$('#Description').val(data[4]);
$('#Date').val(data[5]);

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



