<?php
if(isset($_POST['remove_friend_id'])){
	$remove_friend_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['remove_friend_id']));
	$user_id=$_SESSION['user_id'];
	$sql="DELETE FROM friends WHERE user_id_1='$remove_friend_id' AND user_id_2='$user_id'";
	$result=mysqli_query($conn, $sql);
	$sql="DELETE FROM friends WHERE user_id_2='$remove_friend_id' AND user_id_1='$user_id'";
	$result=mysqli_query($conn, $sql);
	$sql="DELETE FROM comments WHERE user_id_2='$remove_friend_id' AND user_id_1='$user_id'";
	$result=mysqli_query($conn, $sql);
	$sql="DELETE FROM comments WHERE user_id_2='$remove_friend_id' AND user_id_1='$user_id'";
	$result=mysqli_query($conn, $sql);
}