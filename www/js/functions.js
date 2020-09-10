var var_value=[];
var var_event_id;
var var_group_id;
var var_friend_user_id;
var var_menu;
var echo=new XMLHttpRequest();
var map={13: false, 17: false};
var timeout;
function function_settings(){
	$('#content').load('../ajax/settings.php',{
		settings: 1
	});
}
function function_display_user_id(display_user_id){
	$('#content').load('../ajax/display_user_id.php',{
		display_user_id: display_user_id
	});
}
function function_display_group_id(display_group_id){
	$('#content').load('../ajax/display_group_id.php',{
		display_group_id: display_group_id
	});
}
function function_display_create_event(){
	$('#content').load('../ajax/display_create_event.php',{
		create_event: 1
	});
}
function function_display_create_group(){
	$('#content').load('../ajax/display_create_group.php',{
		create_group: 1
	});
}
function function_event_id(event_id){
	$('#content').load('../ajax/event_id.php',{
		event_id: event_id
	});
}
function function_group_id(group_id){
	function_menu(menu=2);
	$('#content').load('../ajax/group_id.php',{
		group_id: group_id
	});
}
function function_friend_user_id(friend_user_id){
	function_menu(menu=3);
	$('#content').load('../ajax/friend_user_id.php',{
		friend_user_id: friend_user_id
	});
}
function function_change_status(status){
	$('#user').load('../ajax/user.php',{
		status: status
	});
}
function function_change_privacy_settings(){
	if($('#checkbox1').is(':checked')){
		show_first_name=1
	}
	else{
		show_first_name=0
	}
	if($('#checkbox2').is(':checked')){
		show_last_name=1
	}
	else{
		show_last_name=0
	}
	if($('#checkbox3').is(':checked')){
		show_gender=1
	}
	else{
		show_gender=0
	}
	if($('#checkbox4').is(':checked')){
		show_party=1
	}
	else{
		show_party=0
	}
	$('#content').load('../ajax/settings.php',{
		show_first_name: show_first_name,
		show_last_name: show_last_name,
		show_party: show_party,
		show_gender: show_gender
	});
}
function function_change_party(party){
	$('#content').load('../ajax/settings.php',{
		party: party
	});
}
function function_change_password(password, new_password, confirm_new_password){
	$('#content').load('../ajax/settings.php',{
		password: password,
		new_password: new_password,
		confirm_new_password: confirm_new_password
	});
}
function function_change_group_settings(group_visibility){
	$('#content').load('../ajax/display_group_id.php',{
		group_visibility: group_visibility
	});
}
function function_menu(menu){
	if($('#user').css('display')!='none'){
		$('#sidecontent').load('../ajax/sidecontent.php',{
			menu: menu
		});
		$('#menu').load('../ajax/menu.php',{
			menu: menu
		},/*function_menu_preload(menu)*/);
	}
}
function function_search1(search1){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		search1: search1
	});
}
function function_search2(search2){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		search2: search2
	});
}
function function_search3(search3){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		search3: search3
	});
}
function function_search4(search4){
	$('body').load('events.php',{
		search4: search4
	});
}
function function_search5(search5){
	$('body').load('events.php',{
		search5: search5
	});
}
function function_search6(search6){
	$('body').load('events.php',{
		search6: search6
	});
}
function function_unset_search(menu){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		unset_search: menu
	});
}
function function_create_event(create_event_name, create_youtube_id, create_party_1, create_party_2){
	if(confirm("Event wird erstellt")){
		$('#sidecontent').load('../ajax/sidecontent.php',{
			create_event_name: create_event_name,
			create_youtube_id: create_youtube_id,
			create_party_1: create_party_1,
			create_party_2: create_party_2
		});
	}
}
function function_pin_event_id(pin_event_id){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		pin_event_id: pin_event_id
	});
}
function function_create_group(create_group_name){
	if(confirm("Gruppe wird erstellt")){
		$('#sidecontent').load('../ajax/sidecontent.php',{
			create_group_name: create_group_name
		});
	}
}
function function_add_group_id(add_group_id){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		add_group_id: add_group_id
	});
}
function function_add_friend_id(add_friend_id){
	$('#sidecontent').load('../ajax/sidecontent.php',{
		add_friend_id: add_friend_id
	});
	$('#content').load('../ajax/display_user_id.php',{
		add_friend_id: display_user_id
	});
}
function function_delete_group(delete_group_id){
	if(confirm("Gruppe wird un­wi­der­ruf­lich gelöscht")){
		$('#sidecontent').load('../ajax/sidecontent.php',{
			delete_group_id: delete_group_id
		});
	}
}
function function_leave_group(leave_group_id){
	if(confirm("Gruppe wird verlassen")){
		$('#sidecontent').load('../ajax/sidecontent.php',{
			leave_group_id: leave_group_id
		});
	}
}
function function_remove_friend(remove_friend_id){
	if(confirm("Freund wird entfernt")){
		$('#sidecontent').load('../ajax/sidecontent.php',{
			remove_friend_id: remove_friend_id
		});
		$('#content').load('../ajax/display_user_id.php',{
			remove_friend_id: display_user_id
		});
	}
}
function function_comment1(comment){
	$('#event').load('../ajax/event_id_comment.php',{
		comment: comment,
		player_time: 0
	});
}
function function_comment2(comment){
	$('#content').load('../ajax/group_id.php',{
		comment: comment,
		player_time: 0
	});
}
function function_comment3(comment){
	$('#content').load('../ajax/friend_user_id.php',{
		comment: comment,
		player_time: 0
	});
}
function function_dimensions(){
	var_value[1]=$('#sidecontent').width();
	var_value[2]=$('#framediv').height();
	//console.log(var_value);
}
function function_readURL(input, div, text){
	if(input.files&&input.files[0]){
		var reader=new FileReader();
		reader.onload=function(e){
			$(div).attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
		$(text).css('display', 'block');
	}
}
function function_hover_add(hover_li){
	$(hover_li).css('background-color', '#2B99CE');
	$(hover_li).css('color', 'white');
	$(hover_li).css('cursor', 'pointer');
	$(hover_li).css('transition-duration', '.25s');
}
function function_hover_decline(hover_li){
	$(hover_li).css('background-color', '#424242');
	$(hover_li).css('color', 'white');
	$(hover_li).css('cursor', 'pointer');
	$(hover_li).css('transition-duration', '.25s');
}
function function_menu_load(menu){
	echo.open("get", "../php/echo.php", true);
	echo.send();
	echo.onload=function(){
		var res=this.responseText.split(",");
		var_event_id=res[0];
		var_group_id=res[1];
		var_friend_user_id=res[2];
		var_menu=res[3];
		$('#menu'+var_menu).css('background-color', '#424242');
		$('#menu'+var_menu).css('color', 'white');
		$('#menu').removeAttr('style');
	};
}
function function_visibility_sidecontent(){
	if($('#user').css('display')!='none'){
		$('#hamburger').css('display', 'inline');
		$('#hamburger_mobile').css('display', 'none');
		$('#user').css('display', 'none');
		$('#menu').css('display', 'none');
		$('#sidecontent').css('display', 'none');
	}
	else{
		$('#hamburger').css('display', 'none');
		$('#hamburger_mobile').css('display', 'inline');
		$('#user').css('display', 'inline');
		$('#menu').css('display', 'grid');
		$('#sidecontent').css('display', 'inline');
	}
}
function function_visibility_hamburger(){
	if($('#user').css('display')=='none'){
		$('#hamburger').css('display', 'inline');
	}
}
document.onmousemove=function(){
	clearTimeout(timeout);
	timeout=setTimeout(function(){open('../php/logout.php','_self')}, 900000);
}
function function_hide_header(){
	if($('#homepage').width()==300){
		console.time();
		$height=$('#content').scrollTop();
		$('#header').css('height', 65-$height);
	}
}
$(document).keydown(function(e){
	if(e.keyCode in map){
		map[e.keyCode]=true;
		if(map[13]&&map[17]){
			if($('#comment1').is(':focus')){
				function_comment1($('#comment1').val(), 0);
			}
			if($('#comment2').is(':focus')){
				function_comment2($('#comment2').val(), 0);
			}
			if($('#comment3').is(':focus')){
				function_comment3($('#comment3').val(), 0);
			}
		}
	}
}).keyup(function(e){
	if(e.keyCode in map){
		map[e.keyCode]=false;
	}
});
$(document).keypress(function(e){
	if(e.which==13){
		if($('#search1').is(':focus')){
			function_search1($('#search1').val());
		}
		if($('#search2').is(':focus')){
			function_search2($('#search2').val());
		}
		if($('#search3').is(':focus')){
			function_search3($('#search3').val());
		}
	}
});
function function_callback(){
	$('body').mouseup(function(){
		$('#iframe').css('pointer-events', 'auto');
	});
	$('#sidecontent_handle').mousedown(function(){
		$('#iframe').css('pointer-events', 'none');
	});
	$('#frame_handle').mousedown(function(){
		$('#iframe').css('pointer-events', 'none');
	});
}
function function_callback_sidecontent(){
	$(function(){
		$('#sidecontent').resizable({
			minWidth: 305,
			handles:{
				'w': '#sidecontent_handle'
			}
		});
	});
}