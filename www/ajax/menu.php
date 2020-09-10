<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/menu.php';
if(isset($_SESSION['user_id'])){
	?>
	<script>
		function_menu_load();
	</script>
	<div id="menu1" onclick="function_menu(menu=1)"><?php echo $lang_events?></div>
	<div id="menu2" onclick="function_menu(menu=2)"><?php echo $lang_groups?></div>
	<div id="menu3" onclick="function_menu(menu=3)"><?php echo $lang_friends?></div>
	<?php
}