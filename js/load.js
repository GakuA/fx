$(function(){

	setInterval(displayPrice, 1000);

	function displayPrice() {
		getPrice().done(function(result) {
			var prices = JSON.parse(result);
			$("#usdjpy .price").text(prices.usd);
			$("#eurjpy .price").text(prices.eur);
			$("#audjpy .price").text(prices.aud);
			$("#gbpjpy .price").text(prices.gbp);
		});
	}

	function getPrice() {
		return $.ajax({
			type: 'POST',
			url: 'getPrice.php'
		})
	}
});
