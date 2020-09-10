<?php
if(isset($_POST['group_visibility'])){
	$display_group_id=$_SESSION['display_group_id'];
	$group_visibility=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['group_visibility']));
	$sql="UPDATE groups SET group_visibility='$group_visibility' WHERE group_id='$display_group_id'";
	$result=mysqli_query($conn, $sql);
}