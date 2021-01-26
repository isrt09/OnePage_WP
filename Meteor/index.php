<?php get_header(); ?>
    <?php get_template_part('/templates/slider'); ?>
    <?php get_template_part('/templates/about'); ?>
    <?php get_template_part('/templates/whattodo'); ?>
    <?php get_template_part('/templates/counter'); ?>
    <?php get_template_part('/templates/portfolio'); ?>    
    <div id="blog" class="page-section">        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Our Blog Posts</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>            
            <div class="row">                
                <?php 
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>
                    <div class="col-md-6">                                                    
                        <div class="blog-item b1">
                            <div class="thumb">
                                <?php the_post_thumbnail(); ?>
                                <div class="text-content">
                                    <h4><a href=" <?php the_permalink();?>"><?php the_title(); ?></a></h4>
                                    <span>Posted: <em><?php the_author(); ?></em>  /  Date: <em><?php the_time('d F, Y'); ?></em>  /  Category: <em><?php the_category(', '); ?></em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php  }
                    }
                 ?>                            
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pop">
                      <span>✖</span>
                      <?php the_content(); ?>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('/templates/contact'); ?>
<?php get_footer(); ?>