<?php
include '../php/variables.php';
include '../php/change_group_settings.php';
?>
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