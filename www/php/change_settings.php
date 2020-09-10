<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
if(isset($_POST['change_personal_message'])&&isset($_POST['change_logo'])&&isset($_POST['zoom'])&&isset($_POST['language'])){
	$target_folder='../userdata/';
	$file_extension1=explode('.', $_FILES['background_image']['name']);
	$file_extension2=explode('.', $_FILES['profile_picture']['name']);
	$target_path1=$target_folder.sha1($_FILES['background_image']['name']).'.'.$file_extension1[1];
	$target_path2=$target_folder.sha1($_FILES['profile_picture']['name']).'.'.$file_extension2[1];
	$sql="SELECT * FROM users WHERE background_url='$target_path1'";
	$result=mysqli_query($conn, $sql);
	if(getimagesize($_FILES['background_image']['tmp_name'])!==FALSE){
		if($_FILES['background_image']['size']<5000000){
			if(!$row=mysqli_fetch_assoc($result)){
				move_uploaded_file($_FILES['background_image']['tmp_name'], $target_path1);
			}
			$sql="UPDATE users SET background_url='$target_path1' WHERE user_id='$user_id'";
			$result=mysqli_query($conn, $sql);
		}
	}
	$sql="SELECT * FROM users WHERE profile_picture='$target_path2'";
	$result=mysqli_query($conn, $sql);
	if(getimagesize($_FILES['profile_picture']['tmp_name'])!==FALSE){
		if($_FILES['profile_picture']['size']<5000000){
			if(!$row=mysqli_fetch_assoc($result)){
				move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_path2);
			}
			$sql="UPDATE users SET profile_picture='$target_path2' WHERE user_id='$user_id'";
			$result=mysqli_query($conn, $sql);
		}
	}
	$logo=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['change_logo']));
	$zoom=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['zoom']));
	$language=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['language']));
	$personal_message=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['change_personal_message']));
	$sql="UPDATE users SET logo='$logo' WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	$sql="UPDATE users SET zoom='$zoom' WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	$sql="UPDATE users SET language='$language' WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	if($personal_message!=''){
		$sql="UPDATE users SET personal_message='$personal_message' WHERE user_id='$user_id'";
		$result=mysqli_query($conn, $sql);
	}
	header("Location: ../events.php");
}