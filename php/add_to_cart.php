<?php

include('../db/db.php');


if (isset($_POST['submit'])) {
	
	$product_id = $_POST['product_id'];
	$product_name = $_POST['product_name'];
	$product_rate = $_POST['product_rate'];
	$product_img = $_POST['product_img'];



$sql2 = "SELECT * FROM cart where product_id = '$product_id'";
$result = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result) > 0) {
	echo "Already In cart";
}
else{
	$sql = "INSERT INTO cart(product_id, product_name, product_rate, product_img, status) VALUES ('$product_id', '$product_name', '$product_rate', '$product_img', '1')";

	if(mysqli_query($conn, $sql))
	{
		echo "Add Success";
		header('location:../index.php');



	}
	else{
		echo "Somehing is wrong";
	}
}













}
















?>