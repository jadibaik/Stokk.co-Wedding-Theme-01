<!-- section blog -->
<section class="air-block blog-carousel background-metallics" id="blog-slider">
    <!-- Swiper -->
    <div class="swiper-container blog-slide-container">
         <?php if($images['list']){ ?>
        <div class="swiper-wrapper">
                <?php 
                    foreach($images['list'] as $blog){
                ?>
            <div class="swiper-slide">
                <div class="thumb">
                    <?php 
                    
                        $image = !empty($blog['image']) ? wp_get_attachment_image_src($blog['image'],'full')[0] : get_template_directory_uri().'/assets/images/wedding/blog-01.jpg';
                        echo '<img src="'.$image.'">';
                        
                    ?>
                </div>
                <div class="overlay">
                    <div class="overlay-meta"><?php echo esc_html($blog['subtitle']); ?></div>
                    <div class="overlay-title"><?php echo esc_html($blog['title']); ?></div>
                    <div class="overlay-content d-none d-lg-block d-xl-block">
                        <?php echo esc_html($blog['content']); ?>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo esc_url($blog['url']); ?>" class="btn btn-empty"><?php echo esc_textarea($blog['button_caption']); ?></a>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>

        </div>

        <!-- Add Pagination -->
        <div class="blog-slide-pagination swiper-pagination mt-3"></div>
        <?php } ?>
    </div>
</section>