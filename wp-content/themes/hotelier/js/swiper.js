const swiper = new Swiper('.explore-more-slider-container', {
    // Optional parameters
    // direction: 'horizontal',
    slidesPerView: 4,
    spaceBetween: 14,
    allowSlideNext:true,
    allowSlidePrev:true,
    loop: false,
  
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
  
    // Navigation arrows
    navigation: {
      nextEl: '.explore-more-swiper-button-next',
      prevEl: '.explore-more-swiper-button-prev',
    },
  
    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });

  const swiper1 = new Swiper('.review-slider-container', {
    // Optional parameters
    // direction: 'horizontal',
    slidesPerView: 4,
    spaceBetween: 14,
    allowSlideNext:true,
    allowSlidePrev:true,
    loop: false,
  
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
  
    // Navigation arrows
    navigation: {
      nextEl: '.review-swiper-button-next',
      prevEl: '.review-swiper-button-prev',
    },
  
    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });