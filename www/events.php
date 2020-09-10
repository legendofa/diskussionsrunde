<?php
include $_SERVER["DOCUMENT_ROOT"].'/background.php';
if(isset($_SESSION['user_id'])){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Devices</title>
		<link rel="stylesheet" type="text/css" href="../css/classes.css"/>
		<link rel="stylesheet" type="text/css" href="../css/events.css"/>
		<link rel="stylesheet" type="text/css" href="../js/jquery-ui.css"/>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="../js/lightbox.css"/>
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/lightbox.js"></script>
		<script src="../js/functions.js"></script>
	</head>
	<body>
		<?php
		include $_SERVER["DOCUMENT_ROOT"].'/logo.php';
		?>
		<div id="load_dimensions"></div>
		<menu type="context" id="status_contextmenu">
			<menuitem label="Online" icon="../img/1.svg" onclick="function_change_status(status=1)"></menuitem>
			<menuitem label="Abwesend" icon="../img/2.svg" onclick="function_change_status(status=2)"></menuitem>
			<menuitem label="Beschäftigt" icon="../img/3.svg" onclick="function_change_status(status=3)"></menuitem>
			<menuitem label="Unsichtbar" icon="../img/4.svg" onclick="function_change_status(status=4)"></menuitem>
		</menu> 
		<div id="user" contextmenu="status_contextmenu">
			<?php
			include $_SERVER["DOCUMENT_ROOT"].'/ajax/user.php';
			?>
		</div>
		<div id="menu">
			<?php
			include $_SERVER["DOCUMENT_ROOT"].'/ajax/menu.php';
			?>
		</div>
		<div id="sidecontent" onresize="function_dimensions()">
			<?php
			include $_SERVER["DOCUMENT_ROOT"].'/ajax/sidecontent.php';
			?>
		</div>
		<div id="content" onscroll="function_hide_header()">
			<?php
			if($_SESSION['settings']==1){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/settings.php';
			}
			if(isset($_SESSION['display_user_id'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/display_user_id.php';
			}
			if(isset($_SESSION['display_group_id'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/display_group_id.php';
			}
			if(isset($_SESSION['create_event'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/display_create_event.php';
			}
			if(isset($_SESSION['create_group'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/display_create_group.php';
			}
			if(isset($_SESSION['event_id'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/event_id.php';
			}
			if(isset($_SESSION['group_id'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/group_id.php';
			}
			if(isset($_SESSION['friend_user_id'])){
				include $_SERVER["DOCUMENT_ROOT"].'/ajax/friend_user_id.php';
			}
			?>
		</div>
	</body>
	</html>
	<?php
}
else{
	header("Location: ../index.php");
}