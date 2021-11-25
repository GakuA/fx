$(function(){
	let count = 0;
	function test() {
		$("#usdjpy .price").text(count++);
	}
	setInterval(test, 1000);
}
