$(window).on("load resize scroll", function(){
    $(".img-side").each(function(){
        var scrollTop =$(window).scrollTop();
        var elementTop =$(this).offset().top;
        var leftPos = scrollTop - elementTop;

        $(this).find(".back-static").css({top:leftPos});
    });
});