$(document).ready(function(){
  console.log("ShowStars");
  let htmlString = $(".rating").text();
  if (htmlString == 4) {
    console.log("4Stars")
  }
});
$(document).ready(function(){
  console.log("Hello World");
  $(".star-1").on("click hover", function(){
      $(".star-1").removeClass("active-vis");
      $(".star-2").removeClass("active-vis");
      $(".star-3").removeClass("active-vis");
      $(".star-4").removeClass("active-vis");
  });
    $(".star-2").on("click hover", function(){
        $(".star-1").addClass("active-vis");
        $(".star-2").removeClass("active-vis");
        $(".star-3").removeClass("active-vis");
        $(".star-4").removeClass("active-vis");
    });
    $(".star-3").on("click hover", function(){
      $(".star-1").addClass("active-vis");
      $(".star-2").addClass("active-vis");
      $(".star-3").removeClass("active-vis");
      $(".star-4").removeClass("active-vis");
    });
    $(".star-4").on("click hover", function(){
      $(".star-1").addClass("active-vis");
      $(".star-2").addClass("active-vis");
      $(".star-3").addClass("active-vis");
      $(".star-4").removeClass("active-vis");
    });
    $(".star-5").on("click hover", function(){
      $(".star-1").addClass("active-vis");
      $(".star-2").addClass("active-vis");
      $(".star-3").addClass("active-vis");
      $(".star-4").addClass("active-vis");
    });
});
