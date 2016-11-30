/**
 * Created by dmitrij on 24.11.2016.
 */



function eventClickDropMenu(item) {
    $(item.target).parents(".btn-group").children(".btn-default:first").text(item.target.innerHTML).css('color','red');
}

$(".btn-group")