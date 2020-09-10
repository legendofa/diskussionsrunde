<?php
if(isset($encode)){
	$fileDir="../userdata/";
	$ext=explode('.', 'profile.svg');
	$file=$fileDir.$encode;
	$base64=base64_encode(file_get_contents($file));
	if(file_exists($file)){
		switch($ext[1]){
			case 'svg':
			return 'data:image/svg+xml;base64, '.$base64;
			break;
			case 'jpg':
			return 'data:image/jpeg;base64, '.$base64;
			break;
			case 'png':
			return 'data:image/png;base64, '.$base64;
			break;
			case 'gif':
			return 'data:image/gif;base64, '.$base64;
			break;
		}
	}
}