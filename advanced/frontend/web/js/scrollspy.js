
var buttons = $('.navbar li > a[data-target]');
//  оптимизировать поиск по значению data-target
$('ul.navbar > li > a[data-target=a0]').scroolly([{
	from: 'doc-top = top',
	to: 'con-bottom +500el= top',
	onCheckIn: function($el){
		$('.navbar li > a[data-target=a0]').addClass('lightButton');
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('div.category.dropdown'));
/*********************************************************/
$('ul.navbar > li > a[data-target=a1]').scroolly([{
	from: 'con-top -100el ',
	to: 'con-bottom -50el = top',
	onCheckIn: function($el){
		$('.navbar li > a[data-target=a1]').addClass('lightButton');
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('article#novelty'));
/*********************************************************/
$('ul.navbar > li > a[data-target=a2]').scroolly([{
	from: 'con-top -100el',
	to: 'con-bottom -100el = center',

	onCheckIn: function($el){
		$('.navbar li > a[data-target=a2]').addClass('lightButton');
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('article#doors'));
/*********************************************************/
$('ul.navbar > li > a[data-target=a3]').scroolly([{
	from: 'con-top -100el = top',
	to: 'con-bottom -100el = top',
	onCheckIn: function($el){
		$('.navbar li > a[data-target=a3]').addClass('lightButton');
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('article#septa'));
/*********************************************************/
$('ul.navbar > li > a[data-target=a4]').scroolly([{
	from: 'con-top -200el',
	to: 'con-bottom -100el = center',
	onCheckIn: function($el){
		$('.navbar li > a[data-target=a4]').addClass('lightButton');
		console.log('In');
		console.log($el.data('item'));
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('article#manufacturers'));
/*********************************************************/
$('ul.navbar > li > a[data-target=a5]').scroolly([{
	from: 'con-top -200el',
	to: 'con-bottom -100el = center',
	onCheckIn: function($el){
		$('.navbar li > a[data-target=a5]').addClass('lightButton');
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('article#about'));
/*********************************************************/
$('ul.navbar > li > a[data-target=a6]').scroolly([{
	from: 'con-top = center',
	to: 'con-bottom = top',
	css: {

	},
	onCheckIn: function($el){
		$('.navbar li > a[data-target=a6]').addClass('lightButton');
	},
	onCheckOut: function($el){
		buttons.removeClass('lightButton');
	}
}], $('article#contacts'));