<?php
include('../db/db.php');


$id = $_GET['id'];


$sql = "DELETE FROM cart where id = '$id'";
if (mysqli_query($conn, $sql)) {
	header('location:../pages/cart.php');
}
else{
	echo "Something is Wrong !";
}






?>