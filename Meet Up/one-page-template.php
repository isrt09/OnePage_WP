<?php 

/*Template Name: One Page Template*/ 

?>
<?php get_header(); ?>        
      <?php 
      	  $query = new WP_Query(array('post_type'=>array('page')));
      	  echo '<ul>';
      	  while($query->have_posts()){
      	  	$query->the_post();
      	  	echo '<li>'.the_content().'</li>';
      	  }
      	  echo '</ul>';
       ?>            
<?php get_footer(); ?>
      