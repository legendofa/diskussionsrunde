<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/create_group.php';
if(isset($_SESSION['user_id'])){
	?>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div id="display">
		<div class="normal_text settings_text"><?php echo $lang_create_group?>:</div>
		<input class="input" id="input1" type="text" name="create_group_name" placeholder="<?php echo $lang_group_name?>">
		<button class="wide_button" onclick="function_create_group(create_group_name=$('#input1').val())"><?php echo $lang_create_group?></button>
	</div>
	<?php
}