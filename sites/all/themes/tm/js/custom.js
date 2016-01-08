/*===============================================================
 Menu
 ===============================================================*/
(function($) {
    $(document).ready(function() {

        $('#toggle_menu').click(function() {
            $(this).toggleClass("on");
        });
        /*===============================================================
         FOOTER TESTIMONIALS
         ===============================================================*/

        $(".toogle_tabs").click(function(event) {
            // alert('hello');
            var query = location.hash.substring(1);
            var vars = query.split("&");
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split("=");
            }
            if (pair[0] == "") {
                $(".slideTogglebox").slideToggle();

                var a = $("#footer_testi").attr("title");
                if (a == "Show") {
                    ///     $("#testi_arrow").attr("src", "../sites/all/themes/tm/images/toggle_btn_dn.png");
                    $("#footer_testi").attr("title", "Hide");

                } else {
                    //     $("#testi_arrow").attr("src", "../sites/all/themes/tm/images/toggle_btn_up.png");
                    $("#footer_testi").attr("title", "Show");
                    event.stopPropagation();
                }
                var a = $("#footer_testi1").attr("title");
                if (a == "Show") {
                    //   $("#testi_arrow1").attr("src", "../sites/all/themes/tm/images/toggle_btn_dn.png");
                    $("#footer_testi1").attr("title", "Hide");
                } else {

                    //   $("#testi_arrow1").attr("src", "sites/all/themes/tm/images/toggle_btn_up.png");
                    $("#footer_testi1").attr("title", "Show");
                    event.stopPropagation();
                }
            }
            //var img = document.getElementById('imgplus').src;
            //if (img.indexOf('Plus.gif')!=-1) {
            //   document.getElementById('imgplus').src  = 'Images/Minus.gif';
            //}
            //else {
            //   document.getElementById('imgplus').src = 'Images/Plus.gif';
            //}
        });
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
        });
        $(".toClosetheTestimonials").click(function() {
            var pathname = window.location.href;
            var actualPath = window.location.href.split('#')[0];
            $(".slideTogglebox").slideUp();
            location.hash = "";
        });
        $(".nav-tabs a").click(function() {
            $(this).tab('show');
        });

        /*===============================================================
         Home Page Testimonilas Video Popup
         ===============================================================*/
        $('.footer_video_thumb0').click(function() {
            $("#thevideo0").fadeIn();
        });
        $('.footer_video_thumb1').click(function() {
            $("#thevideo1").fadeIn();
        });
        $('.footer_video_thumb2').click(function() {
            $("#thevideo2").fadeIn();
        });
        $('.footer_video_thumb3').click(function() {
            $("#thevideo3").fadeIn();
        });
        $('.footer_video_thumb4').click(function() {
            $("#thevideo4").fadeIn();
        });
        $('.footer_video_thumb5').click(function() {
            $("#thevideo5").fadeIn();
        });
        $('.footer_video_thumb6').click(function() {
            $("#thevideo6").fadeIn();
        });
        $('.footer_video_thumb7').click(function() {
            $("#thevideo7").fadeIn();
        });
        $('.footer_video_thumb8').click(function() {
            $("#thevideo8").fadeIn();
        });
        $('.footer_video_thumb9').click(function() {
            $("#thevideo9").fadeIn();
        });
        $('.footer_video_thumb10').click(function() {
            $("#thevideo10").fadeIn();
        });
        $('.footer_video_thumb11').click(function() {
            $("#thevideo11").fadeIn();
        });
        $('.footer_video_thumb12').click(function() {
            $("#thevideo12").fadeIn();
        });
        $('.footer_video_thumb13').click(function() {
            $("#thevideo13").fadeIn();
        });
        $('.footer_video_thumb14').click(function() {
            $("#thevideo14").fadeIn();
        });
        $('.footer_video_thumb15').click(function() {
            $("#thevideo15").fadeIn();
        });
        $('.footer_video_thumb16').click(function() {
            $("#thevideo16").fadeIn();
        });
        $('.footer_video_thumb17').click(function() {
            $("#thevideo17").fadeIn();
        });
        $('.footer_video_thumb18').click(function() {
            $("#thevideo18").fadeIn();
        });
        $('.footer_video_thumb19').click(function() {
            $("#thevideo19").fadeIn();
        });
        $('.footer_video_thumb20').click(function() {
            $("#thevideo20").fadeIn();
        });
        $('.videoclose').click(function() {
            $(".thevideo").fadeOut();
        });


        /*===============================================================
         Home Page Slide
         ===============================================================*/

        $('.next_arrow').click(function() {
            $('#slide1').hide();
            $('#slide2').show();
            $('.slider-ul').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                focusOnSelect: true,
                autoplaySpeed: 1000,
                centerMode: true,
                arrow: false,
            });
        });
        $('.prev_arrow').click(function() {
            $('#slide2').hide();
            $('#slide1').show();
        });



        /*===============================================================
         SIGN UP PAGE
         ===============================================================*/

        first = 1;
        current = 0;
        last = 8;
        automate = function() {
            if (current == last) {
                current = 1;
                next = current;
            } else {
                next = current + 1;
                current++;
            }
            $('.signup-round > div').removeClass('active');
            $('.signup-round.signup-round-box' + current + ' > .signup-cont').addClass('active');
        }
        int1 = setInterval('automate()', 2000);

        $('.signup-round').off('click').on('click', function(e) {
            e.preventDefault();
            $('.signup-round > .signup-cont').removeClass('active');
            current = $(this).attr('data-loc') - 1;
            console.log(current);
            $(this).find('.signup-cont').addClass('active');
            clearInterval(int1);
            int1 = setInterval('automate()', 2000);
        });



        /*===============================================================
         Home Page Slide2 next arrow onclick next page redirect
         ===============================================================*/

        $('.front a.next_arrow1').click(function() {
            $("#slide1").hide();
            window.location.href = 'sign-up';
            return false;
        })

        /*===============================================================
         About Us Tab onclick next page redirect
         ===============================================================*/


        var query = window.location.href;
        var vars = query.split("#");
        // $("#myTab li").removeClass("active");
        // $("#myTabContent div").removeClass("active");
        // $("#myTabContent div").removeClass("in");
        $("#myTabContent div#" + vars[1]).addClass("active");
        $("#myTabContent div#" + vars[1]).addClass("in");
        $("#myTab li." + vars[1]).addClass("active");
        if (vars[1] == "undefined") {
            $("#myTab li").removeClass("active");
            $("#myTabContent div").removeClass("active");
            $("#myTabContent div").removeClass("in");
            $("#myTabContent div#introduction").addClass("active");
            $("#myTabContent div#introduction").addClass("in");
            $("#myTab li.introduction").addClass("active");
        }
        if(vars[1] == "front"){
            $(".home_slide").css("display","none");
            $("#slide2").css("display" , "block");
        }
        $("#myTab").click(function() {
            location.hash = "";
        });
        /*===============================================================
         Faq Page onclick scroll top then show arrow
         ===============================================================*/

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1500);
            return false;
        });



        /*===============================================================
         Footer Testimonials
         ===============================================================*/

        $('.nav-tabs > li').click(function() {
            $('.footer').css('z-index', '1');
        });
        $('.toClosetheTestimonials').click(function() {
            $('.footer').css('z-index', '3');
        });


    });
})(jQuery);



