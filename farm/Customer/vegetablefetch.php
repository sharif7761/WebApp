
<?php

$db=mysqli_connect("localhost","root","","farm");

if(isset($_POST["limit"],$_POST["start"]))
{
 
    $query = "SELECT * FROM food where Type='Vegetable' AND Quantity>0 ORDER BY Fid DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($db, $query);
 while($row_Veg = mysqli_fetch_assoc($result))
 {
 $Fid=$row_Veg['Fid'];
		$Fname=$row_Veg['Fname'];
		$SRate=$row_Veg['SRate'];
		$Fimage=$row_Veg['Fimage'];

		echo "<div class='col-md-4 col-sm-6'>
				<div class='product'>
				<a href='food_details.php?Fid=$Fid'>
							<img class= 'img-responsive' src= ' ../img/$Fimage ' style='position: relative;
    
    width:  200px;
    height: 200px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;'>
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
