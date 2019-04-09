$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > 30 && innerWidth > 767) {
      // if(scroll_start > 30) {
          $(".navbar-default").css({
                          transition: 'background-color 0.3s ease-in-out',
                              "background-color": "#3B4952",
                              "border-bottom": "#3B4952 1px solid"
                      });
       } else if (innerWidth > 767) {
          $('.navbar-default').css('background-color', 'transparent');
          $('.navbar-default').css('border-bottom', 'grey 1px solid');
       }
   });
    }
});
