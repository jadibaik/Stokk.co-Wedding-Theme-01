<?php
/**
 * @var $images array
 * @var $max_height int
 * @var $max_width int
 * @var $attachment_size string
 */
?>
<!-- section hero slider -->
<section class="air-block hero-carousel background-metallics pt-0 pb-0" id="hero-slider">
  <!-- Swiper -->
  <?php if( ! empty( $images ) ) : ?>
  <div class="hero-slide-container swiper-container">
    <div class="swiper-wrapper">
      <?php foreach( $images as $image ) : ?>
      <div class="swiper-slide">
        <?php echo wp_get_attachment_image( $image['image'],'full', false, array('title' => $image['title']) );?>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Add Pagination -->
    <div class="hero-slide-pagination swiper-pagination mt-3"></div>
  </div>
  <?php endif; ?>
  <div class="hero-badge_wrapper d-flex align-items-center text-center">
      <div class="hero-badge_inner mx-auto">
        <h3><?php echo esc_attr($title_top); ?></h3>
        <h1><?php echo esc_attr($title); ?></h1>
        <h4><?php echo esc_attr($title_bottom); ?></h4>
      </div>
  </div>
</section>