<?php
if(isset($_POST['add_group_id'])){
	$add_group_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['add_group_id']));
	$sql="SELECT * FROM groupmembers WHERE group_id='$add_group_id' AND user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	if(!$row=mysqli_fetch_assoc($result)){
		$sql="INSERT INTO groupmembers (group_id, user_id, permission) VALUES ('$add_group_id', '$user_id', 1)";
		$result=mysqli_query($conn, $sql);
	}
}