/**
 * Created by dmitrij on 24.11.2016.
 */



function eventClickDropMenu(item) {
    if (item.target.tagName == 'A')
        $(item.target).parents(".btn-group").children(".btn-default:first").text(item.target.innerHTML);
}


function eventClickSelectButton(item) {

    var data =
    {
        material : $("div .material").find(".btn-default").html(),
        manufacturer : $("div .material").find(".btn-default").html(),
        style : $("div .style").find(".btn-default").html(),
        price : $("div .block-1-price").find(".btn-default").html()

    }
    $.post('/catalog', data);
}