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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
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
        <div>
            <?php
                if(isset($_GET['er'])){
                    echo '<h1 style="text-align:center;color:red;">'.$_GET['er'].'</h1><br />';
                }
            ?>
        </div>
        <a href="../classes/logoutClass.php">
            <button class="btn btn-danger">Logout</button>
        </a>
		<!-- <form action="home.php" method="post">
			<div>
				<strong>Hello <?php echo $_SESSION['USERNAME'] ?></strong>
					<div>
							Post Request : <input type="text" name="request">
					</div>
					<input type="Submit" value="Send">

					

			</div>
        </form> -->
        <br>
        <hr>
        <strong>Hello <?php echo $_SESSION['USERNAME'] ?></strong>
        <hr>
        <form class="form-inline" action="/home.php">
            <div class="form-group">
                <label for="email">Post Request:</label>
                <input type="text" name="request" class="form-control" id="request">
            </div>
            <input type="hidden" name="token" value="" id="token_to_be_added"/>
            <button type="submit" class="btn btn-success">Send</button>
        </form> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	</body>
</html>