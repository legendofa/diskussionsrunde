<?php
if(isset($_POST['unset_search'])){
	$unset_search=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['unset_search']));
	switch($unset_search){
		case 1:
		unset($_SESSION['search_event']);
		break;
		case 2:
		unset($_SESSION['search_group']);
		break;
		case 3:
		unset($_SESSION['search_user']);
		break;
	}
}