<?php
if(isset($_SESSION['language'])){
	$language=$_SESSION['language'];
}
else{
	$language="en";
}
switch($language){
	case "en":
		# chat
		$lang_remove_event="Remove event";

		# create event1
		$lang_create_event="Create event";
		$lang_event_name="Event name";
		$lang_video_id="Video id";
		$lang_party_1="Party 1";
		$lang_party_2="Party 2";

		# create group
		$lang_create_group="Create group";
		$lang_group_name="Group name";

		# groups
		$lang_group_visibility="Group visibility";
		$lang_leave_group="Leave group";
		$lang_public="Public";
		$lang_private="Private";
		$lang_change_visibility="Change visibility";
		$lang_delete_group="Delete group";
		$lang_join_group="Join group";

		# users
		$lang_unfriend="Unfriend";
		$lang_remove_friend_request="Remove friend request";
		$lang_send_friend_request="Send friend request";

		# events
		$lang_comment="Comment";

		# menu
		$lang_events="Events";
		$lang_groups="Groups";
		$lang_friends="Friends";

		# settings
		$lang_profile="Profile";
		$lang_username="Username";
		$lang_name="Name";
		$lang_party="Party";
		$lang_political_orientation="Political orientation";
		$lang_gender="Gender";
		$lang_personal_message="Personal message";
		$lang_user_state="User state";
		$lang_online="Online";
		$lang_away="Away";
		$lang_busy="Busy";
		$lang_invisible="Invisible";
		$lang_change_user_state="Change user state";
		$lang_logo_color="Logo color";
		$lang_dark="Dark";
		$lang_bright="Bright";
		$lang_zoom="Zoom";
		$lang_language="Language";
		$lang_file_upload="File upload";
		$lang_background_image="Background image";
		$lang_profile_picture="Profile picture";
		$lang_change_settings="Change settings";
		$lang_privacy_settings="Privacy settings";
		$lang_show_first_name="Show first name";
		$lang_show_last_name="Show last name";
		$lang_show_gender="Show gender";
		$lang_show_party="Show party";
		$lang_change_privacy_settings="Change privacy settings";
		$lang_political_orientation="Political orientation";
		$lang_conservative="Conservative";
		$lang_left="Left";
		$lang_ecologial="Ecologial";
		$lang_social_democratic="Social democratic";
		$lang_communist="Communist";
		$lang_change_party="Change party";
		$lang_password="Password";
		$lang_new_password="New password";
		$lang_repeat_new_password="Repeat new password";
		$lang_change_password="Change password";

		# sidecontent
		$lang_search="Search";
		$lang_create_event="Create event";
		$lang_pinned="Pinned";
		$lang_most_recent="Most recent";
		$lang_unpin_event="Unpin event";
		$lang_pin_event="Pin event";
		$lang_requested="Requested";
		$lang_member="Member";
		$lang_friend_requests="Friend requests";
		$lang_your_friends="Your friends";

		# index
		$lang_user_authentification="User authentification";
		$lang_login="Login";
		$lang_account_creation_successful="Account creation successful";
		$lang_you_are_not_logged_in="You are not logged in";
		$lang_register="Register";

		# signup
		$lang_logout="Logout";
		$lang_user_data="User data";
		$lang_prename="Prename";
		$lang_surname="Surname";
		$lang_email="Email";
		$lang_male="Male";
		$lang_female="Female";
		$lang_confirm_password="Confirm password";
		$lang_create_user="Create user";

		# time
		$lang_sunday="Sunday";
		$lang_monday="Monday";
		$lang_tuesday="Tuesday";
		$lang_wednesday="Wednesday";
		$lang_thursday="Thursday";
		$lang_friday="Friday";
		$lang_saturday="Saturday";
		$lang_january="January";
		$lang_february="February";
		$lang_march="March";
		$lang_april="April";
		$lang_mai="Mai";
		$lang_june="June";
		$lang_july="July";
		$lang_august="August";
		$lang_september="September";
		$lang_october="October";
		$lang_november="November";
		$lang_december="December";
		break;
	case "de":
		# chat
		$lang_remove_event="Event entfernen";

		# create event
		$lang_create_event="Event erstellen";
		$lang_event_name="Eventname";
		$lang_video_id="VideoID";
		$lang_party_1="Partei 1";
		$lang_party_2="Partei 2";

		# create group
		$lang_create_group="Gruppe erstellen";
		$lang_group_name="Gruppenname";

		# groups
		$lang_group_visibility="Gruppensichtbarkeit";
		$lang_leave_group="Gruppe verlassen";
		$lang_public="Öffentlich";
		$lang_private="Privat";
		$lang_change_visibility="Sichtbarkeit ändern";
		$lang_delete_group="Gruppe löschen";
		$lang_join_group="Gruppe beitreten";

		# users
		$lang_unfriend="Freund entfernen";
		$lang_remove_friend_request="Freundschaftsanfrage zurückziehen";
		$lang_send_friend_request="Freundschaftsanfrage senden";

		# events
		$lang_comment="Kommentar";

		# menu
		$lang_events="Events";
		$lang_groups="Gruppen";
		$lang_friends="Freunde";

		# settings
		$lang_profile="Profil";
		$lang_username="Benutzername";
		$lang_name="Name";
		$lang_party="Party";
		$lang_political_orientation="Politische Orientierung";
		$lang_gender="Geschlecht";
		$lang_personal_message="Persönliche Nachricht";
		$lang_user_state="Status";
		$lang_online="Online";
		$lang_away="Abwesend";
		$lang_busy="Beschäftigt";
		$lang_invisible="Unsichtbar";
		$lang_change_user_state="Status ändern";
		$lang_logo_color="Logofarbe";
		$lang_dark="dunkel";
		$lang_bright="hell";
		$lang_zoom="Zoom";
		$lang_language="Sprache";
		$lang_file_upload="Dateiupload";
		$lang_background_image="Hintergrundbild";
		$lang_profile_picture="Profilbild";
		$lang_change_settings="Einstellungen ändern";
		$lang_privacy_settings="Privatsphäreeinstellungen";
		$lang_show_first_name="Vorname anzeigen";
		$lang_show_last_name="Nachname anzeigen";
		$lang_show_gender="Geschlecht anzeigen";
		$lang_show_party="Partei anzeigen";
		$lang_change_privacy_settings="Privatsphäre ändern";
		$lang_political_orientation="Politische Orientierung";
		$lang_conservative="Konservativ";
		$lang_left="Links";
		$lang_ecologial="Grün";
		$lang_social_democratic="Sozialdemokratisch";
		$lang_communist="Kommunistisch";
		$lang_change_party="Partei ändern";
		$lang_password="Passwort";
		$lang_new_password="Neues Passwort";
		$lang_repeat_new_password="Neues Passwort wiederholen";
		$lang_change_password="Passwort ändern";

		# sidecontent
		$lang_search="Suchen";
		$lang_create_event="Event erstellen";
		$lang_pinned="Angepinnt";
		$lang_most_recent="Neuste";
		$lang_unpin_event="Event entfernen";
		$lang_pin_event="Event anpinnen";
		$lang_requested="Angefragt";
		$lang_member="Beigetreten";
		$lang_friend_requests="Freundschaftsanfragen";
		$lang_your_friends="Deine Freunde";

		# index
		$lang_user_authentification="Anmelden";
		$lang_login="Login";
		$lang_account_creation_successful="Das Benutzerkonto wurde erfolgreich erstellt!";
		$lang_you_are_not_logged_in="Du bist nicht angemeldet!";
		$lang_register="Registrieren";

		# signup
		$lang_logout="Abmelden";
		$lang_user_data="Nutzerdaten";
		$lang_prename="Vorname";
		$lang_surname="Nachname";
		$lang_email="Email";
		$lang_male="männlich";
		$lang_female="weiblich";
		$lang_confirm_password="Passwort bestätigen";
		$lang_create_user="Nutzer erstellen";

		# time
		$lang_sunday="Sonntag";
		$lang_monday="Montag";
		$lang_tuesday="Dienstag";
		$lang_wednesday="Mittwoch";
		$lang_thursday="Donnerstag";
		$lang_friday="Freitag";
		$lang_saturday="Samstag";
		$lang_january="Januar";
		$lang_february="Februar";
		$lang_march="März";
		$lang_april="April";
		$lang_mai="Mai";
		$lang_june="Juni";
		$lang_july="Juli";
		$lang_august="August";
		$lang_september="September";
		$lang_october="Oktober";
		$lang_november="November";
		$lang_december="Dezember";
		break;
}