/**
 * Created by dmitrij on 24.11.2016.
 */



function eventClickDropMenu(item) {
    $(item.target).parents(".btn-group").children(".btn-default:first").text(item.target.innerHTML);
}

// для 03_dveri-catalog
$('ul.dropdown-menu > li > a').on('click',function(event){
    $(this)
        .parents(".btn-group")
        .children(".btn-default:first")
        .text($(this).text());
});
