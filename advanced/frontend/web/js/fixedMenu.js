/**
 * Created by Antis on 25.11.2016.
 */
//var avatarElem = document.getElementById('avatar');
var avatarElem = $('#navbar-line');
//var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;
var avatarSourceBottom = avatarElem[0].getBoundingClientRect().bottom + window.pageYOffset;
var fixClass = 'fixed-0-0-top';

console.log(avatarSourceBottom);
$(window).scroll(function() {
    if (avatarElem.hasClass(fixClass) && window.pageYOffset < avatarSourceBottom) {
        avatarElem.removeClass(fixClass);
    } else if (window.pageYOffset > avatarSourceBottom) {
        avatarElem.addClass(fixClass);
    }
});
/*
window.onscroll = function() {
    if (avatarElem.classList.contains('fixed') && window.pageYOffset < avatarSourceBottom) {
        avatarElem.classList.remove('fixed');
    } else if (window.pageYOffset > avatarSourceBottom) {
        avatarElem.classList.add('fixed');
    }
};
*/