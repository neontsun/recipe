<?php

function parseDate($date) {

	$dt = date('d-m-Y', strtotime(str_replace('-','/', $date)));
	$dt = explode('-', $dt);
	$mon = "";

	switch ($dt[1]) {

		case 1: $mon = 'Января'; break;
		case 2: $mon = 'Февраля'; break;
		case 3: $mon = 'Марта'; break;
		case 4: $mon = 'Апреля'; break;
		case 5: $mon = 'Мая'; break;
		case 6: $mon = 'Июня'; break;
		case 7: $mon = 'Июля'; break;
		case 8: $mon = 'Августа'; break;
		case 9: $mon = 'Сентября'; break;
		case 10: $mon = 'Октября'; break;
		case 11: $mon = 'Ноября'; break;
		case 12: $mon = 'Декабря'; break;
		
	}

	return $dt[0] . " " . $mon . " " . $dt[2];

}
