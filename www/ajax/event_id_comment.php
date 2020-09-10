<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/comment.php';
if(isset($_SESSION['user_id'])){
	$sql="SELECT * FROM comments WHERE event_id='$event_id'";
	include $_SERVER["DOCUMENT_ROOT"].'/ajax/chat.php';
	?>
	<textarea class="input" id="comment1" type="text" name="comment" placeholder="<?php echo $lang_comment?>"></textarea>
	<div><button class="button" id="comment_submit" onclick="function_comment1($('#comment1').val())">=></button></div>
	<script>function_callback();</script>
	<?php
}