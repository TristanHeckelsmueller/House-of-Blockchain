console.log("Parallax");

$('#parallax').mousemove(function(e){
  parallaxIt(e, '.large-header__text-content', -100);
  parallaxIt(e, 'img', -30);
});

function parallaxIt(e, target, movement){
  var $this = $('#large-header__text-content');
  var relX = e.pageX - $this.offset().left;
  var relY = e.pageY - $this.offset().top;

  TweenMax.to(target, 1, {
    x: (relX - $this.width()/2) / $this.width() * movement,
    y: (relY - $this.height()/2) / $this.height() * movement
  })
}
