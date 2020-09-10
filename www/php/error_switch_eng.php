<?php
switch($_SESSION['error']){
	case 1:
	echo "Your first name has to be continuous!";
	break;
	case 2:
	echo "Your first name has to be at least two characters long!";
	break;
	case 3:
	echo "Your first name should only be written in the english language!";
	break;
	case 4:
	echo "Your last name has to be continuous!";
	break;
	case 5:
	echo "Your last name has to be at least two characters long!";
	break;
	case 6:
	echo "Your last name should be written in the english language!";
	break;
	case 7:
	echo "Your username has to be continuous!";
	break;
	case 8:
	echo "Your username has to be at least two characters long!";
	break;
	case 9:
	echo "Your username is already taken!";
	break;
	case 10:
	echo "Invalid email!";
	break;
	case 11:
	echo "Your email is already taken!";
	break;
	case 12;
	echo "Your password has to be continuous!";
	break;
	case 13;
	echo "Your password has to be at least ten characters long!";
	break;
	case 14:
	echo "You have to confirm your password!";
	break;
	case 15:
	echo "Your current password is wrong!";
	break;
	case 16:
	echo "Your password was successfully changed!";
	break;
}