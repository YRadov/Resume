//Плывущий фон
var bg_Offset = 0;
function scroll_bg(){
    bg_Offset = bg_Offset + 1;
    if (bg_Offset > 1920) bg_Offset = 0;
    //$("body").css("backgroundPosition", "0px " + bg_Offset + "px"); //сверху вниз
    $("body").css("backgroundPosition", bg_Offset + "px 0px");
}




$(document).ready(function(){

    //плывущий фон
    setInterval("scroll_bg()", 50);

    //fancybox
	//$(".single_image").fancybox();

    //изменение контента
    $('button').click(function(){
        var item = $(this).attr('id');
        var text;
        switch (item)
        {
            case 'f':
                text = 'first';
                break;

            case 's':
                text = 'second';
                break;

            case 'th':
                text = 'third';
                break;

            case 'w':
                text = 'work';
                break;

            case 'st':
                text = 'study';
                break;

            case 'fou':
                text = 'fourth';
                break;

        }
        $('.right div').fadeOut();
        $('#'+text+', .'+text).delay(500).fadeIn(1000);
    });

	/**
	*Плавный переход
	*к заданному месту
	*на странице по 
	*якорю
	*/
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
			
	/**
	*Плавный скролтнг вверх
	*/
	$(".go-up").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('.go-up').fadeIn();
			} else {
				$('.go-up').fadeOut();
			}
		});
		$('.go-up a').click(function () {
			$('body,html').animate({
				scrollTop:0
			}, 800);
			return false;
		});
	});

});