<?php
if(isset($_POST['comment'])){
	$comment=$_POST['comment'];
	$comment=htmlspecialchars(mysqli_real_escape_string($conn, $comment));
	$player_time=htmlspecialchars(mysqli_real_escape_string($conn, $_POST['player_time']));
	$_SESSION['player_time']=$player_time;
	$user_id=$_SESSION['user_id'];
	if(isset($_SESSION['event_id'])){
		$event_id=$_SESSION['event_id'];
	}
	else{
		$event_id='0';
	}
	if(isset($_SESSION['group_id'])){
		$group_id=$_SESSION['group_id'];
	}
	else{
		$group_id='0';
	}
	if(isset($_SESSION['friend_user_id'])){
		$friend_user_id=$_SESSION['friend_user_id'];
	}
	else{
		$friend_user_id='0';
	}	
	$badwords=array('dummy');
	if($comment!=''){
		$words=explode(' ', $comment);
		for($k=0; $k<count($words); $k++){
			for($p=0; $p<count($badwords); $p++){
				if(preg_match('/'.$badwords[$p].'/', $words[$k])){
					$replacement;
					for($d=0; $d<strlen($words[$k]); $d++){
						$replacement=$replacement.'*';
					}
					$words[$k]=$replacement;
				}
			}
		}
		$comment=implode(' ', $words);
		$sql="INSERT INTO comments (comment, user_id_1, event_id, group_id, user_id_2, player_time) VALUES ('$comment', '$user_id', '$event_id', '$group_id', '$friend_user_id', '$player_time')";
		$result=mysqli_query($conn, $sql);
	}
}