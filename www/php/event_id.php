<?php
if(isset($_POST['event_id'])){
	$_SESSION['event_id']=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['event_id']));
	$event_id=$_SESSION['event_id'];
	unset($_SESSION['settings']);
	unset($_SESSION['display_user_id']);
	unset($_SESSION['display_group_id']);
	unset($_SESSION['create_event']);
	unset($_SESSION['create_group']);
	unset($_SESSION['group_id']);
	unset($_SESSION['friend_user_id']);
	$sql="SELECT * FROM comments WHERE event_id='$event_id'";
}