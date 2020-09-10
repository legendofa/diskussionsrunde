<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/display_user_id.php';
if(isset($_SESSION['user_id'])){
	?>
	<script>
		function_visibility_hamburger()
	</script>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div id="display_user_id">
		<?php
		$display_user_id=$_SESSION['display_user_id'];
		$sql="SELECT * FROM users WHERE user_id='$display_user_id'";
		$result=mysqli_query($conn, $sql);
		if($row=mysqli_fetch_assoc($result)){
			?>
			<div class="normal_text" id="content_headline" onclick="function_friend_user_id(<?php echo $display_user_id?>)"><?php echo $row['username']?></div>
			<?php
			if($display_user_id==$user_id){
				?>
				<script>
					function_settings();
				</script>
				<?php
			}
			else{
				include $_SERVER["DOCUMENT_ROOT"].'/php/display_user_switch.php';
				?>
				<div id="display_user">
					<div id="profile_picture_display_user_box"><a data-lightbox="profile_picture" href="../<?php echo $row['profile_picture']?>"><img id="profile_picture_display_user" src="../<?php echo $row['profile_picture']?>"></a>
					</div>
					<div class="normal_text_small" id="display_user_box">
						<div><?php echo $lang_username.": ".$row['username']?></div>
						<div><?php echo $lang_name.": ".$first_name." ".$last_name?></div>
						<?php 
						if($row['show_gender']==1){
							echo "<div>".$lang_gender.": ".$gender."</div>";
						}
						?>
						<div><?php echo $lang_political_orientation.": ".$party?></div>
					</div>
					<div class="normal_text" id="display_user_information"><?php echo $lang_personal_message?>:
						<div class="normal_text_small"><?php echo $row['personal_message']?></div>
					</div>
				</div>
				<div id="display">
					<?php
					$sql="SELECT * FROM friends WHERE user_id_1='$display_user_id' AND user_id_2='$user_id'";
					$result=mysqli_query($conn, $sql);
					if($row=mysqli_fetch_assoc($result)){
						?>
						<button class="button" onclick="function_remove_friend(<?php echo $_SESSION['display_user_id']?>)">
						<?php echo $lang_unfriend?></button>
						<?php
					}
					else{
						$sql="SELECT * FROM friends WHERE user_id_2='$display_user_id' AND user_id_1='$user_id'";
						$result=mysqli_query($conn, $sql);
						if($row=mysqli_fetch_assoc($result)){
							?>
							<button class="button" onclick="function_remove_friend(<?php echo $_SESSION['display_user_id']?>)">
							<?php echo $lang_remove_friend_request?></button>
							<?php
						}
						else{
							?>
							<button class="button" onclick="function_add_friend_id(<?php echo $_SESSION['display_user_id']?>)">
							<?php echo $lang_send_friend_request?></button>
							<?php
						}
					}
					?>
				</div>
				<?php
			}
		}
		?>
	</div>
	<?php
}