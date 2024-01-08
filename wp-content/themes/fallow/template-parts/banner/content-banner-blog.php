<?php


$banner_image                = '';
$banner_url                  = FALLOW_IMG . '/page-bg.jpg';
$banner_title                = get_bloginfo('name');
$show                        = fallow_option('blog_banner_show', 1);
$show_breadcrumb             = fallow_option('blog_show_breadcrumb', 1);
$banner_blog_image           = fallow_option('banner_blog_image');
$banner_class                = '';
$enable_transparent_header   = fallow_option('enable_transparent_header', 0);
if (fallow_option('banner_blog_title') != '') {
   $banner_title = fallow_option('banner_blog_title');
}

if (isset($banner_blog_image['background-image']['url']) && $banner_blog_image['background-image']['url'] == '') {
   $banner_image = 'style="background-image:url(' . esc_url($banner_url) . ');"';
}

if (is_singular('post')) {
   $show_breadcrumb = fallow_option('blog_single_show_breadcrumb', 0);
}



?>
<?php if ($show) : ?>
   <div class="fallow-page-title-area <?php echo esc_attr($enable_transparent_header ? 'ts-header' : ''); ?>" <?php echo fallow_kses($banner_image); ?>>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="fallow-page-title-item">
                  <h3 class="title">
                     <?php
                     if (is_archive()) {
                        the_archive_title();
                     } else {
                        echo esc_html($banner_title);
                     }
                     ?>
                  </h3>
                  <nav aria-label="breadcrumb">
                     <?php if ($show_breadcrumb) : ?>

                        <?php fallow_get_breadcrumbs(''); ?>

                     <?php endif; ?>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php endif; ?>