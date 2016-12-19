/**
 * Created by Antis on 22.11.2016.
 */

//
(function($){
    function doorRibon_inn() {

        $("#doors-inn").find(".view-doors")
            .css("overflow", "hidden");
        $("#doors-out").find("div.view-doors")
                    .css("overflow", "hidden");
        $(".running-ribbon-septa > div.view-septa")
                    .css("overflow", "hidden");

        var viewUL,
            imgs, 	    // коллекция картинок
            imgW = 250,						// ширина одной картинки
            imgsCount, 		// общее колличество картинок
            totalImgsW;  // общая ширина
        $("div.show-doors")
            .show()
            .find("button").on("click", function(){
            console.log('click');
            var direction = $(this).attr("id");
            viewUL = $(".active > > .view-doors")
                .children("ul");
            imgs = viewUL.children();
            imgsCount = imgs.length;
            totalImgsW = imgsCount * imgW;
            moveRibbon(direction);
            //clearTimeout(timerId);
        });
        $("div.show-septa")
            .show()
            .find("button").on("click", function(){
                var direction = $(this).attr("id");
                viewUL = $(".view-septa")
                    .children("ul");
                imgs = viewUL.children();
                imgsCount = imgs.length;
                totalImgsW = imgsCount * imgW;
                moveRibbon(direction);
                //clearTimeout(timerId);
            }
        );

        function moveRibbon(direction){
            var   position = imgW;
            var widthBlock = $("#doors-inn").width();
            //var direction = $(this).data("param"); // для html 5
            ///////////////////////////////////////////////////////
            var last = viewUL.children(":first").position().left + totalImgsW + imgW;
            var first = viewUL.children(":first").position().left;

            if(direction == "next") {
                if (last <= widthBlock) return;
            }
            else {
                if (last >= 15) return;
            }
            doIt(viewUL,  direction);
        }
        function doIt(container,  direction){
            var sign; // "-=" or "+="
                if (direction == "next") {
                    sign = "-=" ;
                }
                else {
                    sign = "+=";
                }
            var shift = {"margin-left": sign + imgW + "px",
                "duration": 100
            };
            container.animate(shift);

        }

    }

    doorRibon_inn();

})(jQuery);