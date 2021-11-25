<?php

	$count = 1;
	while ($count <= 3) {
		$count++;
		$price = price();
		if ($price) {
			break;
		}
	}
	echo $price;

function price() {
	if(preg_match("/<span id\=\"USDJPY_chart_bid\"[^>]*\>(.*?)\<\/span\>/i", "https://info.finance.yahoo.co.jp/fx/list/", $matches)){
		return $matches[1];
	} else {
		return false;
	}
}
