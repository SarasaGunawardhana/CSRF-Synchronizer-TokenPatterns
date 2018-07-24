
<!DOCTYPE html>
<html>
	<head>
		<title>SSD</title>
		<link rel="stylesheet" href="./css/style2.css">
	</head>
	<body>
        <div id="mainC">
            <div class="message">
                <h1>404</h1>
                <?php
					if(isset($_GET['er'])){
						echo '<h1 style="text-align:center;color:red;">'.$_GET['er'].'</h1><br />';
					}
				?>
            </div>
        </div>
    </body>
</html>
