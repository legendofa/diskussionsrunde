<?php
include $_SERVER["DOCUMENT_ROOT"].'/background.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="../css/classes.css"/>
	<link rel="stylesheet" type="text/css" href="../css/index.css"/>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
</head>
<body>
	<?php
	include $_SERVER["DOCUMENT_ROOT"].'/logo.php';
	?>
	<div id="login">
	<?php
	if(isset($_SESSION['user_id'])){
		?>
		<div class="normal_text"><?php echo $lang_you_are_not_logged_in?></div>
		<form action="../php/logout.php">
			<button class="button" type="submit"><?php echo $lang_logout?></button>
		</form>
		<?php
	}
	else{
		?>
		<div class="normal_text"><?php echo $lang_user_data?>:</div>
		<div class="error settings_text">
		<?php
			include $_SERVER["DOCUMENT_ROOT"].'/php/error_switch_eng.php';
			//session_destroy();
		?>
		</div>
		<form action="php/signup.php" method="POST">
			<input class="input" id="input1" type="text" name="first_name" placeholder="<?php echo $lang_prename?>">
			<input class="input" id="input2" type="text" name="last_name" placeholder="<?php echo $lang_surname?>">
			<input class="input" id="input3" type="text" name="username" placeholder="<?php echo $lang_username?>">
			<input class="input" id="input4" type="email" name="email" placeholder="<?php echo $lang_email?>">
			<select class="input" id="select1" type="text" name="party">
				<option value="" disabled selected><?php echo $lang_political_orientation?></option>
				<script>
					var party="<?php echo $lang_conservative?>','<?php echo $lang_left?>','<?php echo $lang_ecologial?>','<?php echo $lang_social_democratic?>','<?php echo $lang_communist?>";
					var count=party.split("','").length;
					while(count>0){
						var res=party.split("','", 1);
						document.write("<option value="+res+">"+res+"</option>");
						party=party.replace(res+"','", "");
						count--;
					}
				</script>
			</select>
			<select class="input" id="select2" type="text" name="gender">
				<option value="" disabled selected><?php echo $lang_gender?></option>
				<option value=0>-</option>
				<option value=1><?php echo $lang_male?></option>
				<option value=2><?php echo $lang_female?></option>
			</select>
			<input class="input" id="input5" type="password" name="password" placeholder="<?php echo $lang_password?>">
			<input class="input" id="input6" type="password" name="confirm_password" placeholder="<?php echo $lang_confirm_password?>">
			<!-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> -->
			<button class="button" id="button1" type="submit"><?php echo $lang_create_user?></button>
		</form>
		<script>
			$("#input1").val('<?php echo $_SESSION['first_name']?>');
			$("#input2").val('<?php echo $_SESSION['last_name']?>');
			$("#input3").val('<?php echo $_SESSION['username']?>');
			$("#input4").val('<?php echo $_SESSION['email']?>');
			$("#select1").val('<?php echo $_SESSION['party']?>');
			$("#select2").val('<?php echo $_SESSION['gender']?>');
			$("#input5").val('<?php echo $_SESSION['password']?>');
			$("#input6").val('<?php echo $_SESSION['confirm_password']?>');
		</script>
		<?php
	}
	?>
	</div>
</body>
</html>