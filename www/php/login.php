<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"].'/php/connect.php';
$username=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['username']));
$password=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
$hashed_password=password_hash($password, PASSWORD_DEFAULT);
$sql="SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($conn, $sql);
if($row=mysqli_fetch_assoc($result)){
	if(password_verify($password, $hashed_password)){
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['first_name']=$row['first_name'];
		$_SESSION['username']=$row['username'];
		$_SESSION['settings']=1;
		$user_id=$_SESSION['user_id'];
		$sql="UPDATE users SET status=1 WHERE user_id='$user_id'";
		$result=mysqli_query($conn, $sql);
	}
}
header("Location: ../index.php");