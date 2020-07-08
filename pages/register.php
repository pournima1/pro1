<?php

include('../db/db.php');
$error = '';
if (isset($_POST['mobile'])) {
	$mobile = $_POST['mobile'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$conf_password = $_POST['conf_password'];


$sql = "INSERT INTO user_details (user_mobile, user_name, user_email, user_password, user_status) VALUES ('$mobile', '$name', '$email', '$conf_password', '1')";
if (mysqli_query($conn, $sql)) {
			echo "1";
		}		
		else{
			echo "2";
		}






}












?>