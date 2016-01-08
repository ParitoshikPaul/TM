/*===============================================================
 Menu 
===============================================================*/

var theToggle = document.getElementById('toggle_menu');

// hasClass
function hasClass(elem, className) {
  return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
      elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
  if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
  var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}


/*===============================================================
 FOOTER TESTIMONIALS  
===============================================================*/
function form() {
  $(".slideTogglebox").slideToggle();
    var a = $("#footer_testi").attr("title");
    if (a == "Show") {
        $("#testi_arrow").attr("src", "images/toggle_btn_dn.png");
        $("#footer_testi").attr("title", "Hide")
    } else {
        $("#testi_arrow").attr("src", "images/toggle_btn_up.png");
        $("#footer_testi").attr("title", "Show")
  }

   var a = $("#footer_testi1").attr("title");
    if (a == "Show") {
        $("#testi_arrow1").attr("src", "images/toggle_btn_dn.png");
        $("#footer_testi1").attr("title", "Hide")
    } else {
        $("#testi_arrow1").attr("src", "images/toggle_btn_up.png");
        $("#footer_testi1").attr("title", "Show")
  }
}


$(".nav-tabs a").click(function(){
  $(this).tab('show');
});


/*===============================================================
  Home Page Testimonilas Video Popup 
===============================================================*/

  $('.footer_video_thumb').click(function() {
    $('.thevideo').show('300');
  });
  $('.videoclose').click(function() {
    $('.thevideo').hide('300', function() {
      
    });
  });


/*===============================================================
  Home Page Slide
===============================================================*/
$('.next_arrow').click(function () {
  $('#slide1').hide();
  $('#slide2').show();
  if (a == "Show") {
        $(".next_arrow").attr("src", "images/next_arrow.png");
        $(".n").attr("title", "Hide")
    } else {
        $(".prev_arrow").attr("src", "images/prev_arrow.png");
        $(".p").attr("title", "Show")
  }
});
$('.prev_arrow').click(function () {
  $('#slide2').hide();
  $('#slide1').show();
});

/*===============================================================
          SIGN UP PAGE
===============================================================*/

$(document).ready(function(){
  first = 1;
  current = 0;
  last = 8;
  automate = function(){
    if(current==last){
      current = 1;
      next = current;
    }else{
      next = current + 1;
      current++;
    }
    $('.signup-round > div').removeClass('active');
    $('.signup-round.signup-round-box'+current+' > .signup-cont').addClass('active');
  }
  int1 = setInterval('automate()',2000);

  $('.signup-round').off('click').on('click', function(e){
    e.preventDefault();
    $('.signup-round > .signup-cont').removeClass('active');
    current = $(this).attr('data-loc') - 1;
    console.log(current);
    $(this).find('.signup-cont').addClass('active');
    clearInterval( int1 );
    int1 = setInterval('automate()',2000);
  });
});



    










