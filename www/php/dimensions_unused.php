<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
if(isset($_POST['dimensions'])){
	$dimensions=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['dimensions']));
	$stmt=$conn->prepare("UPDATE users SET dimensions=? WHERE user_id=?");
	$stmt->bind_param("ss", $dimensions, $user_id);
	$stmt->execute();
}
$sql="SELECT * FROM users WHERE user_id='$user_id'";
$result=mysqli_query($conn, $sql);
if(!$row=mysqli_fetch_assoc($result)){
	if(isset($_SESSION['dimensions'])){
		$dimensions=$_SESSION['dimensions'];
	}
	else{
		$dimensions="80,300,600";
	}
}
else{
	$_SESSION['dimensions']=$row['dimensions'];
	$dimensions=$_SESSION['dimensions'];
}
$dimensions=explode(',', $dimensions);