/**
 * Created by dmitrij on 24.11.2016.
 */

var semaphore = false;
var jCart,jWish;

(function ($) {
    jCart = $(".ccart");
    jWish = $('.cwishlist');

    getQuantity('getcart', jCart);
    getQuantity('getwish', jWish);

    $(".category-2").on('click',function (event) {
        event.stopPropagation();
        $("h2.section-title").click();
    })

    semaphore = false;
})(jQuery);

function getCurrentSection(novetly) {

    var section = novetly.data("section");

    if (section)
        return section;
    else
        return '2'; //перегородки
}

function getCurrentElements(novetly) {
    var currentId = {};
    var elements = novetly.children();
    for (i = 0 ; i < elements.length; i++) {
        currentId[i] = elements.eq(i).data('id');
    }
    return currentId;

}

function nextDownload(e,left, quant) {

    e.preventDefault();
    if (semaphore) return;

    semaphore = true;
    var currentButton = $(e.target);

    var novetly = currentButton.parent().siblings(".novelty-folders").find(".ribbon-ul");
    var active = currentButton.parent().siblings(".novelty-folders").find(".active > > > .ribbon-ul  ");
    novetly = (active.length > 0)? active : novetly;

    var giveMore = $(".catalog-elements");
    novetly = (giveMore.length > 0) ? giveMore : novetly;

    var section = getCurrentSection(novetly);
    var elements = getCurrentElements(novetly);

    var dataAjax = {section: section,
        elements: elements,
        quant: quant
    };

    if (giveMore.length > 0) {
        dataAjax.material = $("div .material").find(".btn-default").data('id');
        dataAjax.manufacturer = $("div .manufacturer").find(".btn-default").data('id');
        dataAjax.style = $("div .style").find(".btn-default").data('id');
        dataAjax.price = $("div .block-1-price").find(".btn-default").data('id');
        dataAjax.section = $(".section-title").data('id');
    }
    left = false;
    $.ajax({
        url: '/catalog/download',
        data: dataAjax,
        type: 'POST',
        success: function (res) {
            if (left) {
                novetly.prepend(res);
                //cloneEl = novetly.children(":first").clone().hide().css("display", "").prependTo(novetly);
                //cloneEl.replaceWith(res);
                //novetly.css('float', 'left');
                //cloneEl.show("slide", { direction: "left" }, 2000);
            }
            else
                novetly.append(res);
            semaphore = false;
        },
        error: function () {
            console.log('error downloading');
            semaphore = false;
        }
    });

}

function delItem(e, cartWish, id) {

    if (cartWish == 'cart'){
        var jtag = jCart;
    }
    else{
        var jtag = jWish;
    }

    $.ajax({
            url: '/cart/delelement',
            data: {
                id: id,
                cartwish: cartWish
            },
            type: 'GET',
            success: function (res) {
                //showModal('#modal-'+cartWish,res);
                getQuantity('get' + cartWish, jtag);
                $(e.target).parents(".goods-row").remove();
                //getQuantity('get' + cartWish, $("#counter-goods"), '0'); //would be altered
            },
            error: function () {
                console.log('error delete');

            }
        }
    )
}

function getQuantity(action, jtag, zero) {
    $.ajax({
            url: '/cart/' + action,

            type: 'GET',
            success: function (res) {
                callbackQuantity(res, jtag, zero);
            },
            error: function () {
                console.log('error');

            }
        }
    )
}

function setGlyphiconHeart(jtag, state) {

    if (state == 0) {
        for (i = 0 ; i < jtag.length ; i++ ){
            $(jtag.get(i)).removeClass("glyphicon-heart");
            $(jtag.get(i)).addClass("glyphicon-heart-empty");}
    }
    else {
        for (i = 0 ; i < jtag.length ; i++ ){
            $(jtag.get(i)).addClass("glyphicon-heart");
            $(jtag.get(i)).removeClass("glyphicon-heart-empty");}
    }
}

function refreshCart(quantity, jtag, zero) {

    if (quantity == 0) {
        jtag.text((!!zero) ? zero : '');
        if (jtag.attr('id') == 'wishlist') {
            for (i = 0 ; i < jtag.length ; i++ ){
                $(jtag.get(i)).removeClass("glyphicon-heart");
                $(jtag.get(i)).addClass("glyphicon-heart-empty");}
        }
    }
    else {
        jtag.html('<span class="circle-number">' + quantity + '</span>');
        if (jtag.attr('id') == 'wishlist') {
            for (i = 0 ; i < jtag.length ; i++ ){
                $(jtag.get(i)).addClass("glyphicon-heart");
                $(jtag.get(i)).removeClass("glyphicon-heart-empty");
            }

        }
    }

}

function addToCart(e) {


    e.preventDefault();
    var jtag = jCart;

    var id = $(e.target).data('id');

    $.ajax({
            url: '/cart/add',
            data: {
                id: id
            },
            type: 'GET',
            success: function (res) {
                callbackQuantity(res, jtag);

                $(".tip-cart").show(0).fadeOut(1000);

            },
            error: function () {
                console.log('error');

            }
        }
    )

}

function clearCart(cartWish) {

    if (cartWish == 'cart'){
        var jtag = jCart;
    }
    else{
        var jtag = jWish;
    }

    $.ajax({
            url: '/cart/clear',
            data: {
                cartwish: cartWish
            },
            type: 'GET',
            success: function (res) {
                refreshCart(0, jtag);
                $("#tab-cart").html("");
            },
            error: function () {
                console.log('error clear');

            }
        }
    )
}

function addToWish() {

    var e =event;
    event.preventDefault();

    var jtag = jWish;

    var id = $(e.target).data('id');

    $.ajax({
            url: '/cart/addwish',
            data: {
                id: id
            },
            type: 'GET',
            success: function (res) {
                callbackQuantity(res, jtag);
                setGlyphiconHeart($(e.target), 1);

                $(".tip-wish").show(0).fadeOut(2000);
            },
            error: function () {
                console.log('error');

            }
        }
    )

}

function getCart(cartWish) {

    $.ajax(
        {
            url: '/cart/gettab',
            data: {cartwish: cartWish},
            type: 'GET',
            success: function (res) {
                showModal('#modal-' + cartWish, res);
            },
            error: function () {
                console.log('Error tab');
            }
        }
    )

}

function isWished(id, tag) {

    $.ajax({
        url: '/cart/iswished',
        data: {
            id: id
        },
        type: 'GET',
        success: function (res) {
            setGlyphiconHeart(res);
        },
        error: function () {
            console.log('error isWished');

        }
    });
}

function callbackQuantity(res, jtag, zero) {
    if (!!jtag) {

        refreshCart(res, jtag, zero);
    }
}

function showModal(id, tab) {

    $(id + ' .modal-body').html(tab);
    $(id).modal();
}

function eventClickDropMenu(item) {
    if (item.target.tagName == 'A') {
        var idItem = $(item.target).data('id');
        var button = $(item.target).parents(".btn-group").children(".btn-default:first");

        button.text(item.target.innerHTML);
        button.attr('data-id', idItem);
    }
}


function eventClickSelectButton(item) {

    console.log('click');
    var material = $("div .material").find(".btn-default").data('id');
    var manufacturer = $("div .manufacturer").find(".btn-default").data('id');
    var style = $("div .style").find(".btn-default").data('id');
    var price = $("div .block-1-price").find(".btn-default").data('id');
    var section = $(".section-title").data('id');

console.log(price);

    $(location).attr('href',
        '/catalog/?'
        + ((!!section) ? '&section=' + section : '')
        + ((!!material) ? '&material=' + material : '')
        + ((!!manufacturer) ? '&manufacturer=' + manufacturer : '')
        + ((!!style) ? '&style=' + style : '')
        + ((!!price) ? '&price=' + price : ''));
}

// для 03_dveri-catalog
$('ul.dropdown-menu > li > a').on('click', function (event) {
    $(this)
        .parents(".btn-group")
        .children(".btn-default:first")
        .text($(this).text());

});