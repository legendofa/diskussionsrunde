<?php
if(isset($_POST['status'])){
	$_SESSION['status']=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['status']));
	$status=$_SESSION['status'];
	$sql="UPDATE users SET status='$status' WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}