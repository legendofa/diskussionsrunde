<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/friend_user_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/comment.php';
if(isset($_SESSION['user_id'])){
	$friend_user_id=$_SESSION['friend_user_id'];
	$sql="SELECT username FROM users WHERE user_id='$friend_user_id'";
	$result=mysqli_query($conn, $sql);
	if($row=mysqli_fetch_assoc($result)){
		$friend_username=$row['username'];
	}
	?>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div class="normal_text" id="content_headline" onclick="function_display_user_id(display_user_id=<?php echo $friend_user_id?>)"><?php echo $friend_username?></div>
	<?php
	$sql="SELECT * FROM friends WHERE user_id_1='$friend_user_id' AND user_id_2='$user_id'";
	$result=mysqli_query($conn, $sql);
	if($row=mysqli_fetch_assoc($result)){
		?>
		<script>
			function_visibility_hamburger()
		</script>
		<div id="friend_user">
			<!-- <input class="input" id="search6" type="text" placeholder="Suchen"> -->
			<?php
			$sql="SELECT * FROM comments WHERE user_id_1='$friend_user_id' AND user_id_2='$user_id' OR user_id_2='$friend_user_id' AND user_id_1='$user_id'";
			include $_SERVER["DOCUMENT_ROOT"].'/ajax/chat.php';
			?>
			<textarea class="input" id="comment3" type="text" name="comment" placeholder="<?php echo $lang_comment?>"></textarea>
			<div><button class="button" id="comment_submit" onclick="function_comment3($('#comment3').val())">=></button></div>
		</div>
		<script>function_callback();</script>
		<?php
	}
}