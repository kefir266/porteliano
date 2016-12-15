$("#button-toggle").click(function(){
	//console.log($('ul#w17'));
	$('ul#w17').slideToggle(200);
});

$('ul#w17 > li').delegate('a', 'click', function(){
	$('ul#w17').slideToggle(100);
});