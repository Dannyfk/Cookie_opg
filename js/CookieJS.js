var cookieValue=$.cookie("nav");

    $('.nav.navbar-nav > li').on('click', function() {
        $.removeCookie("nav");
        $.cookie("nav", $('a',this).attr("id"), { expires: 7, path: '/' });
        var cookieValue = $.cookie("nav");
    });
    if(cookieValue)

{
    $('#' + cookieValue).removeClass('active');
    $('#' + cookieValue).parent().addClass('active');
}