
<!-- Sign Up Section -->
<div class="container sign_up">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="prev_arrow" href="<?php global $base_url; /*print $base_url;*/ print $_SERVER["HTTP_REFERER"] ?>#front"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/prev_arrow.png" alt="Show"></a>
            <div class="support">
               <p class="how-works">How it works</p>
                <ul class="app-icons">
                    <li><a href="https://itunes.apple.com/in/app/trulymadly/id964395424?mt=8" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/apple_logo.png" /></a></li>
                    <li><a href="https://play.google.com/store/apps/details?id=com.trulymadly.android.app&referrer=utm_source%3Dwebsite_new" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/android_logo.png" /></a></li>
                    <li><a href="http://windowsphone.com/s?appId=45a2c781-52c3-4f72-a16d-79210a16cc68" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/window_logo.png" /></a></li>
                </ul>
                <div id="signup" class="signup">
                    <div id="cap0" class="signup-round-box1" data-loc="1">
                        <p>SIGN UP FOR FREE</p>
                        <!-- <div class="signup-cont signup-cont1">1</div> -->
                    </div>

                    <div id="cap1" class="signup-round signup-round-box2" data-loc="2">
                        <p>WE POKE AROUND TILL WE KNOW ABOUT YOU.</p>
                        <div class="signup-cont signup-cont2">1</div>
                    </div>

                    <div id="cap2" class="signup-round signup-round-box3" data-loc="3">
                        <p>WE SNIFF OUT THE PERFECT ONES FOR YOU.</p>
                        <div class="signup-cont signup-cont3">2</div>
                    </div>

                    <div id="cap3" class="signup-round signup-round-box4" data-loc="4">
                        <p>YOU 'LIKE' OR 'HIDE' THE MATCHES WITHOUT<br> THEM KNOWING IT.</p>
                        <div class="signup-cont signup-cont4">3</div>
                    </div>

                    <div id="cap4" class="signup-round signup-round-box5" data-loc="5">
                        <p>AND IF THEY <br> ALSO LIKE YOU <br> BACK, YOU START <br> TALKING. YAY!</p>
                        <div class="signup-cont signup-cont5">4</div>
                    </div>
                </div>
            </div>
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
    <a href="https://www.facebook.com/trulymadly/"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/fb_icon.png" alt=""></a>
    <a href="https://twitter.com/thetrulymadly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/tw_icon.png" alt=""></a>
    <a href="https://www.instagram.com/thetrulymadly/"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/insta_icon.png" alt=""></a>
    <a href="https://www.youtube.com/user/trulymadlycom"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/yt_icon.png" alt=""></a>
</div>
<!-- end -->
</div>
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

