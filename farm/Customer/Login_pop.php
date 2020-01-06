


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
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

.close{
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

	<div class="bg-modal">
			<div class="modal-content">
				<div class="close">
					+
				</div>


				<img src="user22.png">
				<form action="" id="popup" method="post">
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="password" placeholder="Password" required>
					<button class="btn btn-default" type="submit" name="submit">Login</button>
				</form>
				<br>
				<label><a href="updatePass.php">Forget Password</a></label>
				<label>New to this website?<a href="registration.php">Sign Up</a></label>


			</div>
		</div>

<script type="text/javascript">
	document.getElementById('login_style').addEventListener('click',function(){
document.querySelector('.bg-modal').style.display='flex';
});

	document.querySelector('.close').addEventListener('click',function(){
		document.querySelector('.bg-modal').style.display='none';
	});
</script>


				<?php

		if(isset($_POST['submit']))
		{
			$count=0;
			$result=mysqli_query($db,"SELECT * FROM `user` WHERE Email='$_POST[email]' && Password='$_POST[password]';");

			$row=mysqli_fetch_assoc($result);
			$count=mysqli_num_rows($result);

			if($count==0)
			{
				$result=mysqli_query($db,"SELECT * FROM `customer` WHERE email='$_POST[email]' && password='$_POST[password]';");

				$row=mysqli_fetch_assoc($result);
				$count=mysqli_num_rows($result);

				if($count==0)
				{

			?>
				<script type="text/javascript">
	alert("incorrect username or password");
</script>
			<?php	

			}

				else
				{
					$_SESSION['login_user']=$row['name'];
					$_SESSION['login_id']=$row['Cus_id'];
					$_SESSION['login_email']=$row['email'];
					$_SESSION['pic']=$row['pic'];
					$_SESSION['type']=$row['type'];
				}
			}
			else
			{
				//correct pass and user

				
				$_SESSION['login_user']=$row['Uname'];
				$_SESSION['login_email']=$row['Email'];
				$_SESSION['pic']=$row['pic'];
				$_SESSION['type']=$row['Position'];
			}
			?>
			<script type="text/javascript">
	window.location="index.php"
</script>
			<?php		

			
		}

	?>


</body>
</html> 