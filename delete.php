<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: list.php");
?>

 ?>
