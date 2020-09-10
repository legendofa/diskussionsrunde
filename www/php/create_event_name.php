<?php
if(isset($_POST['create_event_name'])&&isset($_POST['create_youtube_id'])&&isset($_POST['create_party_1'])&&isset($_POST['create_party_2'])){
	$create_event_name=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['create_event_name']));
	$create_youtube_id=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['create_youtube_id']));
	$create_party_1=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['create_party_1']));
	$create_party_2=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['create_party_2']));
	$sql="SELECT * FROM events WHERE event_name='$create_event_name'";
	$result=mysqli_query($conn, $sql);
	if(!$row=mysqli_fetch_assoc($result)){
		$sql="INSERT INTO events (event_name, youtube_id, party_1, party_2) VALUES ('$create_event_name', '$create_youtube_id', '$create_party_1', '$create_party_2')";
		$result=mysqli_query($conn, $sql);
	}
}