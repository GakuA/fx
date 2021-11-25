$(function(){
	let count = 0;
	function test() {
		$("#usdjpy .price").text(count++);
	}
	setInterval(displayPrice(), 1000);
	function displayPrice() {
		getPrice().done(function(result) {
			$("#usdjpy .price").text(result);
		});
	}

	function getPrice() {
		return $.ajax({
			type: 'POST',
			url: 'getPrice.php'
		})
	}
});
