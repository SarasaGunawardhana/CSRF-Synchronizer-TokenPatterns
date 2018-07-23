<!--
    name : Sarasa Gunawardhana
    IT No : IT14078842
-->
<?php
  include("../classes/sessionClass.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SSD</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    
	<script>
	$(document).ready(function(){
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	};
	xhttp.open("GET", "../classes/csrfClass.php", true);
	xhttp.send();
	});
</script>
	</head>
	<body>
		<form action="home.php" method="post">
			<div class="post">
				<strong>Hi <?php echo $_SESSION['username'] ?></strong>
					<div class="text">
							Post: <input type="text" name="updatepost">
					</div>
					<input type="Submit" value="Post it Here">

					<div id="div1">
					<input type="hidden" name="token" value="" id="token_to_be_added"/>
					</div>
			</div>
		</form>
	</body>
</html>