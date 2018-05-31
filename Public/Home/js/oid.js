$(document).ready(function(){
	$(".ways-list").click(function(){
		$(this).addClass("one-way").siblings().removeClass("one-way")
	})
})