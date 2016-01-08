<!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
    <link rel="profile" href="<?php print $grddl_profile; ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <!-- HTML5 element support for IE6-8 -->
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->
    <?php print $scripts; ?>

</head>
<body<?php print $body_attributes; ?> class="mobile_body">
<div id="wrapper">
    <div class="toClosetheTestimonials"><!-- added by me -->

    <!-- header Section -->
    <header>
        <div class="container-fluid">
            <div class="row header">
                <div class="logo"><a href="<?php global $base_url; print $base_url; ?>"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/logo.png" alt=""></a></div>
                <a href="#menu" id="toggle_menu" class=""><span></span></a>
                <div id="menu">
                    <div class="menu_content">
                        <ul>
                            <?php
                            $menu = menu_tree_all_data('main-menu');
                            foreach($menu as $menu):
                             //   dpm($menu['link']);
                                ?>

                                <li><a href="<?php echo $base_url.'/'.$menu['link']['link_path']; ?>"><?php echo $menu['link']['link_title']; ?></a></li>
                            <?php
                                if($menu['link']['mlid'] == 443 ):
                                    echo "</ul><ul>";
                                endif;
                            endforeach;
                            ?>
<!--                            <li><a href="about-us.html">Introduction</a></li>-->
<!--                            <li><a href="about-us.html">Our Team</a></li>-->
<!--                            <li><a href="about-us.html">Investors</a></li>-->
<!--                            <li><a href="#">BLOG</a></li>-->
<!--                            <li><a href="contact-us.html">CONTACT US</a></li>-->
<!--                        </ul>-->
<!--                        <ul>-->
<!--                            <li><a href="#home">SITEMAP</a></li>-->
<!--                            <li><a href="#about">AWARDS</a></li>-->
<!--                            <li><a href="#contact">SAFETY GUIDELINES</a></li>-->
<!--                            <li><a href="#">TERMS OF USE</a></li>-->
<!--                            <li><a href="#">PRIVACY POLICY</a></li>-->
<!--                            <li><a href="#">CAREER</a></li>-->
<!--                            <li><a href="#">LEGAL</a></li>-->
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-12">
                        <a href="https://www.facebook.com/trulymadly/" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/fb_icon.png" alt=""></a>
                        <a href="https://twitter.com/thetrulymadly?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/tw_icon.png" alt=""></a>
                        <a href="https://www.instagram.com/thetrulymadly/" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/insta_icon.png" alt=""></a>
                        <a href="https://www.youtube.com/user/trulymadlycom" target="_blank"><img src="<?php global $base_url; print $base_url; ?>/sites/all/themes/tm/images/yt_icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end -->

    <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
