<script>
	/*<div id="dom_target_1" style="display: none;"><?php echo $_SESSION['event_id']?></div>
	<div id="dom_target_2" style="display: none;"><?php echo $_SESSION['group_id']?></div>
	<div id="dom_target_3" style="display: none;"><?php echo $_SESSION['friend_user_id']?></div>
	<div id="dom_target_4" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_5" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_6" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_7" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_8" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_9" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_10" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_11" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_12" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_13" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_14" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_15" style="display: none;"><?php echo $_SESSION['menu']?></div>
	<div id="dom_target_16" style="display: none;"><?php echo $_SESSION['menu']?></div>*/
	var tag=document.createElement('script');
	tag.src="https://www.youtube.com/iframe_api";
	var firstScriptTag=document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var value=[];
	/*var event_id=$('#dom_target_1').val();
	var group_id=$('#dom_target_2').val();
	var friend_user_id=$('#dom_target_3').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();
	var fooo=$('#dom_target_1').val();*/
	var event_interval;
	var group_interval;
	var friend_user_interval;
	function function_settings(){
		$('#content').load('ajax/settings.php',{
			settings: 1,
			dimensions: value
		});
	}
	function function_display_user_id(display_user_id){
		$('#content').load('ajax/display_user_id.php',{
			display_user_id: display_user_id,
			dimensions: value
		});
	}
	function function_display_group_id(display_group_id){
		$('#content').load('ajax/display_group_id.php',{
			display_group_id: display_group_id,
			dimensions: value
		});
	}
	function function_display_create_event(){
		$('#content').load('ajax/display_create_event.php',{
			create_event: 1,
			dimensions: value
		});
	}
	function function_display_create_group(){
		$('#content').load('ajax/display_create_group.php',{
			create_group: 1,
			dimensions: value
		});
	}
	function function_event_id(event_id){
		clearInterval(event_interval);
		$('#content').load('ajax/event_id.php',{
			event_id: event_id,
			dimensions: value
		});
	}
	function function_group_id(group_id){
		menu(menu=2);
		clearInterval(group_interval);
		$('#content').load('ajax/group_id.php',{
			group_id: group_id,
			dimensions: value
		});
	}
	function function_friend_user_id(friend_user_id){
		menu(menu=3);
		clearInterval(friend_user_interval);
		$('#content').load('ajax/friend_user_id.php',{
			friend_user_id: friend_user_id,
			dimensions: value
		});
	}
	function function_change_status(status){
		$('#user').load('ajax/change_status.php',{
			status: status,
			dimensions: value
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
			show_party=1
		}
		else{
			show_party=0
		}
		if($('#checkbox4').is(':checked')){
			show_gender=1
		}
		else{
			show_gender=0
		}
		$('#privacy_settings').load('ajax/change_privacy_settings.php',{
			show_first_name: show_first_name,
			show_last_name: show_last_name,
			show_party: show_party,
			show_gender: show_gender,
			dimensions: value
		});
	}
	function function_change_party(party){
		$('#privacy_settings').load('ajax/change_party.php',{
			party: party,
			dimensions: value
		});
	}
	function function_change_group_settings(group_visibility){
		$('#content').load('ajax/change_group_settings.php',{
			group_visibility: group_visibility,
			dimensions: value
		});
	}
	function function_menu(menu){
		$('#sidecontent').load('ajax/sidecontent.php',{
			menu: menu,
			dimensions: value
		});
		$('#menu').load('ajax/menu.php',{
			menu: menu,
			dimensions: value
		});
	}
	function function_search1(search1){
		$('#sidecontent').load('ajax/sidecontent.php',{
			search1: search1,
			dimensions: value
		});
	}
	function function_search2(search2){
		$('#sidecontent').load('ajax/sidecontent.php',{
			search2: search2,
			dimensions: value
		});
	}
	function function_search3(search3){
		$('#sidecontent').load('ajax/search3.php',{
			search3: search3,
			dimensions: value
		});
	}
	function function_search4(search4){
		$('body').load('events.php',{
			search4: search4,
			dimensions: value
		});
	}
	function function_search5(search5){
		$('body').load('events.php',{
			search5: search5,
			dimensions: value
		});
	}
	function function_search6(search6){
		$('body').load('events.php',{
			search6: search6,
			dimensions: value
		});
	}
	function function_unset_search(menu){
		$('#sidecontent').load('ajax/sidecontent.php',{
			unset_search: menu,
			dimensions: value
		});
	}
	function function_create_event(create_event_name, create_youtube_id, create_party_1, create_party_2){
		$('body').load('events.php',{
			create_event_name: create_event_name,
			create_youtube_id: create_youtube_id,
			create_party_1: create_party_1,
			create_party_2: create_party_2,
			dimensions: value
		});
	}
	function function_pin_event_id(pin_event_id){
		$('body').load('events.php',{
			pin_event_id: pin_event_id,
			dimensions: value
		});
	}
	function function_create_group(create_group_name){
		$('body').load('events.php',{
			create_group_name: create_group_name,
			dimensions: value
		});
	}
	function function_add_group_id(add_group_id){
		$('body').load('events.php',{
			add_group_id: add_group_id,
			dimensions: value
		});
	}
	function function_add_friend_id(add_friend_id){
		$('body').load('events.php',{
			add_friend_id: add_friend_id,
			dimensions: value
		});
	}
	function function_decline_friend_id(decline_friend_id){
		$('body').load('events.php',{
			decline_friend_id: decline_friend_id,
			dimensions: value
		});
	}
	function function_comment(comment, player_time){
		$('body').load('events.php',{
			comment: comment,
			player_time: player_time,
			dimensions: value
		});
	}
	function function_dimensions(){
		value[0]=$('#header').height();
		value[1]=$('#sidecontent').width();
		value[2]=$('#framediv').height();
		console.log(value);
	}
	$(function(){
		$('#header').resizable({
			maxHeight: 500,
			handles: 's'
		});
	});
	$(function(){
		$('#sidecontent').resizable({
			minWidth: 300,
			handles:{
				'w': '#sidecontent_handle'
			}
		});
	});
	$(function(){
		$('#framediv').resizable({
			maxHeight: 700,
			handles:{
				's': '#frame_handle'
			}
		});
	});
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
	function function_hover_create_event(){
		$('.create_text').css('background-color', '#2B99CE');
		$('.create_text').css('color', 'white');
		$('.create_text').css('cursor', 'pointer');
		$('.create_text').css('transition-duration', '.25s');
	}
	function function_hover_create_group(){
		$('.create_text').css('background-color', '#2B99CE');
		$('.create_text').css('color', 'white');
		$('.create_text').css('cursor', 'pointer');
		$('.create_text').css('transition-duration', '.25s');
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
	$(document).ready(function(){
		if($("#event").text().length>0){
			event_interval=setInterval(function(){
				$('#event').load('ajax/chat.php',{
					event_id: event_id
				});
			}, Math.floor((Math.random()*100)+1)+2500);
		}
		if($("#group").text().length>0){
			group_interval=setInterval(function(){
				$('#group').load('ajax/chat.php',{
					group_id: group_id
				});
			}, Math.floor((Math.random()*100)+1)+2500);
		}
		if($("#friend_user").text().length>0){
			friend_user_interval=setInterval(function(){
				$('#friend_user').load('ajax/chat.php',{
					friend_user_id: friend_user_id
				});
			}, Math.floor((Math.random()*100)+1)+2500);
		}
		console.log(event_id);
		/*$('#header').css('height', '<?php echo $dimensions[0]?>');
		$('#sidecontent').css('width', '<?php echo $dimensions[1]?>');
		$('#framediv').css('height', '<?php echo $dimensions[2]?>');
		$('#menu<?php echo $_SESSION['menu']?>').css('background-color', '#424242');
		$('#menu<?php echo $_SESSION['menu']?>').css('color', 'white');
		$('#lia<?php echo $_SESSION['event_id']?>').css('background-color', 'white');
		$('#lib<?php echo $_SESSION['event_id']?>').css('background-color', 'white');
		$('#libs<?php echo $_SESSION['event_id']?>').css('background-color', 'white');
		$('#lic<?php echo $_SESSION['group_id']?>').css('background-color', 'white');
		$('#lics<?php echo $_SESSION['group_id']?>').css('background-color', 'white');
		$('#lid<?php echo $_SESSION['friend_user_id']?>').css('background-color', 'white');
		$('#lidf<?php echo $_SESSION['friend_user_id']?>').css('background-color', 'white');
		$('#lids<?php echo $_SESSION['friend_user_id']?>').css('background-color', 'white');*/
		$('#search1').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					search1(search1=$('#search1').val());
				}
			});
		});
		$('#search2').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					search2(search2=$('#search2').val());
				}
			});
		});
		$('#search3').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					search3(search3=$('#search3').val());
				}
			});
		});
		$('#search4').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					search4(search4=$('#search4').val());
				}
			});
		});
		$('#search5').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					search5(search5=$('#search5').val());
				}
			});
		});
		$('#search6').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					search6(search6=$('#search6').val());
				}
			});
		});
		$('#comment').click(function(){
			$(document).keypress(function(e){
				if(e.which==13){
					player=$('#iframe');
					//if(typeof player=='undefined'){
						comment(comment=$('#comment').val(), player_time=0);
					//}
					//else{
						//comment(comment=$('#comment').val(), player_time=player.getCurrentTime());
					//}
				}
			});
		});
		$('body').mouseup(function(){
			$('#iframe').css('pointer-events', 'auto');
		});
		$('#sidecontent_handle').mousedown(function(){
			$('#iframe').css('pointer-events', 'none');
		});
		$('#frame_handle').mousedown(function(){
			$('#iframe').css('pointer-events', 'none');
		});
		$('#logout').mousedown(function(){
			window.location='php/logout.php';
		});
	});
</script>