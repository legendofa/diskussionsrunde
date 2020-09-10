<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/group_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/comment.php';
if(isset($_SESSION['user_id'])){
	$group_id=$_SESSION['group_id'];
	$sql="SELECT group_name FROM groups WHERE group_id='$group_id'";
	$result=mysqli_query($conn, $sql);
	if($row=mysqli_fetch_assoc($result)){
		$group_name=$row['group_name'];
	}
	?>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div class="normal_text" id="content_headline" onclick="function_display_group_id(display_group_id=<?php echo $group_id?>)"><?php echo $group_name?></div>
	<?php
	$sql="SELECT * FROM groupmembers WHERE group_id='$group_id' AND user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	if($row=mysqli_fetch_assoc($result)){
		?>
		<script>
			function_visibility_hamburger()
		</script>
		<div id="group">
			<!-- <input class="input" id="search5" type="text" placeholder="Suchen"> -->
			<?php
			$sql="SELECT * FROM comments WHERE group_id='$group_id'";
			include $_SERVER["DOCUMENT_ROOT"].'/ajax/chat.php';
			?>
			<textarea class="input" id="comment2" type="text" name="comment" placeholder="<?php echo $lang_comment?>"></textarea>
			<div><button class="button" id="comment_submit" onclick="function_comment2($('#comment2').val())">=></button></div>
		</div>
		<script>function_callback();</script>
		<?php
	}
}