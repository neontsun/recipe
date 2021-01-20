<?php

function randomString($strlen) {
	
	$charsArray = implode("", array_merge(range('a', 'z'), range('A', 'Z')));
	$randomString = "";

	for ($i = 0; $i < $strlen; $i++) { 
		$randomString .= $charsArray[rand(0, strlen($charsArray) - 1)];
	}
	
	return $randomString;

}
