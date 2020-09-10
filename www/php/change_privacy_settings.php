<?php
if($_POST['show_first_name']=='1'){
	$_SESSION['show_first_name']=1;
	$sql="UPDATE users SET show_first_name=1 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_first_name']=='0'){
	$_SESSION['show_first_name']=0;
	$sql="UPDATE users SET show_first_name=0 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_last_name']=='1'){
	$_SESSION['show_last_name']=1;
	$sql="UPDATE users SET show_last_name=1 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_last_name']=='0'){
	$_SESSION['show_last_name']=0;
	$sql="UPDATE users SET show_last_name=0 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_gender']=='1'){
	$_SESSION['show_gender']=1;
	$sql="UPDATE users SET show_gender=1 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_gender']=='0'){
	$_SESSION['show_gender']=0;
	$sql="UPDATE users SET show_gender=0 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_party']=='1'){
	$_SESSION['show_party']=1;
	$sql="UPDATE users SET show_party=1 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}
if($_POST['show_party']=='0'){
	$_SESSION['show_party']=0;
	$sql="UPDATE users SET show_party=0 WHERE user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
}