
<!--
    name : Sarasa Gunawardhana
    IT No : IT14078842
-->
<?php


if(isset($_SESSION['USERNAME']) && $_SESSION['LOG'] == "in"){
	header("location: ./views/home.php");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SSD</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<h1> <?php echo $_SESSION['username']; ?></h1>
		<form action="./classes/validateClass.php" method="post">
			<div class="imgcontainer">
				<img src="./images/img_avatar2.png" alt="Avatar" class="avatar">
			</div>

			<div class="">
				<?php
					if(isset($_GET['er'])){
						echo '<h1 style="text-align:center;color:red;">'.$_GET['er'].'</h1><br />';
					}
				?>
			</div>
			<div class="container">
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
					
				<button type="submit">Login</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		</form>
	</body>
</html>