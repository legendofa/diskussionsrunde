<?php
if(isset($_SESSION['user_id'])){
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$data[]=$row;
		}
		$previous_timestamp;
		foreach($data as $row){
			$user_id=$row['user_id_1'];
			$comment=$row['comment'];
			$words=explode(' ', $comment);
			for($k=0; $k<count($words); $k++){
				if(preg_match('#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?#si', $words[$k])){
					if(preg_match('/.*\.(jpg|svg|png|jpeg|gif)/', $words[$k])){
						$words[$k]='<a href=//'.$words[$k].'>'.$words[$k].'</a><br><br><a data-lightbox="chat" href='.$words[$k].'>'.'<img id="chat_image" src='.$words[$k].'>'.'</a>';
					}
					else{
						$words[$k]='<a href=//'.$words[$k].'>'.$words[$k].'</a>';
					}
				}
			}
			$comment=implode(' ', $words);
			$timestamp=$row['timestamp'];
			$sql="SELECT username,profile_picture FROM users WHERE user_id='$user_id'";
			$result=mysqli_query($conn, $sql);
			if($row=mysqli_fetch_assoc($result)){
				$username=$row['username'];
				$profile_picture=$row['profile_picture'];
			}
			date_default_timezone_set('Etc/UTC');
			$zone=new DateTimeZone('Europe/Berlin');
			$datetime=new DateTime($timestamp);
			$datetime->setTimezone($zone);
			$previous_datetime=new DateTime($previous_timestamp);
			$previous_datetime->setTimezone($zone);
			$weekday_timestamp=$datetime->format('w');
			$day=$datetime->format('d');
			$month_timestamp=$datetime->format('m');
			$year=$datetime->format('y');
			include $_SERVER["DOCUMENT_ROOT"].'/php/time_switch.php';
			if($datetime->format('Y-m-d')!=$previous_datetime->format('Y-m-d')){
				?>
				<div class="timestamp_border">
					<div class="timestamp_line"></div>
					<div class="timestamp_heading"><div><?php echo $weekday." ".$day.". ".$month." ".$year?></div></div>
				</div>
				<?php
			}
			if($user_id==$_SESSION['user_id']){
				?>
				<menu type="context" id="unpin_menu<?php echo $event_id?>">
				<menuitem label="<?php echo $lang_remove_event?>" icon="../img/nopin.svg" onclick="function_pin_event_id(pin_event_id=<?php echo $event_id?>)"></menuitem>
			</menu> 
				<div class="chatbubble_left">
					<img class="profile_picture_chat_left" onclick="function_display_user_id(display_user_id=<?php echo $user_id?>)" src="../<?php echo $profile_picture?>">
					<div class="left-tri"></div>
					<div class="username" onclick="function_display_user_id(display_user_id=<?php echo $user_id?>)"><?php echo $username?></div>
					<div class="timestamp"><?php echo $datetime->format('H:i:s')?></div>
					<div class="comment_left"><?php echo $comment?></div>
				</div>
				<?php
			}
			else{
				?>
				<div class="chatbubble_right">
					<div class="username" onclick="function_display_user_id(display_user_id=<?php echo $user_id?>)"><?php echo $username?></div>
					<div class="timestamp"><?php echo $datetime->format('H:i:s')?></div>
					<div class="right-tri"></div>
					<img class="profile_picture_chat_right" onclick="function_display_user_id(display_user_id=<?php echo $user_id?>)" src="../<?php echo $profile_picture?>">
					<div class="comment_right"><?php echo $comment?></div>
				</div>
				<?php
			}
			$previous_timestamp=$timestamp;
		}
	}
}