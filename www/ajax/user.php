<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/change_status.php';
if(isset($_SESSION['user_id'])){
?>
<small style="font-size: 8px">
	<?php
	/*echo '<pre>';
	var_dump($_POST);
	echo '</pre>';
	echo '<pre>';
	var_dump($_SESSION);
	echo '</pre>';*/
	?>
</small>
<img id="hamburger_mobile" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
<img id="profile_picture" onclick="function_settings()" src="../<?php echo $_SESSION['profile_picture']?>">
<a id="username" onclick="function_settings()"><?php echo $_SESSION['first_name']?></a>
<img id="status" src="../img/<?php echo $_SESSION['status']?>.svg">
<div><a href="../php/logout.php"><img id="logout" src="../img/logout.svg"></a></div>
<?php
}