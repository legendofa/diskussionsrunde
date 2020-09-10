<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
$user_id=$_SESSION['user_id'];
if(isset($_SESSION['user_id'])){
	$sql="UPDATE users SET status=4 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
session_destroy();
header("Location: ../index.php");