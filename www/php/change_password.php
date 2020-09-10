<?php
if(isset($_POST['password'])&&isset($_POST['new_password'])&&isset($_POST['confirm_new_password'])){
	$username=$_SESSION['username'];
	$password=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
	$new_password=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['new_password']));
	$confirm_new_password=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['confirm_new_password']));
	$password=sha1($password);
	$_SESSION['error']=0;
	$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn, $sql);
	if(!$row=mysqli_fetch_assoc($result)){
		$_SESSION['error']=15;
	}
	else{
		if($confirm_new_password!=$new_password){$_SESSION['error']=14;}
		if(strlen($new_password)<10){$_SESSION['error']=13;}
		if(preg_match('/\s/',$new_password)){$_SESSION['error']=12;}
		if($_SESSION['error']==0){
			$new_password=sha1($new_password);
			$_SESSION['error']=16;
			$sql="UPDATE users SET password='$new_password' WHERE username='$username'";
			$result=mysqli_query($conn, $sql);
		}
	}
}