<!-- section blog -->
<section class="air-block blog-carousel background-metallics" id="blog-slider">
    <!-- Swiper -->
    <?php if( ! empty( $images_blog ) ) : ?>
    <div class="swiper-container blog-slide-container">
        <div class="swiper-wrapper">
            <?php foreach( $images_blog as $image ) : ?>
            <div class="swiper-slide">
                <div class="thumb">
                    <?php echo wp_get_attachment_image( $image['image'],'full', false, array('title' => $image['title']) );?>
                </div>
                <div class="overlay">
                    <div class="overlay-meta">Our Love Notes</div>
                    <div class="overlay-title">PERFECT TIME
                        <br> WITH LOVELY COUPLE</div>
                    <div class="overlay-content d-none d-lg-block d-xl-block">
                       <?php echo esc_html($images_blog['content']); ?><?php echo esc_attr($content); ?>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="btn btn-empty"><?php echo esc_attr($button_caption); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>
</section>