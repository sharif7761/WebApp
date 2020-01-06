
<?php

$db=mysqli_connect("localhost","root","","farm");

if(isset($_POST["limit"],$_POST["start"]))
{
 
    $query = "SELECT * FROM offer  ORDER BY `Oid` DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($db, $query);
 while($row_Offer = mysqli_fetch_assoc($result))
 {
 $Oid=$row_Offer['Oid'];
		$foodname=$row_Offer['foodname'];
		$quantity=$row_Offer['quantity'];
		$aprice=$row_Offer['aprice'];
		$oprice=$row_Offer['oprice'];
		$Oimage=$row_Offer['Oimage'];

		echo "<div class='col-md-4 col-sm-6'>
				<div class='product'>
				<a href='food_details.php?Oid=$Oid'>
							<img class= 'img-responsive' src= ' img/$Oimage ' style='position: relative;
    
    width:  200px;
    height: 200px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;'>
						</a>
						<div class='text' align=center>
							<h3>
								<a href='offer_details.php?Oid=$Oid'>$foodname</a>
							</h3>
							<p class='quantity'>$quantity kg</p>
							<h4><small> <s>$aprice BDT</s></small></h4>
							<p class='price'>$oprice BDT</p>
							<p class='buttons'>
								<a href='offer_details.php?Oid=$Oid' class='btn btn-default'>View Details</a>
								
							</p>
						</div>


					</div>
				</div>

		";
	
 }
}

?>
