<?php

	echo price();

function price() {
	if(preg_match("/<span id=\"USDJPY_chart_bid\"[^>]*>(.*?)<\/span>/i", "https://info.finance.yahoo.co.jp/fx/list/", $matches)){
		return $matches[1];
	} else {
		return false;
	}
}
