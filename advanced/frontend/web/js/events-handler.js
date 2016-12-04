/**
 * Created by dmitrij on 24.11.2016.
 */



(function ($) {

    $(".add-to-cart").on('click', addToCart);
    $(".add-to-wish").on('click', addToWish);

    var jCart = $("#basket");
    var jWish = $('#wishlist');

    getQuantity('getcart', jCart);
    getQuantity('getwish', jWish);

})(jQuery);

function getQuantity(action, jtag){
    $.ajax({
            url: '/cart/'+action,

            type:'GET',
            success: function (res) {
                callbackQuantity(res,jtag);},
            error: function () {
                console.log('error');

            }
        }

    )


}

function addToCart(e) {

    e.preventDefault();

    var id = $(this).attr('id');
    id = id.substring(1,id.length);
    $.ajax({
        url: '/cart/add',
        data:{
            id: id
        },
        type:'GET',
        success: function (res) {
            callbackQuantity(res);},
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
    $.ajax({
            url: '/cart/addwish',
            data:{
                id: id
            },
            type:'GET',
            success: function (res) {
                callbackQuantity(res);},
            error: function () {
                console.log('error');

            }
        }

    )

}

function callbackQuantity(res, jtag) {
    if (!!jtag){
        jtag.text(res);
        if (res == 0) {
            jtag.text('');
            if (jtag.attr('id')== 'wishlist')
            {
                jtag.removeClass("glyphicon-heart");
                jtag.addClass("glyphicon-heart-empty");
            }
        }
        else {
            if (jtag.attr('id')== 'wishlist')
            {
                jtag.addClass("glyphicon-heart");
                jtag.removeClass("glyphicon-heart-empty");
            }
        }

    }
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
