<!--
    name : Sarasa Gunawardhana
    IT No : IT14078842
-->
<?php include("../classes/sessionClass.php"); ?>
<!DOCTYPE html>
<html>
	<head>
        <title>SSD</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>

        <script>
            // generate CSRF token and add it post request
            $(document).ready(function(){
            var http_request = new XMLHttpRequest();
            http_request.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
                }
            };
            http_request.open("GET", "../classes/csrfClass.php", true);
            http_request.send();
            });
        </script>
	</head>
	<body>
        <!-- Logout - seesion will destroy and redirected into index page -->
        <a href="../classes/logoutClass.php">
            <button class="btn btn-danger">Logout</button>
        </a> <br><hr>
        <strong>Hello <?php echo $_SESSION['USERNAME'] ?></strong>
        <hr>
        <?php
            if(isset($_GET['er'])){
                echo '<hr><h3 style="text-align:center;color:green;">'.$_GET['er'].'</h3><hr><br />';
            }
        ?>
        <form class="form-inline" action="../classes/tokenValidator.php">
            <div class="form-group">
                <label for="email">Post Request:</label>
                <input type="text" name="request" class="form-control" id="request">
            </div>
            <!-- Auto generated token added each time -->
            <input type="hidden" name="token" value="" id="token_to_be_added"/>
            <button type="submit" class="btn btn-success">Send</button>
        </form> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
	</body>
</html>