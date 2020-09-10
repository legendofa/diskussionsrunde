<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/display_group_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/change_group_settings.php';
if(isset($_SESSION['user_id'])){
	$display_group_id=$_SESSION['display_group_id'];
	$sql="SELECT group_name FROM groups WHERE group_id='$display_group_id'";
	$result=mysqli_query($conn, $sql);
	if($row=mysqli_fetch_assoc($result)){
		$display_group_name=$row['group_name'];
	}
	?>
	<script>
		function_visibility_hamburger()
	</script>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div class="normal_text" id="content_headline" onclick="function_group_id(<?php echo $display_group_id?>)"><?php echo $display_group_name?></div>
	<div id="display">
		<?php
		$sql="SELECT * FROM groupmembers WHERE user_id='$user_id' AND group_id='$display_group_id'";
		$result=mysqli_query($conn, $sql);
		if($row=mysqli_fetch_assoc($result)){
			if($row['permission']==1){
				?>
				<button class="button" onclick="function_leave_group(<?php echo $_SESSION['display_group_id']?>)"><?php echo $lang_leave_group?></button>
				<?php
			}
			if($row['permission']==2){
				$sql="SELECT * FROM groups WHERE group_id='$display_group_id'";
				$result=mysqli_query($conn, $sql);
				if($row=mysqli_fetch_assoc($result)){
					?>
					<div class="normal_text settings_text"><?php echo $lang_group_visibility?>:</div>
					<select class="input" id="select1" type="text" name="status">
						<option value="2"><?php echo $lang_public?></option>
						<option value="0"><?php echo $lang_private?></option>
					</select>
					<button class="wide_button" onclick="function_change_group_settings($('#select1').val())">
					<?php echo $lang_change_visibility?></button>
					<button class="wide_button" onclick="function_delete_group(<?php echo $_SESSION['display_group_id']?>)">
					<?php echo $lang_delete_group?></button>
					<script>
						$('#select1').val('<?php echo $row['group_visibility']?>');
					</script>
					<?php
				}
			}
		}
		else{
			?>
			<button class="button" onclick="function_add_group_id(<?php echo $display_group_id?>)"><?php echo $lang_join_group?></button>
			<?php
		}
		?>
	</div>
	<?php
}