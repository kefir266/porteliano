$("#button-toggle").click(function(){
	$('ul#w17').slideToggle(500);
});

$('ul#w17 > li').delegate('a', 'click', function(){
	$('ul#w17').slideToggle();
})