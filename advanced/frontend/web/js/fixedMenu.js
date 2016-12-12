/**
 * Created by Antis on 25.11.2016.
 */
/* Sticky (Прилипание)
*
* Суть техники заключается в том, что элемент при скролле
* ведет себя как position: relative относительно своего родителя,
* пока его верхняя граница не достигнет верхнего края
* окна (viewport-a). При дальнейшем скролле вниз элемент
* ведет себя как position: static, будто отвязывается
* от родителя и “прилипает” к границе окна.
* */
var avatarElem = $('#navbar-line');
//var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;
var avatarSourceBottom = avatarElem[0].getBoundingClientRect().top + window.pageYOffset;
var fixClass = 'fixed-0-0-top';

$(window).scroll(function() {
    if (avatarElem.hasClass(fixClass) && window.pageYOffset < avatarSourceBottom) {
        avatarElem.removeClass(fixClass);
    } else if (window.pageYOffset > avatarSourceBottom) {
        avatarElem.addClass(fixClass);
    }
});
