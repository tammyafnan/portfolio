<?php
// get header customizer option 

$logo                      = FALLOW_IMG  . '/logo-white.svg';
$fallow_logo_url            = fallow_option('logo') == '' ? $logo : fallow_option('logo');
$sticky_logo               = FALLOW_IMG . '/logo.svg';
$fallow_sticky_logo_url     = fallow_option('sticky_logo') == '' ? $sticky_logo : fallow_option('sticky_logo');
$fallow_offcanvas_logo_url     = fallow_option('offcanvas_logo') == '' ? $sticky_logo : fallow_option('offcanvas_logo');
$enable_cta                = fallow_option('enable_cta', false);
$enable_sticky_header      = fallow_option('enable_sticky_header', 1);
$enable_transparent_header = fallow_option('enable_transparent_header', 0);

$user_account_link         = fallow_option('user_account_link', false);
$cta_text                  = fallow_option('cta_text', 'Get Started');
$cta_link                  = fallow_option('cta_link', '#');
$social_links              = fallow_option('social_link', []);
$fcontent                  = fallow_option('offcanvas_footer_content', []);
$header_style_override     = fallow_meta_option(get_the_id(), 'header_style_override', 0);

if ($header_style_override && is_page()) {

    $fallow_sticky_logo_url = fallow_meta_option(get_the_id(), 'sticky_logo') == '' ? $fallow_sticky_logo_url : fallow_meta_option(get_the_id(), 'sticky_logo');
    $fallow_logo_url = fallow_meta_option(get_the_id(), 'logo') == '' ? $fallow_logo_url : fallow_meta_option(get_the_id(), 'logo');
    $enable_cta     = fallow_meta_option(get_the_id(), 'enable_button_override', 0);
}

$col_lg_1 = 7;
$col_lg_2 = 3;

if (!$enable_cta || $enable_cta) {
    $col_lg_1 = 8;
    $col_lg_2 = 2;
}

if (is_404()) {

    $enable_transparent_header = fallow_option('enable_404_transparent_header', false);
}


?>

<!--====== OFFCANVAS MENU PART START ======-->

<div class="off_canvars_overlay">
</div>
<div class="offcanvas_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="offcanvas-brand text-center mb-40">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo fallow_get_logo_type_tag($fallow_offcanvas_logo_url, 'img-fluid'); ?>
                        </a>
                    </div>
                    <div id="menu" class="text-left ">
                        <?php get_template_part('template-parts/navigations/nav', 'mobile'); ?>
                    </div>
                    <?php if (fallow_option('enable_blog_social_link') == true && is_array($social_links) && !empty($social_links)) : ?>

                        <div class="offcanvas-social">
                            <ul class="text-center">
                                <?php foreach ($social_links as $item) : ?>

                                    <li><a href="<?php echo esc_url($item['bookmark_url']); ?>"><i class="<?php echo esc_attr($item['bookmark_icon']); ?>"></i></a></li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if (is_array($fcontent) && !empty($fcontent)) : ?>
                        <div class="footer-widget-info">
                            <ul>
                                <?php foreach ($fcontent as $item) : ?>
                                    <?php

                                    $link = $item['link'];
                                    $link_type = $item['link_type'];

                                    if ($link_type == 'phone') {
                                        $link = 'tel:' . $link;
                                    }

                                    if ($link_type == 'email') {
                                        $link = 'mailto:' . $link;
                                    }

                                    ?>
                                    <li>
                                        <?php if ($link != '') : ?>
                                            <a href="<?php echo 'url' == $link_type ? esc_url($link) : esc_attr($link); ?>">
                                            <?php endif; ?>
                                            <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                                            <?php echo esc_html($item['content']); ?>
                                            <?php if ($link != '') : ?>
                                            </a>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== OFFCANVAS MENU PART ENDS ======-->

<!--====== PART START ======-->

<header class="fallow-header-area <?php echo esc_attr($enable_transparent_header ? 'fallow-transparent-header' : ''); ?> <?php echo esc_attr($enable_sticky_header ? 'fallow-sticky' : ''); ?>">
    <div class="container">
        <div class="header-nav-box">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-7 col-sm-5 col-6 order-1 order-sm-1">
                    <div class="fallow-logo-box">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo fallow_get_logo_type_tag($fallow_logo_url, 'img-fluid main-logo'); ?>
                            <?php echo fallow_get_logo_type_tag($fallow_sticky_logo_url, 'img-fluid sticky-logo d-none'); ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-<?php echo esc_attr($col_lg_1); ?> col-md-1 col-sm-1 order-3 order-sm-2">
                    <div class="fallow-header-main-menu">
                        <?php get_template_part('template-parts/navigations/nav', 'primary'); ?>
                    </div>
                </div>
                <div class="col-lg-<?php echo esc_attr($col_lg_2); ?> col-md-4 col-sm-6 col-6 order-2 order-sm-3">
                    <div class="fallow-btn-box text-right">
                        <?php if ($enable_cta) : ?>
                            <a class="main-btn ml-30" href="<?php echo esc_url($cta_link); ?>"><?php echo esc_html($cta_text); ?></a>
                        <?php endif; ?>

                        <div class="toggle-btn ml-30 canvas_open d-lg-none d-block">
                            <i class="fa fa-bars"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</header>