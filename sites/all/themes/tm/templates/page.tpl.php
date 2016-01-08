<style>#toggle_menu span, #toggle_menu span:after, #toggle_menu span:before{
        background-color:#000;
    }
    .page-user .login{ display:block!important;}
</style>
<div class="terms_conditions">
    <div class="container terms_conditions_container">
        <h2><?php echo $node->title; ?></h2>
        <p> <?php print($node->body['und'][0]['value']); ?></p>
     <div class="login" style="display: none">   <?php print render($page['content']); ?></div>
    </div>
    <!-- end  -->

<!-- include javascript -->
        <script>
                (function ($) {
                $('.slider1').bxSlider({
                    slideWidth:420,
                    minSlides: 4,
                    maxSlides: 4,
                    moveSlides: 1,
                    slideMargin:50,
                    pager:false,
                    startSlide:1
                });
                $('.bxslider').bxSlider({
                    mode: 'fade',
                    captions: true,
                    nextSelector:false,
                    prevSelector:false,
                    auto:false
                });
                $('.bxslider2').bxSlider({
                    captions: false,
                    nextSelector:false,
                    prevSelector:false,
                    auto:false,
                    pager:false
                });
                $('.slider-ul').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    focusOnSelect: true,
                    autoplaySpeed: 1000,
                    centerMode: true,
                    arrow:false,
                });
            })(jQuery);
        </script>

