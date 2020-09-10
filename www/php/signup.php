<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"].'/php/connect.php';
if(isset($_SESSION['user_id'])){
	header("Location: ../index.php");
}
else{
	$first_name=ucfirst($_POST['first_name']);
	$first_name=htmlspecialchars(mysqli_real_escape_string($conn, $first_name));
	$last_name=ucfirst($_POST['last_name']);
	$last_name=htmlspecialchars(mysqli_real_escape_string($conn, $last_name));
	$username=strtolower($_POST['username']);
	$username=htmlspecialchars(mysqli_real_escape_string($conn, $username));
	$email=strtolower($_POST['email']);
	$email=htmlspecialchars(mysqli_real_escape_string($conn, $email));
	$party=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['party']));
	$gender=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['gender']));
	$password=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
	$confirm_password=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['confirm_password']));
	$domain=substr($email,strpos($email,'@')+1);
	$_SESSION['first_name']=$first_name;
	$_SESSION['last_name']=$last_name;
	$_SESSION['username']=$username;
	$_SESSION['email']=$email;
	$_SESSION['party']=$party;
	$_SESSION['gender']=$gender;
	$_SESSION['error']=0;
	if($confirm_password!=$password){$_SESSION['error']=14;}
	if(strlen($password)<10){$_SESSION['error']=13;}
	if(preg_match('/\s/',$password)){$_SESSION['error']=12;}
	$sql="SELECT * FROM users WHERE email='$email'";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>=1){$_SESSION['error']=11;}
	if(checkdnsrr($domain)==FALSE){$_SESSION['error']=10;}
	$sql="SELECT * FROM users WHERE username='$username'";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>=1){$_SESSION['error']=9;}
	if(strlen($username)<2){$_SESSION['error']=8;}
	if(preg_match('/\s/',$username)){$_SESSION['error']=7;}
	if(preg_match('/[^A-Za-zÄÖÜäöüß,\'.-]/', $last_name)){$_SESSION['error']=6;}
	if(strlen($last_name)<2){$_SESSION['error']=5;}
	if(preg_match('/\s/',$last_name)){$_SESSION['error']=4;}
	if(preg_match('/[^A-Za-zÄÖÜäöüß,\'.-]/', $first_name)){$_SESSION['error']=3;}
	if(strlen($first_name)<2){$_SESSION['error']=2;}
	if(preg_match('/\s/',$first_name)){$_SESSION['error']=1;}
	if($_SESSION['error']==0){
		$hashed_password=password_hash($password, PASSWORD_DEFAULT);
		$_SESSION['password']=$hashed_password;
		$token="TOKEN";
		mail('MAIL', "You have created an account.", "To verify your account open this link: http://localhost/token.php?token=".$token."\r\n\r\nOr insert the token manually: ".$token);
		$_SESSION['token']=$token;
		header("Location: ../token.php");
	}
	else{
		header("Location: ../signup.php");
	}
}