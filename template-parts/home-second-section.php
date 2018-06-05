
<?php
 $second_category_id=$wp_newsportal['home-page-second-section-category'];
$second_category_link = get_category_link($second_category_id);
$category_post=  $args = array(
    
    'cat'              => $second_category_id,
    'post_status' => array(
      'publish',      
    ),

    'orderby'             => 'date',
    
    'posts_per_page'         => 3,
     );

$second_category_post = new WP_Query( $args );


?>

 <div class="single_left_coloum_wrapper">
            <h2 class="title"><?php echo $wp_newsportal['home-page-second-section-title'];?></h2>
            <a class="more" href="<?php echo $second_category_link;?>">more</a>
           
<?php if ( $second_category_post->have_posts() ) : ?>

  
  <?php while ( $second_category_post->have_posts() ) : $second_category_post->the_post(); ?>
           <div class="single_left_coloum floatleft"> <img class="img-home" src="<?php the_post_thumbnail_url(); ?>" alt="" />
              <h3><?php the_title(); ?></h3>
              <p class="justify"><?php echo wp_trim_words( get_the_content(), 15,'' ); ?></p>
              <a class="readmore" href="<?php the_permalink() ;?>">read more</a> </div>


              <?php endwhile; ?>
  <!-- end of the loop -->
<?php endif; ?>
  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>
            
          </div>