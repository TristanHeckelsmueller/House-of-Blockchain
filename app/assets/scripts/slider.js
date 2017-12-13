$(function() {

    // slider type
    $t = "slide"; // opitions are fade and slide

  	//variables
    $f = 1000,  // fade in/out speed
    $s = 1000,  // slide transition speed (for sliding carousel)
    $d = 5000;  // duration per slide

    $n = $('.large-header__slide').length; //number of slides
    $w = $('.large-header__slide').width(); // slide width
  	$c = $('.container').width(); // container width
   	$ss = $n * $w; // slideshow width


      function timer() {
        $('.timer').animate({"width":$w}, $d);
        $('.timer').animate({"width":0}, 0);
    }


  // fading function
    function fadeInOut() {
      timer();
        $i = 0;
        var setCSS = {
            'position' : 'absolute',
            'top' : '0',
            'left' : '0'
        }

        $('.large-header__slide').css(setCSS);

        //show first item
        $('.large-header__slide').eq($i).show();


        setInterval(function() {
          timer();
            $('.large-header__slide').eq($i).fadeOut($f);
            if ($i == $n - 1) {
                $i = 0;
            } else {
                $i++;
            }
            $('.large-header__slide').eq($i).fadeIn($f, function() {
                $('.timer').css({'width' : '0'});
            });

        }, $d);

    }

    function slide() {
      timer();
        var setSlideCSS = {
            'float' : 'left',
            'display' : 'inline-block',
          	'width' : $c
        }
        var setSlideShowCSS = {
            'width' : $ss // set width of slideshow container
        }
        $('.large-header__slide').css(setSlideCSS);
        $('.slideshow').css(setSlideShowCSS);


        setInterval(function() {
            timer();
            $('.large-header-wrapper').animate({"left": -$w}, $s, function(){
                // to create infinite loop
                $('.large-header-wrapper').css('left',0).append( $('.slide:first'));
            });
        }, $d);

    }

    if ($t == "fade") {
        fadeInOut();

    } if ($t == "slide") {
        slide();

    } else {

    }
});
