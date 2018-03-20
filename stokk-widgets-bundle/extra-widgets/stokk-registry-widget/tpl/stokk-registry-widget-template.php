<!-- section registry --> 
<section class="air-block bg-metallics pt-0 pb-0 background-metallics" id="registry">
    <div class="container">
        <div class="row d-flex align-items-center text-center text-lg-left pb-5">
            <div class="col-12 col-lg-2 m-auto m-md-0">
                <div class="lead ">
                    <div class="font-two text-h2 mb-0 pb-0 text-color-secondary"><?php echo esc_attr($title); ?></div>
                    <div class="h3  text-color-primary"><?php echo esc_attr($subtitle); ?></div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-3 ml-auto">
                <a href="#">
                    <img alt="image" class="img-fluid align-middle pt-5 pt-md-0" src="<?php echo get_template_directory_uri();?>/assets/images/wedding/logo/logo-01.png">
                </a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <div class="text-center bg-white p-5">
                            <?php 
                            if($testimonial['logo'][0]){
                            echo '<img alt="image" class="img-fluid" src="'.$testimonial['logo'][0].'" style="margin-top:-110px;">';
                            }
                            ?>
                    <p><?php echo esc_html($testimonial['desc']); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>