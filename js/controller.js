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

TweenMax.staggerFrom(".top-labeld", 1, { y:150, scale: .8,opacity: 0, ease: Back.easeOut.config(2)}, 0.3);

$('#example2').progress({
  percent: 22
});