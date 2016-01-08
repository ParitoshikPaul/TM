<!-- About Us Section -->
<div class="container contact_container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <!-- <img src="<?php //global $base_url; print $base_url; ?>/sites/all/themes/tm/images/map.png" alt=""> -->
            <!--<div id="map_canvas_custom_271662" style="width:830px; height:371px; float:right;" ></div>
            <script type="text/javascript">
                (function(d, t) {var g = d.createElement(t),s = d.getElementsByTagName(t)[0];
                    g.src = "http://map-generator.net/en/maps/271662.js?point=";
                    s.parentNode.insertBefore(g, s);}(document, "script"));</script>
            <!Do not change code! -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14022.192460480599!2d77.1952646!3d28.5232404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8b31542d6b3cec8b!2sTrulymadly+MatchMakers+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1449213381059" width="100%" height="100%"frameborder="0" style="border:0" id="map_canvas_custom_271662" allowfullscreen></iframe>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <h2>CONTACT US</h2>
            <a href="mailto:contact@trulymadly.com" target="_blank">contact@trulymadly.com <span>general queries</span> </a>
            <a href="mailto:careers@trulymadly.com" target="_blank">careers@trulymadly.com <span>careers queries</span></a>
            <a href="mailto:rahul.kumar@trulymadly.com" target="_blank">rahul.kumar@trulymadly.com <span>site & usability related</span></a>
        </div>
    </div>
</div>
<!-- end  -->

<!-- footer menu -->
<!-- <div class="footer footer_left">
    <ul>
      <li><a href="#">LEGAL</a></li>
    </ul> 
</div> -->
<div class="footer footer_right">
    <a href="https://www.facebook.com/trulymadly/" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/fb_icon.png" alt=""></a>
    <a href="https://twitter.com/thetrulymadly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/tw_icon.png" alt=""></a>
    <a href="https://www.instagram.com/thetrulymadly/" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/insta_icon.png" alt=""></a>
    <a href="https://www.youtube.com/user/trulymadlycom" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/yt_icon.png" alt=""></a>
</div>
</div>
<!-- end -->
<!-- footer testimonials -->
<div class="footer_testimonials">
    <ul class="nav nav-tabs" style="margin-bottom:0px;">
        <li class="active toogle_tabs" id="footer_testi" title="Show">
            <a href="#home">What’s New <img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/toggle_btn_up.png" id="testi_arrow"></a>
        </li>
        <li class="toogle_tabs" id="footer_testi" title="Show">
            <a href="#menu1" > Testimonials <img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/toggle_btn_up.png" id="testi_arrow1"></a>
        </li>
    </ul>

    <div class="tab-content slideTogglebox" style="display:none;">
        <div id="home" class="tab-pane fade in active">
            <div class="slider1">
                <?php
                $youtube = node_load_multiple(array(), array('type' => 'youtube_channel_videos'));
                $i = 0;
                foreach($youtube as $video):
                    if(empty($video->field_show_this_video_on['und'][0]['value'] && $i = 7)) {
                        $title = text_summary($video->title, $format = NULL, $size = 40);
                        $you_url = $video->field_youtube_url['und'][0]['value'];
                        $likes = $video->field_likes['und'][0]['value'];
                        $views = $video->field_views['und'][0]['value']; ?>
                        <!--- slide 1 -->
                        <div class="slide">
                            <div class="footer_testi_video_thumb">
                                <img class="footer_video_thumb<?php echo $i; ?>"
                                     src="http://img.youtube.com/vi/<?php echo $you_url; ?>/0.jpg"
                                     style="cursor:pointer;"/>

                                <p><?php echo $title . '...'; ?></p>

                                <div class="testi_like">
                                    <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/like_icon.png" alt="like">
                                    </a><?php echo $likes; ?> <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/review_icon.png"
                                                                               alt="review"></a> <?php echo $views; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                endforeach; ?>
            </div>

        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="slider1">
                <?php
                $testimonials = node_load_multiple(array(), array('type' => 'youtube_channel_videos'));
                $i = 8;
                foreach($testimonials as $testimonial):
                    if(!empty($testimonial->field_show_this_video_on['und'][0]['value'])) {
                        $testi_title = text_summary($testimonial->title, $format = NULL, $size = 40);
                        $testi_you_url = $testimonial->field_youtube_url['und'][0]['value'];
                        $testi_likes = $testimonial->field_likes['und'][0]['value'];
                        $testi_views = $testimonial->field_views['und'][0]['value']; ?>
                        <!--- slide 1 -->
                        <div class="slide">
                            <div class="footer_testi_video_thumb">
                                <img class="footer_video_thumb<?php echo $i; ?>"
                                     src="http://img.youtube.com/vi/<?php echo $testi_you_url; ?>/0.jpg"
                                     style="cursor:pointer;"/>

                                <p><?php echo $testi_title . '...'; ?></p>

                                <div class="testi_like">
                                    <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/like_icon.png" alt="like">
                                    </a><?php echo $testi_likes; ?> <a href="#"><img src="<?php global $base_url;
                                        print $base_url; ?>/sites/all/themes/tm/images/review_icon.png"
                                                                                     alt="review"></a> <?php echo $testi_views; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                endforeach; ?>
            </div>
        </div>
    </div>
    <!-- end -->

</div>
<?php
$youtube = node_load_multiple(array(), array('type' => 'youtube_channel_videos'));
$i = 0;
foreach($youtube as $video):
    $title = text_summary($video->title, $format = NULL, $size = 50);
    $you_url = $video->field_youtube_url['und'][0]['value'];
    $likes = $video->field_likes['und'][0]['value'];
    $views = $video->field_views['und'][0]['value']; ?>
    <div class="thevideo" id="thevideo<?php echo $i; ?>"style="display:none;">
        <a href="#" class="videoclose">X</a>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $you_url; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php
    $i++;
endforeach; ?>
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
            auto:false
        });
        $('.bxslider2').bxSlider({
            captions: false,
            nextSelector:false,
            prevSelector:false,
            auto:false,
            pager:false
        });
    })(jQuery);
</script>

