$(document).ready(function () {
    $("#mobile").click(function() { 
         $(".menu-list").slideToggle();
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
           $('header').addClass('changeColor')
        } 
        if ($(this).scrollTop() < 50) {
            $('header').removeClass('changeColor')
         } 
    });
    $("a").on('click', function(event) {
        if (this.hash !== "#link-1") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 400, function(){
    
            window.location.hash = hash;
          });
        } 
      });
      $("a").on('click', function(event) {
        if (this.hash !== "#link-2") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 400, function(){
    
            window.location.hash = hash;
          });
        } 
      });
      $("a").on('click', function(event) {
        if (this.hash !== "#link-3") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 400, function(){
    
            window.location.hash = hash;
          });
        } 
      });
});