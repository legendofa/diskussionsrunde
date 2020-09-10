<?php
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/menu.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/search_sidecontent.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/unset_search.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/pin_event_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/create_event_name.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/create_group_name.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/add_group_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/add_friend_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/decline_friend_id.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/delete_group.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/leave_group.php';
include $_SERVER["DOCUMENT_ROOT"].'/php/remove_friend.php';
if(isset($_SESSION['user_id'])){
	?>
	<div class="ui-resizable-handle ui-resizable-e" id="sidecontent_handle"></div>
	<?php
	if($_SESSION['menu']==1){
		?>
		<input class="input" id="search1" type="text" placeholder="<?php echo $lang_search?>">
		<?php
		if($_SESSION['permission']==1){
			?>
			<div class="normal_text_small create_text">
				<div onclick="function_display_create_event()">
					<img id="plus" src="../img/add.svg">
					<?php echo $lang_create_event?>
				</div>
			</div>
			<?php
		}
		if(isset($_SESSION['search_event'])){
			?>
			<div class="typewriter_text li_text">
				<?php echo $lang_search?>:
				<a onclick="function_unset_search(menu=1)"><img id="minus" src="../img/decline.svg"></a>
			</div>
			<?php
			$search_event=$_SESSION['search_event'];
			$sql="SELECT * FROM events WHERE event_name LIKE '%$search_event%'";
			$result=mysqli_query($conn, $sql);
			while($row=mysqli_fetch_assoc($result)){
				$search_data[]=$row;
			}
			foreach($search_data as $row){
				$search_event_id=$row['event_id'];
				$search_event_name=$row['event_name'];
				$sql="SELECT * FROM pinned_events WHERE event_id='$search_event_id' AND user_id='$user_id'";
				$result=mysqli_query($conn, $sql);
				if(!$row=mysqli_fetch_assoc($result)){
					echo "<li id=\"libs".$search_event_id."\"><a onclick=\"function_event_id(search_event_id=".$search_event_id.")\" contextmenu=\"pin_menu".$search_event_id."\">".$search_event_name."</a></li>";
				}
				else{
					echo "<li id=\"libs".$search_event_id."\"><a onclick=\"function_event_id(search_event_id=".$search_event_id.")\" contextmenu=\"unpin_menu".$search_event_id."\">".$search_event_name."<img id=\"pin\" src=\"../img/pin.svg\"></a></li>";
				}
			}
		}
		?>
		<div class="typewriter_text li_text">
			<?php echo $lang_pinned?>:
		</div>
		<?php
		$sql="SELECT * FROM pinned_events WHERE user_id='$user_id'";
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){
			$pinned_data[]=$row;
		}
		foreach($pinned_data as $row){
			$event_id=$row['event_id'];
			?>
			<menu type="context" id="unpin_menu<?php echo $event_id?>">
				<menuitem label="<?php echo $lang_unpin_event?>" icon="../img/nopin.svg" onclick="function_pin_event_id(pin_event_id=<?php echo $event_id?>)"></menuitem>
			</menu> 
			<?php
			$sql="SELECT * FROM events WHERE event_id='$event_id'";
			$result=mysqli_query($conn, $sql);
			if($row=mysqli_fetch_assoc($result)){
				echo "<li id=\"lia".$event_id."\"><a onclick=\"function_event_id(event_id=".$event_id.")\" contextmenu=\"unpin_menu".$event_id."\">".$row['event_name']."<img id=\"pin\" src=\"../img/pin.svg\"></a></li>";
			}
		}
		?>
		<div class="typewriter_text li_text">
			<?php echo $lang_most_recent?>:
		</div>
		<?php
		$sql="SELECT * FROM events";
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){
			$new_data[]=$row;
		}
		foreach($new_data as $row){
			$event_id=$row['event_id'];
			?>
			<menu type="context" id="pin_menu<?php echo $event_id?>">
				<menuitem label="<?php echo $lang_pin_event?>" icon="../img/pin.svg" onclick="function_pin_event_id(pin_event_id=<?php echo $event_id?>)"></menuitem>
			</menu> 
			<?php
			$event_name=$row['event_name'];
			$sql="SELECT * FROM pinned_events WHERE event_id='$event_id' AND user_id='$user_id'";
			$result=mysqli_query($conn, $sql);
			if(!$row=mysqli_fetch_assoc($result)){	
				echo "<li id=\"lib".$event_id."\"><a onclick=\"function_event_id(event_id=".$event_id.")\" contextmenu=\"pin_menu".$event_id."\">".$event_name."</a></li>";
			}
			else{
				echo "<li id=\"lib".$event_id."\"><a onclick=\"function_event_id(event_id=".$event_id.")\" contextmenu=\"unpin_menu".$event_id."\">".$event_name."<img id=\"pin\" src=\"../img/pin.svg\"></a></li>";
			}
		}
	}
	if($_SESSION['menu']==2){
		?>
		<input class="input" id="search2" type="text" placeholder="<?php echo $lang_search?>">
		<div class="normal_text_small create_text">
			<div onclick="function_display_create_group()">
				<img id="plus" src="../img/add.svg">
				<?php echo $lang_create_group?>
			</div>
		</div>
		<?php
		if(isset($_SESSION['search_group'])){
			?>
			<div class="typewriter_text li_text">
				<?php echo $lang_search?>:
				<a onclick="function_unset_search(menu=2)"><img id="minus" src="../img/decline.svg"></a>
			</div>
			<?php
			$search_group=$_SESSION['search_group'];
			$sql="SELECT * FROM groups WHERE group_visibility>0 AND group_name LIKE '%$search_group%'";
			$result=mysqli_query($conn, $sql);
			while($row=mysqli_fetch_assoc($result)){
				$group_search_data[]=$row;
			}
			foreach($group_search_data as $row){
				$search_group_id=$row['group_id'];
				$search_group_name=$row['group_name'];
				echo "<li id=\"lics".$search_group_id."\"><a onclick=\"function_display_group_id(group_id=".$search_group_id.")\">".$search_group_name."</a></li>";
			}
		}
		$sql="SELECT * FROM groupmembers WHERE user_id='$user_id' AND permission==0";
		$result=mysqli_query($conn, $sql);
		if($row=mysqli_fetch_assoc($result)){
			echo "<div class=\"typewriter_text li_text\">".$lang_requested.":</div>";
		}
		while($row=mysqli_fetch_assoc($result)){
			$group_data_1[]=$row;
		}
		foreach($group_data_1 as $row){
			$group_id=$row['group_id'];
			$sql="SELECT * FROM groups WHERE group_id='$group_id'";
			$result=mysqli_query($conn, $sql);
			if($row=mysqli_fetch_assoc($result)){
				echo "<li id=\"lic".$group_id."\"><a onclick=\"function_group_id(group_id=".$group_id.")\">".$row['group_name']."</a></li>";
			}
		}
		?>
		<div class="typewriter_text li_text">
			<?php echo $lang_member?>:
		</div>
		<?php
		$sql="SELECT * FROM groupmembers WHERE user_id='$user_id' AND permission>0";
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){
			$group_data_2[]=$row;
		}
		foreach($group_data_2 as $row){
			$group_id=$row['group_id'];
			$sql="SELECT * FROM groups WHERE group_id='$group_id'";
			$result=mysqli_query($conn, $sql);
			if($row=mysqli_fetch_assoc($result)){
				echo "<li id=\"lic".$group_id."\"><a onclick=\"function_group_id(group_id=".$group_id.")\">".$row['group_name']."</a></li>";
			}
		}
	}
	if($_SESSION['menu']==3){
		?>
		<input class="input" id="search3" type="text" placeholder="<?php echo $lang_search?>">
		<div id="search">
			<?php
			if(isset($_SESSION['search_user'])){
				?>
				<div class="typewriter_text li_text">
					<?php echo $lang_search?>:
					<a onclick="function_unset_search(menu=3)"><img id="minus" src="../img/decline.svg"></a>
				</div>
				<?php
				$search_user=$_SESSION['search_user'];
				$sql="SELECT * FROM users WHERE username LIKE '%$search_user%'";
				$result=mysqli_query($conn, $sql);
				while($row=mysqli_fetch_assoc($result)){
					$search_data[]=$row;
				}
				foreach($search_data as $row){
					$search_user_id=$row['user_id'];
					$search_username=$row['username'];										
					if($search_user_id!=$_SESSION['user_id']){
						echo "<li id=\"lids".$search_user_id."\"><a onclick=\"function_display_user_id(display_user_id=".$search_user_id.")\"><img id=\"profile_picture_small\" src=\"../userdata/profile.svg\">".$search_username."</a><div onclick=\"function_add_friend_id(add_friend_id=".$search_user_id.")\" onmouseover=\"function_hover_add(hover_li=lids".$search_user_id.")\">";
						$sql="SELECT * FROM friends WHERE user_id_1='$user_id' AND user_id_2='$search_user_id'";
						$result=mysqli_query($conn, $sql);
						if(!$row=mysqli_fetch_assoc($result)){
							echo "<img id=\"plus_small\" src=\"../img/add.svg\">";
						}
						echo "</div></li>";
					}
				}
			}
			?>
			<?php
			$sql="SELECT * FROM friends WHERE user_id_2='$user_id'";
			$result=mysqli_query($conn, $sql);
			while($row=mysqli_fetch_assoc($result)){
				$friend_request_data[]=$row;
			}
			foreach($friend_request_data as $row){
				$request_user_id=$row['user_id_1'];
				$sql="SELECT * FROM friends WHERE user_id_1='$user_id' AND user_id_2='$request_user_id'";
				$result=mysqli_query($conn, $sql);
				if(!$row=mysqli_fetch_assoc($result)){							
					$sql="SELECT * FROM users WHERE user_id='$request_user_id'";
					$result=mysqli_query($conn, $sql);
					if($row=mysqli_fetch_assoc($result)){
						?>
						<div class="typewriter_text li_text">
							<?php echo $lang_friend_requests?>
						</div>
						<?php
						echo "<li id=\"lidf".$request_user_id."\"><a onclick=\"function_display_user_id(display_user_id=".$request_user_id.")\"><img id=\"profile_picture_small\" src=\"../".$row['profile_picture']."\">".$row['username']."</a><div onclick=\"function_remove_friend(remove_friend_id=".$request_user_id.")\" onmouseover=\"function_hover_decline(hover_li=lidf".$request_user_id.")\"><img id=\"minus_small\" src=\"../img/decline.svg\"></div><div onclick=\"function_add_friend_id(add_friend_id=".$request_user_id.")\" onmouseover=\"function_hover_add(hover_li=lidf".$request_user_id.")\"><img id=\"plus_small\" src=\"../img/add.svg\"></div></li>";
					}
				}
			}
			?>
		</div>
		<div class="typewriter_text li_text">
			<?php echo $lang_your_friends?>:
		</div>
		<?php
		$sql="SELECT * FROM friends WHERE user_id_1='$user_id'";
		$result=mysqli_query($conn, $sql);
		while($row=mysqli_fetch_assoc($result)){
			$friend_data[]=$row;
		}
		foreach($friend_data as $row){
			$friend_user_id=$row['user_id_2'];
			$sql="SELECT * FROM friends WHERE user_id_2='$user_id' AND user_id_1='$friend_user_id'";
			$result=mysqli_query($conn, $sql);
			if($row=mysqli_fetch_assoc($result)){
				$sql="SELECT * FROM users WHERE user_id='$friend_user_id'";
				$result=mysqli_query($conn, $sql);
				if($row=mysqli_fetch_assoc($result)){
					if($row['status']==0||$row['status']==4){
						echo "<li id=\"lid".$friend_user_id."\"><a onclick=\"function_friend_user_id(friend_user_id=".$friend_user_id.")\"><img id=\"profile_picture_small\" src=\"../".$row['profile_picture']."\">".$row['username']."</a></li>";
					}
					else{
						echo "<li id=\"lid".$friend_user_id."\"><a onclick=\"function_friend_user_id(friend_user_id=".$friend_user_id.")\"><img id=\"profile_picture_small\" src=\"../".$row['profile_picture']."\">".$row['username']."<img id=\"status\" src=\"../img/".$row['status'].".svg\"></a></li>";
					}
				}
			}
		}
	}
	?>
	<script>function_callback_sidecontent();</script>
	<?php
}