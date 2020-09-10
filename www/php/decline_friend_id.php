<?php
if(isset($_POST['decline_friend_id'])){
	$decline_friend_id=mysqli_real_escape_string($conn, $_POST['decline_friend_id']);
	$sql="DELETE FROM friends WHERE user_id_2='$decline_friend_id' AND user_id_1='$user_id'";
	$result=mysqli_query($conn, $sql);
}