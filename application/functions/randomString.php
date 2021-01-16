<?php

function randomString($strlen) {
	
	$chars = implode("", array_merge(range('a', 'z'), range('A', 'Z')));
	$str = '';

	for ($i = 0; $i < $strlen; $i++) { 
		$str .= $chars[rand(0, strlen($chars) - 1)];
	}
	
	return $str;

}
