<?php
if(isset($_POST['delete_group_id'])){
	$delete_group_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['delete_group_id']));
	$sql="DELETE FROM groups WHERE group_id='$delete_group_id'";
	$result=mysqli_query($conn, $sql);
	$sql="DELETE FROM comments WHERE group_id='$delete_group_id'";
	$result=mysqli_query($conn, $sql);
}