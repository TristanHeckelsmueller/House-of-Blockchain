$(document).ready(function(){
  $(".secondary-nav").click(function(){
    $('.secondary-nav__display').addClass('expand');
    $(".secondary-nav").addClass('btn-close');
    $(".secondary-nav_x").addClass('expand');
  });
  $(".secondary-nav_x").click(function(){
    $('.secondary-nav__display').removeClass('expand');
    $(".secondary-nav").removeClass('btn-close');
    $(".secondary-nav_x").removeClass('expand');
  });
});