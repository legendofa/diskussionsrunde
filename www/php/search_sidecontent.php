<?php
if(isset($_POST['search1'])){
	$search1=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['search1']));
	$_SESSION['search_event']=$search1;
}
if(isset($_POST['search2'])){
	$search2=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['search2']));
	$_SESSION['search_group']=$search2;
}
if(isset($_POST['search3'])){
	$search3=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['search3']));
	$_SESSION['search_user']=$search3;
}