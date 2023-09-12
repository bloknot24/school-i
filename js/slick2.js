
// Slider slick 2


$(function(){
	$('.slider-top').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
		dots: true,
 		prevArrow: '<button type="button" class="slick-prev"><div></div></button>',
 		nextArrow: '<button type="button" class="slick-next"><div></div></i></button>',
     		responsive: [
        {
          breakpoint: 768,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
          breakpoint: 993,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: false
        }
      },
    ]
	});	

  $('.slider-news').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
		dots: false,
 		prevArrow: '<button type="button" class="slick-prev" style="margin-top: 110px; background: rgb(142, 214, 203);"><div></div></button>',
 		nextArrow: '<button type="button" class="slick-next" style="margin-top: 110px; background: rgb(142, 214, 203);"><div></div></i></button>',
     		responsive: [
        {
          breakpoint: 768,
          settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false
        }
      },
      {
          breakpoint: 993,
          settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: false
        }
      },
    ]
	});	
});

