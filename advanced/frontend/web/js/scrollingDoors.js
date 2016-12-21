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

        var viewUL;
        $("div.show-doors")
            .show()
            .find("button").on("click", function(){
            console.log('click');
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
            var widthBlock = $("#doors-inn").width();
            //var direction = $(this).data("param"); // для html 5
            ///////////////////////////////////////////////////////
            var widthRibons = 0;
            var chldr = viewUL.children();

            for (i = 0 ; i < chldr.length ; i++)
                widthRibons += $(chldr[i]).width();

            if(direction == "next") {
                imgW = viewUL.children(":last").width()+12;
                var last = viewUL.children(":first").position().left + widthRibons + imgW;
                console.log(imgW);
                if (last <= widthBlock) return;
            }
            else {
                imgW = viewUL.children(":first").width()+12;
                var first = viewUL.children(":first").position().left;
                if (first >= 15) return;
            }
            doIt(viewUL,  direction);
        }
        function doIt(container,  direction){
            var sign; // "-=" or "+="
                if (direction == "next") {
                    sign = "-=" ;
                    var shift = {"margin-left": sign + imgW + "px",
                        "duration": 100
                    };
                    container.animate(shift);
                }
                else {
                    //sign = "+=";
                }



        }

    }

    doorRibon_inn();

})(jQuery);