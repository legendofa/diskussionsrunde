<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/display_user_id.php';
if(isset($_SESSION['user_id'])){
	?>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div id="display">
		<div class="normal_text settings_text"><?php echo $lang_create_event?>:</div>
		<input class="input" id="input1" type="text" name="create_event_name" placeholder="<?php echo $lang_event_name?>">
		<input class="input" id="input2" type="text" name="create_youtube_id" placeholder="<?php echo $lang_video_id?>">
		<input class="input" id="input3" type="text" name="create_party_1" placeholder="<?php echo $lang_party_1?>">
		<input class="input" id="input4" type="text" name="create_party_2" placeholder="<?php echo $lang_party_2?>">
		<button class="wide_button" onclick="function_create_event(create_event_name=$('#input1').val(), create_youtube_id=$('#input2').val(), create_party_1=$('#input3').val(), create_party_2=$('#input4').val())"><?php echo $lang_create_event?></button>
	</div>
	<?php
}