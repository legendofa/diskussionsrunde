<?php
if(isset($_POST['pin_event_id'])){
	$pin_event_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['pin_event_id']));
	$sql="SELECT * FROM pinned_events WHERE event_id='$pin_event_id' AND user_id='$user_id'";
	$result=mysqli_query($conn, $sql);
	if(!$row=mysqli_fetch_assoc($result)){
		$sql="INSERT INTO pinned_events (user_id, event_id) VALUES ('$user_id', '$pin_event_id')";
		$result=mysqli_query($conn, $sql);
	}
	else{
		$sql="DELETE FROM pinned_events WHERE event_id='$pin_event_id' AND user_id='$user_id'";
		$result=mysqli_query($conn, $sql);
	}
}