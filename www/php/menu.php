<?php
if(isset($_POST['menu'])){
	$_SESSION['menu']=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['menu']));
}
if($_SESSION['menu']==0){
	$_SESSION['menu']=1;
}