var itemSlider = tns({
    container: '.cc-slider',
    gutter: 15,
    slideBy: 'page',
    controlsPosition: 'bottom',
    nav: false,
    navPosition: true,
    mouseDrag: true,
    autoplay: false,
    autoplayButtonOutput: false,
    controlsContainer: '#cc-slider-control',
    touch: true,
    responsive:{
        0:{
          items: 1,
          edgePadding: 25
        },
        768:{
          items: 1,
          edgePadding: 30,
        },
        1440:{
          items: 3,
          edgePadding: 0
        }
      }
  });
  