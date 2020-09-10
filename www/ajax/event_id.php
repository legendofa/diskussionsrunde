<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/event_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/comment.php';
if(isset($_SESSION['user_id'])){
	$event_id=$_SESSION['event_id'];
	$sql="SELECT youtube_id FROM events WHERE event_id='$event_id'";
	$result=mysqli_query($conn, $sql);
	if($row=mysqli_fetch_assoc($result)){
		$_SESSION['youtube_id']=$row['youtube_id'];
	}
	?>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div id="framediv" %onresize="function_dimensions()">
		<iframe id="iframe" src="https://www.youtube.com/embed/<?php echo $_SESSION['youtube_id']?>?start=<?php echo $_SESSION['player_time']?>" frameborder="0" gesture="media" allowfullscreen></iframe>
		<div class="ui-resizable-handle ui-resizable-s" id="frame_handle"></div>
	</div>
	<div id="event">
		<!-- <input class="input" id="search4" type="text" placeholder="Suchen"> -->
		<?php
		$sql="SELECT * FROM comments WHERE event_id='$event_id'";
		include $_SERVER["DOCUMENT_ROOT"].'/ajax/chat.php';
		?>
		<textarea class="input" id="comment1" type="text" name="comment" placeholder="<?php echo $lang_comment?>"></textarea>
		<div><button class="button" id="comment_submit" onclick="function_comment1($('#comment1').val())">=></button></div>
	</div>
	<script>function_callback();</script>
	<?php
}