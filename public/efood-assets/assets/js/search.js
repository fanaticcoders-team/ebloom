$(document).ready(function () {
    // alert("slam");
    console.log("external search file works");
    $("#searchInput")
        .keyup(function () {
            //split the current value of searchInput
            // alert("slam");
            // console.log("keyUP check");
            var data = this.value.split(" ");
            console.log(data);
            //create a jquery object of the rows
            var jo = $(".shops-listings-shops-list").find(
                ".shops-listings-shops-list-item"
            );
            if (this.value == "") {
                jo.show();
                return;
            }
            var trueCount = 0;
            // var falseCount = 0;
            //hide all the rows
            jo.hide();
            //Recusively filter the jquery object to get results.
            jo.filter(function (i, v) {
                var $t = $(this);
                // console.log($t);
                for (var d = 0; d < data.length; ++d) {
                    if ($t.is(":contains('" + data[d] + "')")) {
                        trueCount++;
                        return true;
                    }
                }
                return false;
            })
                //show the rows that match.
                .show();
            if (trueCount === 0) {
                $(".not-match").removeClass("d-none");
            } else {
                $(".not-match").addClass("d-none");
            }
            // console.log("trueCount: " + trueCount);
        })
        .focus(function () {
            this.value = "";
            $(this).css({
                color: "black",
            });
            $(this).unbind("focus");
        })
        .css({
            color: "#C0C0C0",
        });
});
