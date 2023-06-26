<?php
session_start();


$con = mysqli_connect(
    'localhost', 
    'u395178752_user4324', 
    'Tafaca32', 
);

if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'u395178752_quivendb');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  adminlogin where adminname='$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			// echo "login successful";
			$_SESSION['user'] = $username;
			$_SESSION['message'] = "Ingreso Exitoso";
            $_SESSION['message_type'] = "success"; 
			header('location: ../index.php');
		}else{
			// echo "login failed";
            $_SESSION['message'] = "Clave Incorrecta";
            $_SESSION['message_type'] = "danger";
			header('location: ../loginPanel.php');
		}
}
?>