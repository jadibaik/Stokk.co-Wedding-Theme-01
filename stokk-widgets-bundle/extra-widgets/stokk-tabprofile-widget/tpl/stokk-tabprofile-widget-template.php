<?php 
/*
array(
    'groom' => array(
        'nav_title'=>$instance['groom']['nav_title'],
        'nav_subtitle'=>$instance['groom']['nav_subtitle'],
        'content_title'=>$instance['groom']['content_title'],
        'content_subtitle'=>$instance['groom']['content_subtitle'],
        'groom_image'=>$this->stokk_src_image($instance['groom']['groom_image']),
        'groom_desc'=>$instance['groom']['groom_desc'],
        'fb_link'=>$instance['groom']['fb_link'],
        'tw_link'=>$instance['groom']['tw_link'],
        'ig_link'=>$instance['groom']['ig_link']
    ),
    'bride' => array(
        'nav_title'=>$instance['bride']['nav_title'],
        'nav_subtitle'=>$instance['bride']['nav_subtitle'], 
        'content_title'=>$instance['bride']['content_title'],
        'content_subtitle'=>$instance['bride']['content_subtitle'],
        'bride_image'=>$this->stokk_src_image($instance['bride']['bride_image']),
        'bride_desc'=>$instance['bride']['bride_desc'],
        'fb_link'=>$instance['bride']['fb_link'],
        'tw_link'=>$instance['bride']['tw_link'],
        'ig_link'=>$instance['bride']['ig_link'],

    ),
    'story' => array(
        'nav_title'=>$instance['story']['nav_title'],
        'nav_subtitle'=>$instance['story']['nav_subtitle'],
        'content_title'=>$instance['story']['content_title'],
        'content_subtitle'=>$instance['story']['content_subtitle'],
        'story_desc'=>$instance['story']['story_desc'],
        'bottom_subtitle'=>$instance['story']['bottom_subtitle'],
    ),
);
*/
?>
<section id="tab-profile" class="air-block section tab-profile background-metallics">
    <div class="container">
        <ul class="nav justify-content-center text-center">
            <li class="nav-item">
                <a class="nav-tab" id="tab-nav-about" data-toggle="pill" href="#tab-about" aria-selected="false">
                    <div class="tab-profile_nav">
                        <div class="tab-profile_nav-icon">
                        <div class="tab-profile_nav-icon-logo-tie"></div></div>
                        <div class="nav-tab-title"><?php echo esc_html($groom['nav_title']); ?></div>
                        <div class="nav-tab-subtitle"><?php echo esc_html($groom['nav_subtitle']); ?></div>
                    </div>
                </a> 
            </li>
            <li class="nav-item">
                <a class="nav-tab active" id="tab-nav-story" data-toggle="pill" href="#tab-story" aria-selected="true">
                    <div class="tab-profile_nav">
                        <div class="tab-profile_nav-icon">
                        <div class="tab-profile_nav-icon-logo-ring"></div></div>
                        <div class="nav-tab-title"><?php echo esc_html($story['nav_title']); ?></div>
                        <div class="nav-tab-subtitle"><?php echo esc_html($story['nav_subtitle']); ?></div>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-tab" id="tab-nav-bridge" data-toggle="pill" href="#tab-bridge" aria-selected="false">
                    <div class="tab-profile_nav">
                        <div class="tab-profile_nav-icon">
                        <div class="tab-profile_nav-icon-logo-bride"></div></div>
                        <div class="nav-tab-title"><?php echo esc_html($bride['nav_title']); ?></div>
                        <div class="nav-tab-subtitle"><?php echo esc_html($bride['nav_subtitle']); ?></div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content" id="tabContent">
            <div class="tab-pane fade text-left" id="tab-about">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4">
                        <div class="tab-pane_content">
                            <?php 
                            if($groom['groom_image'][0]){
                                echo '<img src="'.$groom['groom_image'][0].'">';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 col-md-8">
                        <div class="tab-pane_content">
                            <h3>
                                <?php echo esc_html($groom['content_title']); ?>
                                <small> <?php echo esc_html($groom['content_subtitle']); ?>
                                <span style="float:right;">
                                        <a class="mx-2" href="<?php echo esc_url($groom['fb_link']); ?>">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="mx-2" href="<?php echo esc_url($groom['tw_link']); ?>">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="mx-2 mr-3" href="<?php echo esc_url($groom['ig_link']); ?>">
                                            <i class="fa fa-instagram"></i>
                                        </a></span>
                                </small>
                            </h3>
                            <?php 
                            echo $groom['groom_desc']; 
                            ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active text-center" id="tab-story">
                <div class="row">
                    <div class="col-10 mx-auto">
                        <small class="font-two text-h2 text-color-secondary"><?php echo esc_html($story['content_title']); ?></small>
                        <h3>
                         <?php echo esc_html($story['content_subtitle']); ?>
                        </h3>
                        <?php echo $story['story_desc']; ?>
                        <div class="h3 text-couple"><?php echo esc_html($story['bottom_subtitle']); ?></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade  text-left" id="tab-bridge">
                <div class="row">
                    <div class="col-12 col-lg-4  col-md-4 order-lg-2">
                        <div class="tab-pane_content">
                            <?php 
                            if($bride['bride_image'][0]){
                                echo '<img src="'.$bride['bride_image'][0].'">';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8  col-md-8 order-lg-1">
                        <div class="tab-pane_content">
                            <h3>
                                <?php echo esc_html($bride['content_title']); ?>
                                <small> <?php echo esc_html($bride['content_subtitle']); ?>
                                <span style="float:right;">
                                    <a class="mx-2" href="<?php echo esc_url($bride['fb_link']); ?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="mx-2" href="<?php echo esc_url($bride['tw_link']); ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="mx-2 mr-3" href="<?php echo esc_url($bride['ig_link']); ?>">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </span>
                                </small>
                            </h3>
                            <?php echo $bride['bride_desc']; 
                            
                            ?>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>