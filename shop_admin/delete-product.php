<?php
include_once "connect.php";
$id=$_GET['id'];


// Check if 'id' parameter is set
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: Product ID is not set.");
}
 $sql = "DELETE FROM product WHERE productID = $id";


	if ($con->query($sql) === TRUE) {
echo "<script> window.location.href='index.php';</script>";
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

?>
