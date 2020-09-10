<?php
if(isset($_POST['party'])){
	$_SESSION['party']=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['party']));
	$party=$_SESSION['party'];
	$stmt=$conn->prepare("UPDATE users SET party=? WHERE user_id=?");
	$stmt->bind_param("ss", $party, $user_id);
	$stmt->execute();
}