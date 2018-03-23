<!-- section gallery -->
<section class="air-block gallery-carousel pt-0 pb-5 background-metallics" id="gallery-slider">
    <div class="container">
        <div class="col">
            <header class="header-block text-center background-metallics">
                <div class="header-block-meta pb-0 mb-0"><?php echo esc_attr($subtitle); ?></div>
                <h2 class="header-block-title text-uppercase"><?php echo esc_attr($title); ?></h2>
            </header>
        </div>
    </div>

    <!-- Swiper -->
  <?php if( ! empty( $images['gallery_list'] ) ) : ?>
    <div class="swiper-container gallery-slide-container pt-4">
        <div class="swiper-wrapper my-gallery"> 
        <?php foreach( $images['gallery_list'] as $gallery ) : ?>
        <p class="imglist">
            
            <div class="swiper-slide">
                    <?php 
                    
                        $image = !empty($gallery['image']) ? wp_get_attachment_image_src($gallery['image'],'full')[0] : get_template_directory_uri().'/assets/images/wedding/gallery-01.jpg';
                        echo '<img src="'.$image.'">';
                        
                    ?>
                    <div class="thumb">
                    <?php 
                    
                        $image = !empty($gallery['image']) ? wp_get_attachment_image_src($gallery['image'],'full')[0] : get_template_directory_uri().'/assets/images/wedding/gallery-01.jpg';
                        echo '<img src="'.$image.'">';
                        
                    ?>
                        
                    </div>
                    <div class="overlay d-flex align-items-center">
                        <div class="gallery-caption mx-auto">
                            <span><?php echo esc_html($gallery['images_title']); ?></span><?php echo esc_html($gallery['images_subtitle']); ?></div>
                    </div>
            </div>
            
        </p>
        <?php endforeach; ?>
        </div>
        
        <!-- Add Pagination -->
        <div class="gallery-slide-pagination swiper-pagination mt-5 pb-0"></div>

    <?php endif; ?>
    </div>
</section>