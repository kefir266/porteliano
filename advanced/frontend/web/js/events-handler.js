/**
 * Created by dmitrij on 24.11.2016.
 */



function eventClickDropMenu(item) {
    if (item.target.tagName == 'A')
        $(item.target).parents(".btn-group").children(".btn-default:first").text(item.target.innerHTML);
}