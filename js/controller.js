$('.ui.dropdown')
  .dropdown({
      on: 'hover'
    })
;

$('.ui.rating')
  .rating({
    initialRating: 3,
    maxRating: 5
  })
;

$('.special.cards .card').dimmer({
  on: 'hover'
});



  $( '#latest-product-slider' ).sliderPro({
			width: 260,
			height: 370,
			visibleSize: '100%',
			forceSize: false,
			autoSlideSize: true,
			slideDistance: 30,
});


  $( '#topcatogeries-slider' ).sliderPro({
      width: 200,
      height: 350,
      visibleSize: '100%',
      forceSize: false,
      autoSlideSize: true,
      slideDistance: 30,
});


  $( '#topprofit-slider' ).sliderPro({
			width: 350,
			height: 350,
			visibleSize: '100%',
			forceSize: false,
			autoSlideSize: true,
			slideDistance: 30,


});



var content = [
  { title: 'Andorra' },
  { title: 'United Arab Emirates' },
  { title: 'Afghanistan' },
  { title: 'Antigua' },
  { title: 'Anguilla' },
  { title: 'Albania' },
  { title: 'Armenia' },
  { title: 'Netherlands Antilles' },
  { title: 'Angola' },
  { title: 'Argentina' },
  { title: 'American Samoa' },
  { title: 'Austria' },
  { title: 'Australia' },
  { title: 'Aruba' },
  { title: 'Aland Islands' },
  { title: 'Azerbaijan' },
  { title: 'Bosnia' },
  { title: 'Barbados' },
  { title: 'Bangladesh' },
  { title: 'Belgium' },
  { title: 'Burkina Faso' },
  { title: 'Bulgaria' },
  { title: 'Bahrain' },
  { title: 'Burundi' }
  // etc
];


$('.ui.search')
  .search({
    source : content,
    searchFields   : [
      'title'
    ],
    fullTextSearch: false
  })
;
$('#example2').progress({
  percent: 22
});


  TweenMax.staggerFrom(".top-labeld", 1, { y:150, opacity: 0, ease:  Back.easeOut.config(1.7)}, 0.3);



tl = new TimelineMax();

  tl.staggerFrom(".product-items.cards .card", 1, { y:150, opacity: 0}, 0.2)
  // tl.pause();


tl2 = new TimelineMax();

  tl2.staggerFrom(".animated-column .column", 1, { y:150, opacity: 0}, 0.2)








// if visible 

$.fn.isInViewport = function() {


    var offset = $(this).offset();
    if(!offset) return;
    var elementTop = offset.top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
    if ($('.card').isInViewport()) {
       
    }
});



$('.ui.button')
  .on('click', function() {
    // programmatically activating tab
    $.tab('change tab', 'tab-name2');
  })
;

