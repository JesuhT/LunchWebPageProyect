$(document).ready(function () {
    $(".dropdown").hover(
        function () {
            $(this).find(".dropdown-content").stop(true, true).slideDown(400);
        },
        function () {
            $(this).find(".dropdown-content").stop(true, true).slideUp(400);
        }
    );
});
