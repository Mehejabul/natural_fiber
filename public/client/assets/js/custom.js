(function ($) {
    "use strict";

    var $start = $("#start").val();
    var $end = $("#end").val();
    if ($start == "" || $end == "") {
        $start == 0;
        $end == 10000;
    }
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 10000,
        values: [$start, $end],
        slide: function (event, ui) {
            $("#amount").val("Tk" + ui.values[0] + " - Tk" + ui.values[1]);
            $("#start").val(ui.values[0]);
            $("#end").val(ui.values[1]);
        },
    });
    $("#amount").val(
        "Tk" +
            $("#slider-range").slider("values", 0) +
            " - Tk" +
            $("#slider-range").slider("values", 1)
    );
})(jQuery);
