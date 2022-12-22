<?php 
/**
 * Global functions
 */

function get_header($data = null, $name = null) {
	if(!empty($data)){
		extract(convertSlimObjToArray($data));
	}

	if(!empty($name)) {
		$path = 'app/view/includes/header-' . $name . '.php';
	} else {
		$path = 'app/view/includes/header.php';
	}
	
	include $path;
}

function get_footer($data = null, $name = null) {
	if(!empty($data)){
		extract(convertSlimObjToArray($data));
	}

	if(!empty($name)) {
		$path = 'app/view/includes/footer-' . $name . '.php';
	} else {
		$path = 'app/view/includes/footer.php';
	}
	
	include $path;
}

function get_parts($path, $data = null) {
	if(!empty($data)){
		extract(convertSlimObjToArray($data));
	}

	$part = 'app/view/includes/' . $path . '.php';
	include $part;
}

function _e($var){
	echo _($var);
}

function convertSlimObjToArray($obj){
	$array = array();

	foreach($obj as $key => $value) {
		if($key != 'flash'){
			$array[$key] = $value;
		}
	}

	return $array;
}

function base_path($fullpath = false){
	//Get system full path
	$pagename = basename($_SERVER['PHP_SELF']);
	$basepath = str_replace($pagename, '', $_SERVER['PHP_SELF']);
	
	if($fullpath){
		$basepath = $_SERVER['DOCUMENT_ROOT'] . $basepath;
	}

	return $basepath;
}

function base_url(){
	return 'http://'.$_SERVER['SERVER_NAME'].base_path();	
}