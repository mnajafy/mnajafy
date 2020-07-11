
$(document).ready(function()
{
    $(window).on('scroll', function()
    {
        if ($(window).scrollTop()) 
        {
            $('header').addClass('header-pos');
        }
        else 
        {
            $('header').removeClass('header-pos');
        }
    });
    
    $("header nav .navbar-toggler").click(function(){
        $("header nav .navbar-toggler").toggleClass("active");
        $("header nav .navbar-collapse").toggleClass("show");
    });
});