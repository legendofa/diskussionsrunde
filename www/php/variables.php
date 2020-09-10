<?php
error_reporting(0);
session_start();
include $_SERVER["DOCUMENT_ROOT"].'/php/connect.php';
if(isset($_SESSION['user_id'])){
	$user_id=$_SESSION['user_id'];
	$sql="SELECT * FROM users WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$_SESSION['background_url']=$row['background_url'];
			$_SESSION['language']=$row['language'];
			$_SESSION['logo']=$row['logo'];
			$_SESSION['party']=$row['party'];
			$_SESSION['permission']=$row['permission'];
			$_SESSION['personal_message']=$row['personal_message'];
			$_SESSION['profile_picture']=$row['profile_picture'];
			$_SESSION['show_first_name']=$row['show_first_name'];
			$_SESSION['show_gender']=$row['show_gender'];
			$_SESSION['show_last_name']=$row['show_last_name'];
			$_SESSION['show_party']=$row['show_party'];
			$_SESSION['status']=$row['status'];
			$_SESSION['zoom']=$row['zoom'];
		}
	}
}
include $_SERVER["DOCUMENT_ROOT"].'/php/language_switch.php';