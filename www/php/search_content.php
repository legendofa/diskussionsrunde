<?php
if(isset($_POST['search4'])){
	$search4=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['search4']));
	$_SESSION['search_event']=$search4;
}
if(isset($_POST['search5'])){
	$search5=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['search5']));
	$_SESSION['search_group']=$search5;
}
if(isset($_POST['search6'])){
	$search6=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['search6']));
	$_SESSION['search_friend_user']=$search6;
}