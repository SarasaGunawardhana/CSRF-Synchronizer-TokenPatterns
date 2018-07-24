
<!--
    name : Sarasa Gunawardhana
    IT No : IT14078842
-->
<?php
// If user already logged in, index page redirected to home page
ob_start();
session_start();
if(isset($_SESSION['USERNAME'])){
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

		<!-- form action send to validateClass.php via POST Request -->
		<form action="./classes/validateClass.php" method="post">
			<!-- image -->
			<div class="imgcontainer">
				<img src="./images/img_avatar2.png" alt="Avatar" class="avatar">
			</div>
			<!-- here shows the errors if any unathurised accesses -->
			<div class="">
				<?php
					if(isset($_GET['er'])){
						echo '<h1 style="text-align:center;color:red;">'.$_GET['er'].'</h1><br />';
					}
				?>
			</div>
			<div class="container">
				<!-- username -->
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
				<!-- Password -->
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				<!-- Submit Button -->
				<button type="submit">Login</button>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>
		</form>
	</body>
</html>