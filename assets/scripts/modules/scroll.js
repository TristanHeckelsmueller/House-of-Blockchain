var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
      $('.site-header__logo__graphic__svg').addClass('logo-trans-img');
      $('.site-header__logo').addClass('logo-trans');

      $('.site-header__logo__graphic__svg').removeClass('logo-trans-img-back');
      $('.site-header__logo').removeClass('logo-trans-back');
       console.log('Downscroll');
  }
   else {
     $('.site-header__logo__graphic__svg').removeClass('logo-trans-img');
     $('.site-header__logo').removeClass('logo-trans');

     $('.site-header__logo').addClass('logo-trans-back');
    $('.site-header__logo__graphic__svg').addClass('logo-trans-img-back');
      console.log('upscroll');
   }
   lastScrollTop = st;
});
