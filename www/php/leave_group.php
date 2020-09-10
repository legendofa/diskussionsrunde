<?php
if(isset($_POST['leave_group_id'])){
	$leave_group_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['leave_group_id']));
	$sql="DELETE FROM groupmembers WHERE group_id='$leave_group_id' AND user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}