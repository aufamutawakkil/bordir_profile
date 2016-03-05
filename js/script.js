$(function() {
  $('ul.menu li a').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (Number(target.offset().top) - 125)
        }, 1000);
        return false;
      }
    }
  });


  /*header*/
  $(window).scroll(function(){
    var valScroll = $('body').scrollTop();
    if( valScroll > 0 ){
        console.log('masuk')
        $("#menu").css('box-shadow','0 2px 7px 0 #CCCCCC');
    }else{
        $("#menu").css('box-shadow','0 0 0 0');
    } 
  })


});

/*google maps api*/
//AIzaSyC0O4k4_Cksn4lu0v6B6dMn2ivG-P7RMvU