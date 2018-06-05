<?php
 $first_category_id=$wp_newsportal['home-page-first-section-category'];
$first_category_link = get_category_link($first_category_id);
$category_post=  $args = array(
    
    'cat'              => $first_category_id,
    'post_status' => array(
      'publish',      
    ),

    'orderby'             => 'date',
    
    'posts_per_page'         => 3,
     );

$first_category_post = new WP_Query( $args );


?>


<div class="single_left_coloum_wrapper">
            <h2 class="title"><?php echo $wp_newsportal['home-page-first-section-title'];?></h2>
            <a class="more" href="<?php echo $first_category_link;?>">more</a>
          
           <?php if ( $first_category_post->have_posts() ) : ?>

  
  <?php while ( $first_category_post->have_posts() ) : $first_category_post->the_post(); ?>
    
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