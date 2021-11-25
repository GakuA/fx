$(function(){
	let count = 0;
	function test() {
		$("#usdjpy .price").text(count++);
	}
	setInterval(

	getPrice(url).done(function(result) {
		$("#usdjpy .price").text(result);
	}), 1000);

	function getPrice() {
		return $.ajax({
			type: 'POST',
			data: {postUrl: url},
			url: 'getPrice.php'
		})
	}
});
