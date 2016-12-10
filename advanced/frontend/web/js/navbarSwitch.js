/**
 * Created by Antis on 09.12.2016.
 */
$(function () {
    var page = $('.switch').data('swith'),
        menuButton = $('.navbar li > a[data-target]'),
        nameClass = 'lightButton';
    switch (page) {
        case 'doors':
            console.log('case - door');
            menuButton.removeClass(nameClass);
            $('.navbar li > a[data-target=a2]').addClass('lightButton');
            break;
        case 'septa':
            menuButton.removeClass(nameClass);
            $('.navbar li > a[data-target=a3]').addClass('lightButton');
            console.log('case - septa');
            break;
        case 'manufacturers':
            menuButton.removeClass(nameClass);
            $('.navbar li > a[data-target=a4]').addClass('lightButton');
            console.log('case - manufacturers');
            break;
        case 'about':
            menuButton.removeClass(nameClass);
            $('.navbar li > a[data-target=a5]').addClass('lightButton');
            console.log('case - about');
            break;
        case 'contact':
            menuButton.removeClass(nameClass);
            $('.navbar li > a[data-target=a6]').addClass('lightButton');
            console.log('case - contact');
            break;
    }
});