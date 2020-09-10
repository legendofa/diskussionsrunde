<?php
include $_SERVER["DOCUMENT_ROOT"].'/background.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="../css/classes.css"/>
	<link rel="stylesheet" type="text/css" href="../css/index.css"/>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
</head>
<body>
	<?php
	if(isset($_SESSION['user_id'])){
		header("Location: ../events.php");
	}
	else{
		include $_SERVER["DOCUMENT_ROOT"].'/logo.php';
		echo $lang_profile;
		?>
		<div id="login">
			<div class="normal_text"><?php echo $lang_user_authentification?>:</div>
			<form action="../php/login.php" method="POST">
				<input class="input" type="text" name="username" placeholder="<?php echo $lang_username?>">
				<input class="input" type="password" name="password" placeholder="<?php echo $lang_password?>">
				<button class="button" type="submit"><?php echo $lang_login?></button>
			</form>
			<?php
			if(isset($_SESSION['signed'])){
				?>
				<div class="normal_text">
					<?php
					echo $lang_account_creation_successful;
					session_destroy();
					?>
				</div>
				<?php
			}
			else{
				?>
				<div class="normal_text settings_text"><?php echo $lang_you_are_not_logged_in?></div>
				<form action="signup.php">
					<button class="button" type="submit"><?php echo $lang_register?></button>
				</form>
				<?php
			}
			?>
		</div>
		<?php
	}
	?>
</body>
</html>