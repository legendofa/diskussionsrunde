<?php 
error_reporting(0);
include $_SERVER["DOCUMENT_ROOT"].'/php/variables.php';
echo $_SESSION['event_id'].",".$_SESSION['group_id'].",".$_SESSION['friend_user_id'].",".$_SESSION['menu'].",".$_SESSION['dimensions'][0].",".$_SESSION['dimensions'][1].",".$_SESSION['dimensions'][2];