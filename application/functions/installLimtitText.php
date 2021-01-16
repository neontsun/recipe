<?php

function installLimtitText($text) {

	return strlen($text) > 150 ? substr($text, 0, 147) . "..." : $text;

}
