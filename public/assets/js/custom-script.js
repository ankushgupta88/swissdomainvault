$(document).ready(function(){
    //testimonial slider
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});


//client logo slider
$(document).ready(function() {
    $("#client-slider").owlCarousel({
      autoPlay: 3000, //Set AutoPlay to 3 seconds
      items : 5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
    });
});


     $(document).ready(function(){
    $('#clone_btn').click(function(){
      $("#car_parent").append($("#car2").clone());
    });
});


 
//sticky header
/*$(window).scroll(function(){
    if ($(window).scrollTop() >= 30) {
        $('.navigation_bar').addClass('sticky-header-bar');
    } else {
        $('.navigation_bar').removeClass('sticky-header-bar');
   }
});*/