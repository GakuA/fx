$(function(){
	let count = 0;
	function test() {
		$("#usdjpy .price").text(count++);
	}
	setInterval(getPrice, 1000);

	getPrice(url).done(function(result) {
		$("#usdjpy .price").text(result);
	}

	function getPrice() {
		return $.ajax({
			type: 'POST',
			data: {postUrl: url},
			url: 'getPrice.php'
		})
	}
});
