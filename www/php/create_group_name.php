<?php
if(isset($_POST['create_group_name'])){
	$create_group_name=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['create_group_name']));
	$user_id=$_SESSION['user_id'];
	$sql="SELECT * FROM groups WHERE group_name='$create_group_name'";
	$result=mysqli_query($conn, $sql);
	if(!$row=mysqli_fetch_assoc($result)){
		$sql="INSERT INTO groups (group_name) VALUES ('$create_group_name')";
		$result=mysqli_query($conn, $sql);
		$sql="SELECT * FROM groups WHERE group_name='$create_group_name'";
		$result=mysqli_query($conn, $sql);
		if($row=mysqli_fetch_assoc($result)){
			$group_id=$row['group_id'];
			$sql="INSERT INTO groupmembers (group_id, user_id, permission) VALUES ('$group_id', '$user_id', 2)";
			$result=mysqli_query($conn, $sql);
		}
	}
}