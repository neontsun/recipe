<?php

function parseStepsText(string $text) : array {

	return explode("&&", $text);

}
