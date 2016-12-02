/**
 * Created by dmitrij on 24.11.2016.
 */



(function ($) {

    $(".add-to-cart").on('click', addToCart);
    $(".add-to-wish").on('click', addToWish);

})(jQuery);

function addToCart(e) {

    e.preventDefault();

    var id = $(this).attr('id');
    id = id.substring(1,id.length);
    console.log(id);
    $.ajax({
        url: 'cart/add',
        data:{
            id: id
        },
        type:'GET',
        success: callbackCart,
        error: function () {
            console.log('error');

        }
    }

    )

}

function addToWish(e) {

    e.preventDefault();

    var id = $(this).attr('id');
    id = id.substring(1,id.length);
    console.log(id);
    $.ajax({
            url: 'cart/addwish',
            data:{
                id: id
            },
            type:'GET',
            success: callbackWish,
            error: function () {
                console.log('error');

            }
        }

    )

}

function callbackCart(res) {
    console.log(res);
}

function callbackWish(res) {
    console.log(res);
}

function eventClickDropMenu(item) {
    if (item.target.tagName == 'A'){
        var idItem = item.target.getAttribute('id-item');
        var button = $(item.target).parents(".btn-group").children(".btn-default:first");

        button.text(item.target.innerHTML);
        button.attr('id-item', idItem);
    }
}


function eventClickSelectButton(item) {


    var    material = $("div .material").find(".btn-default").attr('id-item');
    var    manufacturer = $("div .material").find(".btn-default").attr('id-item');
    var    style = $("div .style").find(".btn-default").attr('id-item');
    var    price = $("div .block-1-price").find(".btn-default").attr('id-item');
    var    section = $(".section-title").attr('section-id');


    console.log(material);
    $(location).attr('href',
        '/catalog/?'
            +((!!section) ? '&section=' + section.replace(/[^.\d]+/g,"") : '')
        +((!!material)?  '&material='+material.replace(/[^.\d]+/g,"") : '')
        + ((!!manufacturer)? '&manufacturer=' + manufacturer.replace(/[^.\d]+/g,"") : '')
        + ((!!style)? '&style=' + style.replace(/[^.\d]+/g,"") : '')
        + ((!!price)? '&price=' + price : '').replace(/[^.\d]+/g,""));
}

// для 03_dveri-catalog
$('ul.dropdown-menu > li > a').on('click',function(event){
    $(this)
        .parents(".btn-group")
        .children(".btn-default:first")
        .text($(this).text());
});
