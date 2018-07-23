<!--
    name : Sarasa Gunawardhana
    IT No : IT14078842
-->
<?php
if(isset($_POST['uname'],$_POST['psw'])){
	$uname = $_POST['uname'];
	$pwd = $_POST['psw'];
	if($uname == 'sarasa' && $pwd == 'password'){
        ob_start();
        echo 'Successfully logged in';
        session_start();
        $_SESSION['USERNAME'] = $uname;
        $_SESSION['LOG'] = "in";
        header("location: ../views/home.php");
	}
	else{
		header("location: ../index.php?er=check again Username and Password");
	}
}
?>