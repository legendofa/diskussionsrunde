<?php
if(isset($_POST['add_friend_id'])){
	$add_friend_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['add_friend_id']));
	$sql="SELECT * FROM friends WHERE user_id_2='$add_friend_id' AND user_id_1='$user_id'";
	$result=mysqli_query($conn, $sql);
	if(!$row=mysqli_fetch_assoc($result)){
		$sql="INSERT INTO friends (user_id_1, user_id_2) VALUES ('$user_id', '$add_friend_id')";
		$result=mysqli_query($conn, $sql);
	}
}