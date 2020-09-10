<?php
include $_SERVER["DOCUMENT_ROOT"].'/background.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Token</title>
	<link rel="stylesheet" type="text/css" href="../css/classes.css"/>
	<link rel="stylesheet" type="text/css" href="../css/index.css"/>
	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
</head>
<body>
	<?php
	include $_SERVER["DOCUMENT_ROOT"].'/logo.php';
	?>
	<div id="login">
		<?php
		if(isset($_SESSION['user_id'])){
			?>
			<div class="normal_text">You are already logged in!</div>
			<form action="../php/logout.php">
				<button class="button" id="button1" type="submit" value="Log out"/>
			</form>
			<?php
		}
		else{
			if($_GET['token']==$_SESSION['token']&&isset($_SESSION['token'])){
				$first_name=$_SESSION['first_name'];
				$last_name=$_SESSION['last_name'];
				$username=$_SESSION['username'];
				$email=$_SESSION['email'];
				$party=$_SESSION['party'];
				$gender=$_SESSION['gender'];
				$password=$_SESSION['password'];
				$sql="INSERT INTO users (first_name, last_name, username, email, party, gender, password) VALUES ('$first_name', '$last_name', '$username', '$email', '$party', '$gender', '$password')";
				$result=mysqli_query($conn, $sql);
				$_SESSION['signed']=1;
				header("Location: ../index.php");
			}
			else{
				if(isset($_SESSION['token'])){
					?>
					<div class="normal_text">Bitte den Token eingeben</div>
					<form action="token.php" method="GET">
						<input class="input" id="input1" type="text" name="token" placeholder="Token">
						<button class="wide_button" type="submit">Profil erstellen</button>
					</form>
					<?php
				}
				else{
					header("Location: ../index.php");
				}
			}
		}
		?>
	</div>
</body>
</html>