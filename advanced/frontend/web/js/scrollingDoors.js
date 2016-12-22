/**
 * Created by Antis on 22.11.2016.
 */

//
(function($){
    var stop = false;
    function doorRibon_inn() {

        $("#doors-inn").find(".view-doors")
            .css("overflow", "hidden");
        $("#doors-out").find("div.view-doors")
                    .css("overflow", "hidden");
        $(".running-ribbon-septa > div.view-septa")
                    .css("overflow", "hidden");

        var viewUL;
        $("div.show-doors")
            .show()
            .find("button").on("click", function(){
            //console.log('click');
            var direction = $(this).attr("id");
            viewUL = $(".active > > .view-doors")
                .children("ul");
            moveRibbon(direction);
            //clearTimeout(timerId);
        });
        $("div.show-septa")
            .show()
            .find("button").on("click", function(){
                var direction = $(this).attr("id");
                viewUL = $(".view-septa")
                    .children("ul");
                moveRibbon(direction);
                //clearTimeout(timerId);
            }
        );

        function moveRibbon(direction){
            //var widthBlock = $("#doors-inn").width();
            //var direction = $(this).data("param"); // для html 5
            ///////////////////////////////////////////////////////
            var widthRibons = 0,
                chldr = viewUL.children(),
                len = chldr.length,
                add = len * 10;

            widthRibons = (len * 230) + add;
            var left = Math.abs(parseInt(viewUL.css('margin-left')));
            if(direction == "next"){
                if(widthRibons == left) return;
                left += 240;
            }
            else{
                if(left == 0) return;
                left -= 240;
            }

            console.log(left);
            /*for (i = 0 ; i < chldr.length ; i++)
                widthRibons += $(chldr[i]).width();*/

            /*if(direction == "next") {
                imgW = viewUL.children(":last").width()+19;
                var last = viewUL.children(":first").position().left + widthRibons + imgW;
                console.log(imgW);
                if (last <= widthBlock) return;
            }
            else {
                imgW = viewUL.children(":first").width()+12;
                var first = viewUL.children(":first").position().left;
                if (first >= 15) return;
            }*/
            if(!stop)
                doIt(viewUL,  direction);
        }
        function doIt(container,  direction){
            console.log(direction);
            var sign; // "-=" or "+="
            if (direction == "next") {
                sign = "-=" ;
                /*var shift = {"margin-left": sign + imgW + "px",
                    "duration": 100
                };*/
            }
            else 
                sign = "+=";
            var shift = {
                "margin-left" : sign + "240px"
            };
            container.animate(shift, 300);
        }

    }

    doorRibon_inn();

})(jQuery);