<!-- section RSVP -->
<section class="air-block section rsvp background-metallics" id="rsvp">
    <div class="container">
        <div class="col-12">
            <div class="rsvp-wrapper" style="background-image:url('<?php echo get_template_directory_uri();?>/assets/images/wedding/bg-rsvp.jpg');">
                <!-- rsvp card -->
                <div class="rsvp-inner">
                    <div class="rsvp-card float-lg-left">
                        <div class="rsvp-badge">
                            <?php 
                            if($rsvp_left['rsvp_icon'][0]){
                            echo '<img src="'.$rsvp_left['rsvp_icon'][0].'">';
                            }
                            ?>
                        </div>
                        <small class="font-two text-h3 text-color-secondary"><?php echo esc_html($rsvp_left['rsvp_subtitle']); ?></small>
                        <h3 class="text-color-primary mb-lg-4"><?php echo esc_html($rsvp_left['rsvp_title']); ?></h3>
                        <p><?php echo esc_html($rsvp_left['rsvp_content']); ?></p>

                        <ul class="list-unstyled">
                            <li class="media mb-3">
                            <?php 
                            if($rsvp_left['rsvp_one_icon'][0]){
                                echo '<img class="mr-3 pt-1" src="'.$rsvp_left['rsvp_one_icon'][0].'" alt="Generic placeholder image">';
                            }
                            ?>
                                <div class="media-body">
                                    <div class="text-h4 mt-0 mb-1 text-color-primary "><?php echo esc_html($rsvp_left['rsvp_one_content_title']); ?></div>
                                    <div class="text-h5 "><?php echo esc_html($rsvp_left['rsvp_one_content_subtitle']); ?></div>
                                </div> 
                            </li>
                            <li class="media">
                                
                            <?php 
                            if($rsvp_left['rsvp_two_icon'][0]){
                                echo '<img class="mr-3 pt-1" src="'.$rsvp_left['rsvp_two_icon'][0].'" alt="Generic placeholder image">';
                            }
                            ?>
                            
                                <div class="media-body">
                                    <div class="text-h4 mt-0 mb-1 text-color-primary "><?php echo esc_html($rsvp_left['rsvp_two_content_title']); ?></div>
                                    <div class="text-h5 "><?php echo esc_html($rsvp_left['rsvp_two_content_subtitle']); ?></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="rsvp-card float-lg-right">
                        <div class="rsvp-badge">
                            <?php 
                            if($rsvp_right['rsvp_icon'][0]){
                            echo '<img src="'.$rsvp_right['rsvp_icon'][0].'">';
                            }
                            ?>
                        </div>
                        <small class="font-two text-h3 text-color-secondary"><?php echo esc_html($rsvp_right['rsvp_subtitle']); ?></small>
                        <h3 class="text-color-primary mb-lg-4"><?php echo esc_html($rsvp_right['rsvp_title']); ?></h3>
                        <p><?php echo esc_html($rsvp_right['rsvp_content']); ?></p>

                        <ul class="list-unstyled">
                            <li class="media mb-3">
                            <?php 
                            if($rsvp_right['rsvp_one_icon'][0]){
                                echo '<img class="mr-3 pt-1" src="'.$rsvp_right['rsvp_one_icon'][0].'" alt="Generic placeholder image">';
                            }
                            ?>
                                <div class="media-body">
                                    <div class="text-h4 mt-0 mb-1 text-color-primary "><?php echo esc_html($rsvp_right['rsvp_one_content_title']); ?></div>
                                    <div class="text-h5 "><?php echo esc_html($rsvp_right['rsvp_one_content_subtitle']); ?></div>
                                </div>
                            </li>
                            <li class="media">
                            <?php 
                            if($rsvp_right['rsvp_two_icon'][0]){
                                echo '<img class="mr-3 pt-1" src="'.$rsvp_right['rsvp_two_icon'][0].'" alt="Generic placeholder image">';
                            }
                            ?>
                                <div class="media-body">
                                    <div class="text-h4 mt-0 mb-1 text-color-primary "><?php echo esc_html($rsvp_right['rsvp_two_content_title']); ?></div>
                                    <div class="text-h5 "><?php echo esc_html($rsvp_right['rsvp_two_content_title']); ?></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- rsvp form --> 
                <div class="rsvp-form">
                    <form>
                        <div class="form-row">
                            <!--
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                            
                            <div class="col-lg-3">
                                <select id="inputState" class="form-control">
                                    <option selected>Guest 1</option>
                                    <option>Guest 2</option>
                                    <option>Guest 3</option>
                                    <option>Guest 4</option>
                                </select> 
                            -->
                            </div>
                            <div class="col-lg-3 mx-auto" >
                            <a href="<?php echo esc_url($button_link['link']); ?>"> <button type="button" class="btn btn-rsvp"><?php echo esc_html($button_link['caption']); ?></button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>