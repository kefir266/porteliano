/**
 * Created by Antis on 22.11.2016.
 */

//
(function($){
    var viewUL = $("div.running-ribbon")
            .css("overflow", "hidden")
            .children("ul"),
        imgs = viewUL.find("img"), 	// коллекция картинок
        imgW = 400,									// ширина одной картинки
        imgsLen = imgs.length, 			// общее колличество картинок
        totalImgsW = imgsLen * imgW,// общая ширина
        current = 1; 								// текушая картинка(позиция)

    $("div#show")
        .show()
        .find("button").on("click", function(){
        var direction = $(this).attr("id"),
            position = imgW;
        //var direction = $(this).data("param"); // для html 5
        ///////////////////////////////////////////////////////
        if(direction == "next")
            current ++;
        else
            current --;
        if(current == 0){
            current = imgsLen; // set last image
            direction = "next";
            position = totalImgsW-imgW;
        }else if(current-1 == imgsLen){
            current = 1;			// set first image
            position = 0
        }
        //console.log(current);
        doIt(viewUL, position, direction);
    });
    function doIt(container, position, direction){
        var sign; // "-=" or "+="
        if(direction && position != 0){
            sign = (direction == "next") ? "-=" : "+=";
        }
        var shift = {"margin-left": sign  ? (sign + position) : position};
        var duration ={};
        if(position == 0 || position == imgW*(imgsLen-1)){
            duration = {duration: 0};
        }
        container.animate(shift, duration);

    }
})(jQuery);