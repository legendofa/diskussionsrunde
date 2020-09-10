<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/settings.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/change_privacy_settings.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/change_party.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/change_password.php';
if(isset($_SESSION['user_id'])){
	?>
	<script>
		function_visibility_hamburger()
	</script>
	<img id="hamburger" onclick="function_visibility_sidecontent()" src="../img/ham.svg"/>
	<div id="settings">
		<div class="normal_text settings_text"><?php echo $lang_profile?>:</div>
		<div id="settings_user_info">
			<div id="display_user">
				<?php
				$sql="SELECT * FROM users WHERE user_id='$user_id'";
				$result=mysqli_query($conn, $sql);
				if($row=mysqli_fetch_assoc($result)){
					include $_SERVER["DOCUMENT_ROOT"].'/php/display_user_switch.php';
					?>
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
					<?php
				}
				?>
			</div>
		</div>
		<div id="settings_basic">
			<div class="normal_text settings_text"><?php echo $lang_user_state?>:</div>
			<select class="input" id="select1" type="text" name="status">
				<option value="1"><?php echo $lang_online?></option>
				<option value="2"><?php echo $lang_away?></option>
				<option value="3"><?php echo $lang_busy?></option>
				<option value="4"><?php echo $lang_invisible?></option>
			</select>
			<button class="wide_button" onclick="function_change_status($('#select1').val())"><?php echo $lang_change_user_state?></button>
			<form action="../php/change_settings.php" method="POST" enctype="multipart/form-data">
				<div class="normal_text settings_text"><?php echo $lang_personal_message?>:</div>
				<input class="input" id="input1" type="text" name="change_personal_message" placeholder="<?php echo $lang_personal_message?>:">
				<div class="normal_text settings_text"><?php echo $lang_logo_color?>:</div>
				<select class="input" id="select2" type="text" name="change_logo">
					<option value="" disabled selected><?php echo $lang_logo_color?>:</option>
					<option value=0><?php echo $lang_dark?></option>
					<option value=1><?php echo $lang_bright?></option>
				</select>
				<div class="normal_text settings_text"><?php echo $lang_zoom?>:</div>
				<select class="input" id="select4" type="text" name="zoom">
					<option value=70>70%</option>
					<option value=80>80%</option>
					<option value=90>90%</option>
					<option value=95>95%</option>
					<option value=98>98%</option>
					<option value=100>100%</option>
					<option value=110>110%</option>
				</select>
				<div class="normal_text settings_text"><?php echo $lang_language?>:</div>
				<select class="input" id="select5" type="text" name="language">
					<option value="en">EN</option>
					<option value="de">DE</option>
				</select>
				<input id="file1" type="file" onchange="function_readURL(this, div='#bground_settings', text='#bground_text')" name="background_image">
				<button class="wide_button nohover" type="button"><?php echo $lang_background_image?></button>
				<input id="file2" type="file" onchange="function_readURL(this, div='#profile_picture_settings', text='#profile_picture_text')" name="profile_picture">
				<button class="wide_button nohover" type="button"><?php echo $lang_profile_picture?></button>			
				<button class="wide_button" type="submit"><?php echo $lang_change_settings?></button>
			</form>
		</div>
		<div id="privacy_settings">
			<div class="normal_text settings_text"><?php echo $lang_privacy_settings?>:</div>
			<div class="normal_text_small settings_text"><?php echo $lang_show_first_name?>:
				<input id="checkbox1" type="checkbox" name="show_first_name">
			</div>
			<div class="normal_text_small settings_text"><?php echo $lang_show_last_name?>:
				<input id="checkbox2" type="checkbox" name="show_last_name">
			</div>
			<div class="normal_text_small settings_text"><?php echo $lang_show_gender?>:
				<input id="checkbox3" type="checkbox" name="show_gender">
			</div>
			<div class="normal_text_small settings_text"><?php echo $lang_show_party?>:
				<input id="checkbox4" type="checkbox" name="show_party">
			</div>
			<button class="wide_button" onclick="function_change_privacy_settings()"><?php echo $lang_change_privacy_settings?></button>
			<div class="normal_text settings_text"><?php echo $lang_political_orientation?>:</div>
			<select class="input" id="select3" type="text" name="party">
				<script>
					var party="<?php echo $lang_conservative?>','<?php echo $lang_left?>','<?php echo $lang_ecologial?>','<?php echo $lang_social_democratic?>','<?php echo $lang_communist?>";
					var count=party.split("','").length;
					while(count>0){
						var res=party.split("','", 1);
						$('#select3').append("<option value=\""+res+"\">"+res+"</option>");
						party=party.replace(res+"','", "");
						count--;
					}
				</script>
			</select>
			<button class="wide_button" onclick="function_change_party($('#select3').val())"><?php echo $lang_change_party?></button>
			<div class="normal_text settings_text"><?php echo $lang_password?>:</div>
			<input class="input" id="input2" type="password" placeholder="<?php echo $lang_password?>">
			<input class="input" id="input3" type="text" placeholder="<?php echo $lang_new_password?>">
			<input class="input" id="input4" type="text" placeholder="<?php echo $lang_repeat_new_password?>">
			<button class="wide_button" onclick="function_change_password($('#input2').val(), $('#input3').val(), $('#input4').val())"><?php echo $lang_change_password?></button>
			<div class="error normal_text settings_text">
				<?php
				include $_SERVER["DOCUMENT_ROOT"].'/php/error_switch.php';
				?>
			</div>
		</div>
		<div>
			<div class="normal_text settings_text" id="bground_text"><?php echo $lang_background_image?>:</div>
			<img id="bground_settings" src="" alt="">
		</div>
		<div>
			<div class="normal_text settings_text" id="profile_picture_text"><?php echo $lang_profile_picture?>:</div>
			<img id="profile_picture_settings" src="" alt="">
		</div>
		<script>
			$('#select1').val('<?php echo $_SESSION['status']?>');
			$('#input1').val('<?php echo $_SESSION['personal_message']?>');
			$('#select2').val('<?php echo $_SESSION['logo']?>');
			if('<?php echo $_SESSION['show_first_name']?>'==1){$('#checkbox1').prop("checked", true)};
			if('<?php echo $_SESSION['show_first_name']?>'==0){$('#checkbox1').prop("checked", false)};
			if('<?php echo $_SESSION['show_last_name']?>'==1){$('#checkbox2').prop("checked", true)};
			if('<?php echo $_SESSION['show_last_name']?>'==0){$('#checkbox2').prop("checked", false)};
			if('<?php echo $_SESSION['show_gender']?>'==1){$('#checkbox3').prop("checked", true)};
			if('<?php echo $_SESSION['show_gender']?>'==0){$('#checkbox3').prop("checked", false)};
			if('<?php echo $_SESSION['show_party']?>'==1){$('#checkbox4').prop("checked", true)};
			if('<?php echo $_SESSION['show_party']?>'==0){$('#checkbox4').prop("checked", false)};
			$('#select3').val('<?php echo $_SESSION['party']?>');
			$('#select4').val('<?php echo $_SESSION['zoom']?>');
		</script>
	</div>
	<?php
}