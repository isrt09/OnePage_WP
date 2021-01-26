<section class="cd-hero">
        <ul class="cd-hero-slider autoplay">  
        <!-- 
            <ul class="cd-hero-slider autoplay"> for slider auto play 
            <ul class="cd-hero-slider"> for disabled auto play
        --> <?php 
                $meteor_slider = new WP_Query(array(
                    'post_type' => 'slider'
                ));

                if($meteor_slider->have_posts()){
                    while($meteor_slider->have_posts()){
                        $meteor_slider->the_post(); 
                        $slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full'); ?>
                                         
            <li class="selected first-slide" style="background-image: url(<?php echo $slider_image['0']?>);">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Introduction to</span>
                        <?php the_title('<h2>','</h2>') ?>
                        <?php wpautop(the_content()); ?>
                        <div class="primary-button">
                            <a href="#" class="scroll-link" data-id="about">Discover More</a>
                        </div>                           
                    </div>                   
                </div> <!-- .cd-full-width -->
            </li>
            <?php  }
                }
            ?>        
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                
                <ul>
                    <li class="selected"><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                    <li><a href="#0"></a></li>                        
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->