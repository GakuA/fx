<?php

	$prices = price();

	echo json_encode($prices);

	function price() {
		$html = @file_get_contents("https://info.finance.yahoo.co.jp/fx/list/");
		if (preg_match("/<span id\=\"USDJPY_chart_bid\"[^>]*>(.*?)<\/span>/i", $html, $matches)) {
			$usd = $matches[1];
		} else {
			$usd = "";
		}

		if (preg_match("/<span id\=\"EURJPY_chart_bid\"[^>]*>(.*?)<\/span>/i", $html, $matches)) {
			$eur = $matches[1];
		} else {
			$eur = "";
		}

		if (preg_match("/<span id\=\"AUDJPY_chart_bid\"[^>]*>(.*?)<\/span>/i", $html, $matches)) {
			$aud = $matches[1];
		} else {
			$aud = "";
		}

		if (preg_match("/<span id\=\"GBPJPY_chart_bid\"[^>]*>(.*?)<\/span>/i", $html, $matches)) {
			$gbp = $matches[1];
		} else {
			$gbp = "";
		}

		return array("usd" => $usd, "eur" => $eur, "aud" => $aud, "gbp" => $gbp);
	}
