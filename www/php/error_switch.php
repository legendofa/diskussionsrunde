<?php
switch($_SESSION['error']){
	case 1:
	echo "Dein Vorname darf keine Leerzeichen enthalten";
	break;
	case 2:
	echo "Dein Vorname muss mindestens zwei Zeichen lang sein";
	break;
	case 3:
	echo "Dein Vorname darf keine Sonderzeichen erhalten";
	break;
	case 4:
	echo "Dein Nachname darf keine Leerzeichen enthalten";
	break;
	case 5:
	echo "Dein Nachname muss mindestens zwei Zeichen lang sein";
	break;
	case 6:
	echo "Dein Nachname darf keine Sonderzeichen erhalten";
	break;
	case 7:
	echo "Dein Benutzername darf keine Leerzeichen enthalten";
	break;
	case 8:
	echo "Dein Benutzername muss mindestens zwei Zeichen lang sein";
	break;
	case 9:
	echo "Dein Benutzername ist schon vergeben";
	break;
	case 10:
	echo "Ungültige Email";
	break;
	case 11:
	echo "Deine Email ist schon vergeben";
	break;
	case 12;
	echo "Dein Passwort darf keine Leerzeichen enthalten";
	break;
	case 13;
	echo "Dein Passwort muss mindestens 10 Zeichen lang sein";
	break;
	case 14:
	echo "Du musst dein Passwort bestätigen";
	break;
	case 15:
	echo "Dein derzeitiges Passwort ist falsch";
	break;
	case 16:
	echo "Dein Passwort wurde erfolgreich geändert";
	break;
}