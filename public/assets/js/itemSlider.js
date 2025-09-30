var itemSlider = tns({
    container: '.services-slider',
    gutter: 30,
    edgePadding: 20,
    slideBy: 'page',
    controlsPosition: 'bottom',
    nav: true,
    navPosition: true,
    mouseDrag: true,
    autoplay: true,
    autoplayButtonOutput: false,
    controlsContainer: '#services-slider-control',
    touch: true,
    responsive:{
        0:{
          items: 2,
        },
        768:{
          items: 3
        },
      }
  });
  