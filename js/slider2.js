// first slider

$(document).ready(function () {
    var itemsMainDiv = ".MultiCarousel";
    var itemsDiv = ".MultiCarousel-inner";
    var itemWidth = "";

    $(".leftLst, .rightLst").click(function () {
        // alert("check");
        var condition = $(this).hasClass("leftLst");
        console.log(this);
        // var right = `<button class="btn btn-primary rightLst" style="background-color: #984E66 !important;border-color: #984E66 !important">&gt;</button>`;
        var right = this;
        console.log(right);
        if (condition) click(0, this);
        else click(1, right);
    });

    ResCarouselSize();

    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = "data-items";
        var itemClass = ".item";
        var id = 0;
        var btnParentSb = "";
        var itemsSplit = "";
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $("body").width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(",");
            $(this)
                .parent()
                .attr("id", "MultiCarousel" + id);

            if (bodyWidth >= 1200) {
                // incno = itemsSplit[1];
                incno = 4;
                itemWidth = sampwidth / incno;
                // console.log("incno:" + incno);
                // console.log("item width:" + itemWidth);
            } else if (bodyWidth >= 992) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            } else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            } else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({
                transform: "translateX(0px)",
                width: itemWidth * itemNumbers,
            });
            $(this)
                .find(itemClass)
                .each(function () {
                    $(this).outerWidth(itemWidth);
                });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");
        });
    }
    var nextTime = "";
    var prevTime = "";

    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ".leftLst";
        var rightBtn = ".rightLst";
        var translateXval = "";
        var divStyle = $(el + " " + itemsDiv).css("transform");
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + " " + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                // console.log("prev time out");
                clearInterval(prevTime);
                // console.log("add left over");
                nextTime = setInterval(function () {
                    ResCarousel(1, "#MultiCarousel1", 1);
                }, 5000);

                $(el + " " + leftBtn).addClass("over");
            }
        } else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            console.log("itemCondition:" + itemsCondition);
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            console.log("translateXval:" + translateXval);

            $(el + " " + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                // console.log("next time out");
                clearInterval(nextTime);
                // console.log("add right over");
                prevTime = setInterval(function () {
                    ResCarousel(0, "#MultiCarousel1", 1);
                }, 5000);
                $(el + " " + rightBtn).addClass("over");
            }
        }
        $(el + " " + itemsDiv).css(
            "transform",
            "translateX(" + -translateXval + "px)"
        );
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        // console.log("parent:" + Parent);
        var slide = $(Parent).attr("data-slide");
        // console.log("slide: " + slide);
        // console.log("ell:" + ell);
        ResCarousel(ell, Parent, slide);
        // ResCarousel(1, "#MultiCarousel1", 1);
    }

    nextTime = setInterval(function () {
        ResCarousel(1, "#MultiCarousel1", 1);
    }, 5000);
    // setInterval(ResCarousel(1, "#MultiCarousel1", 1), 40000);
});
