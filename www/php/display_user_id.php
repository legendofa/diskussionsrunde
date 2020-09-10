<?php
if(isset($_POST['display_user_id'])){
	$_SESSION['display_user_id']=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['display_user_id']));
	unset($_SESSION['settings']);
	unset($_SESSION['display_group_id']);
	unset($_SESSION['create_event']);
	unset($_SESSION['create_group']);
	unset($_SESSION['event_id']);
	unset($_SESSION['group_id']);
	unset($_SESSION['friend_user_id']);
}