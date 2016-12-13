/**
 * Created by Antis on 28.11.2016.
 */
/* Подключить
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js"></script>
 */
$('div.wrap-action > .img-holder').imageScroll({
    holderClass: 'imageHolder',
    container: $('div.wrap-action'),
    speed: 0.1,
    coverRatio: 0.75,
    mediaWidth: 2000,
    mediaHeight: 1415,
    holderMaxHeight: 1000,
    holderMinHeight: 950,
    parallax: true,
    touch: false
});

$('div.wrap-facts-at-Glance > .img-holder').imageScroll({
    holderClass: 'imageHolder',
    container: $('div.wrap-facts-at-Glance'),
    speed: 0.1,
    coverRatio: 0.75,
    mediaWidth: 2000,
    mediaHeight: 1415,
    holderMaxHeight: 1000,
    holderMinHeight: 950,
    parallax: true,
    touch: false
});

$('div.wrap-action-another > .img-holder').imageScroll({
    holderClass: 'imageHolder',
    container: $('div.wrap-action-another'),
    speed: 0.1,
    coverRatio: 0.75,
    mediaWidth: 2000,
    mediaHeight: 1415,
    holderMaxHeight: 1000,
    holderMinHeight: 950,
    parallax: true,
    touch: false
});
