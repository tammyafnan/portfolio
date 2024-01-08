<?php

$single_post_social = fallow_option('enable_blog_social', 0);

if (!$single_post_social) {
   return;
}

$social_share = fallow_option('social_share');

if (!is_array($social_share)) {
   return;
}

?>

<div class="post-share">
   <h5> <?php echo  esc_html__('Social', 'fallow') . ':'; ?> </h5>
   <?php foreach ($social_share as $item) : ?>
      <a class="<?php echo esc_attr($item['social_type']); ?>" data-social="<?php echo esc_attr($item['social_type']); ?>" href="#"><i class="<?php echo esc_attr($item['bookmark_icon']); ?>"></i></a>
   <?php endforeach; ?>
</div>