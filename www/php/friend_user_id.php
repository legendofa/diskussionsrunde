<?php
if(isset($_POST['friend_user_id'])){
	$_SESSION['friend_user_id']=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['friend_user_id']));
	$friend_user_id=$_SESSION['friend_user_id'];
	unset($_SESSION['settings']);
	unset($_SESSION['display_user_id']);
	unset($_SESSION['display_group_id']);
	unset($_SESSION['create_event']);
	unset($_SESSION['create_group']);
	unset($_SESSION['event_id']);
	unset($_SESSION['group_id']);
	$sql="SELECT * FROM comments WHERE user_id_1='$friend_user_id' AND user_id_2='$user_id' OR user_id_2='$friend_user_id' AND user_id_1='$user_id'";
}