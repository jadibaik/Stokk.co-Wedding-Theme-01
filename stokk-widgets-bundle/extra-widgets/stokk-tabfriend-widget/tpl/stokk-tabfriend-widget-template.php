<!-- section friend-collage -->
<section id="tab-friend" class="tab-friend air-block pt-0 background-metallics">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav  col-lg-8 mx-auto justify-content-center text-center mb-5">
                    <li class="nav-item">
                        <a class="nav-tab active" id="brides-tab" data-toggle="pill" href="#tab-brides" aria-selected="true"><?php echo esc_html($brides_maid['nav_title']); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-tab font-two text-color-secondary" id="brides-tab" data-toggle="pill" href="#tab-friends" aria-selected="true"><?php echo esc_html($friends_colleagues['nav_title']); ?></small>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-tab" id="grooms-tab" data-toggle="pill" href="#tab-grooms" aria-selected="false"><?php echo esc_html($grooms_men['nav_title']); ?></a>
                    </li>
                </ul>
                <div class="tab-content text-center" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="tab-brides">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-image"> 
                                <?php 
                                if($brides_maid['image_a'][0]){
                                    echo '<img class="card-img-top" src="'.$brides_maid['image_a'][0].'" alt="Card image cap">';
                                }
                                ?>
                                <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['fb_link_a']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['tw_link_a']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($brides_maid['ig_link_a']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($brides_maid['name_a']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($brides_maid['status_a']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image"> 
                                <?php 
                                if($brides_maid['image_b'][0]){
                                    echo '<img class="card-img-top" src="'.$brides_maid['image_b'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['fb_link_b']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['tw_link_b']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($brides_maid['ig_link_b']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($brides_maid['name_b']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($brides_maid['status_b']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($brides_maid['image_c'][0]){
                                    echo '<img class="card-img-top" src="'.$brides_maid['image_c'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['fb_link_c']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['tw_link_c']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($brides_maid['ig_link_c']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($brides_maid['name_c']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($brides_maid['status_c']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image"> 
                                <?php 
                                if($brides_maid['image_d'][0]){
                                    echo '<img class="card-img-top" src="'.$brides_maid['image_d'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['fb_link_d']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($brides_maid['tw_link_d']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($brides_maid['ig_link_d']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($brides_maid['name_d']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($brides_maid['status_d']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="tab-friends">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($friends_colleagues['image_a'][0]){
                                    echo '<img class="card-img-top" src="'.$friends_colleagues['image_a'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['fb_link_a']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['tw_link_a']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($friends_colleagues['ig_link_a']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($friends_colleagues['name_a']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($friends_colleagues['status_a']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($friends_colleagues['image_b'][0]){
                                    echo '<img class="card-img-top" src="'.$friends_colleagues['image_b'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['fb_link_b']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['tw_link_b']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($friends_colleagues['ig_link_b']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($friends_colleagues['name_b']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($friends_colleagues['status_b']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($friends_colleagues['image_c'][0]){
                                    echo '<img class="card-img-top" src="'.$friends_colleagues['image_c'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['fb_link_c']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['tw_link_c']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($friends_colleagues['ig_link_c']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($friends_colleagues['name_c']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($friends_colleagues['status_c']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($friends_colleagues['image_d'][0]){
                                    echo '<img class="card-img-top" src="'.$friends_colleagues['image_d'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['fb_link_d']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($friends_colleagues['tw_link_d']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($friends_colleagues['ig_link_d']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($friends_colleagues['name_d']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($friends_colleagues['status_d']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-grooms">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($grooms_men['image_a'][0]){
                                    echo '<img class="card-img-top" src="'.$grooms_men['image_a'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['fb_link_a']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['tw_link_a']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($grooms_men['ig_link_a']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($grooms_men['name_a']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($grooms_men['status_a']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($grooms_men['image_b'][0]){
                                    echo '<img class="card-img-top" src="'.$grooms_men['image_b'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['fb_link_b']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['tw_link_b']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($grooms_men['ig_link_b']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($grooms_men['name_b']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($grooms_men['status_b']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($grooms_men['image_c'][0]){
                                    echo '<img class="card-img-top" src="'.$grooms_men['image_c'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['fb_link_c']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['tw_link_c']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($grooms_men['ig_link_c']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($grooms_men['name_c']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($grooms_men['status_c']); ?></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-image">
                                <?php 
                                if($grooms_men['image_d'][0]){
                                    echo '<img class="card-img-top" src="'.$grooms_men['image_d'][0].'" alt="Card image cap">';
                                }
                                ?>
                                    <div class="show_icon">
                                        <div class="hero-icon_wrapper d-flex align-items-center text-center">
                                            <div class="hero-icon_inner mx-auto">
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['fb_link_d']); ?>">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a class="mx-2" href="<?php echo esc_url($grooms_men['tw_link_d']); ?>">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a class="mx-2 mr-3" href="<?php echo esc_url($grooms_men['ig_link_d']); ?>">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo esc_html($grooms_men['name_d']); ?></h4>
                                    <p class="card-text"><?php echo esc_html($grooms_men['status_d']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>