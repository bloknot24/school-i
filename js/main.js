
// Slider slick


$(function(){
	$('.bg-slider').slick({
		dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true,
 		prevArrow: '<button type="button" class="slick-prev"><div></div></button>',
 		nextArrow: '<button type="button" class="slick-next"><div></div></i></button>'
	});	

    // Menu opener hamburger
    $('.menu-open').click(function () {
        $('.menu-collapse').toggleClass('d-none').css('order', '1');
        $('.menu1').toggleClass('menu-opened');
    });

    // Анимация

    $(window).scroll(function() {

        $('.tablinks-1').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInTopLeft");
            }
        });
        $('.tablinks-2').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInDownBig");
            }
        });
        $('.tablinks-3').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInTopRight");
            }
        });
        $('.tablinks-4, .exams-child').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInRightBig");
            }
        });
        $('.tablinks-5').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInBottomRight");
            }
        });
        $('.tablinks-6, .ex__list').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInUpBig");
            }
        });
        $('.tablinks-7').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInBottomLeft");
            }
        });
        $('.tablinks-8').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInLeftBig");
            }
        });
        $('.rectangle1, .rectangle2, .rectangle3, .rectangle4').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__rotateIn");
            }
        });
        $('.slide1, .candidate-left').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInLeft");
            }
        });
        $('.slide2, .admission__title, .stage, .admission__text,  .exams h3, .conditions__title, .programms__title').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInDown");
            }
        });
        $('.slide3, .form, .kids__list, .ex__title, .candidate-right, .ticket__free, .principle__text, .bg-kids, .lessons__list, .comunication__list, .top-sckool__text, .lessons__list3').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInRight");
            }
        });
        $('.top-sckool__title, .comunication2-bg, .bg_future, .ticket-bg, .odject__items, .principle__title, .positive, .negative, .comunication-bg').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__fadeInLeft");
            }
        });
        $('.opportunity, .package, .bussines__item, .future__text, .future__title, .teachers, .bg_teacher, .attention__ttile1, .attention__ttile2').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__jackInTheBox");
            }
        });
        $('.goals').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__rotateIn");
            }
        });
        $('.items, .bg_tasks, .odj__text, .odj__title').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__rollIn");
            }
        });
        $('.develop').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+750) {
                $(this).addClass("animate__slideInUp");
            }
        });
    });
    // плавное перемещение страницы к нужному блоку
    $("a.go").click(function (e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top;
        $("body,html").animate({scrollTop: destination }, 1000);
    });
    var handleMatchMedia = function (mediaQuery) {
        if (mediaQuery.matches) {
            $("a.go").click(function (e) {
        e.preventDefault();
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top-100;
        $("body,html").animate({scrollTop: destination }, 1000);
    });
        } else {
    
        }
    },
    mql = window.matchMedia('all and (max-width: 992px)');

    handleMatchMedia(mql);
    mql.addListener(handleMatchMedia); 
    
//
    var header = $('.header'),
    scrollPrev = 0;

    $(window).scroll(function() {
        var scrolled = $(window).scrollTop();
        var windowsWidht1 = $(window).width();
        if(windowsWidht1 > 600) {


            if ( scrolled > 100 && scrolled > scrollPrev ) {
                header.addClass('out');
            } else {
                header.removeClass('out');
            }
            scrollPrev = scrolled;
        }
    })
});


