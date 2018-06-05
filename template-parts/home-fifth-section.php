
<?php
 $fifth_category_id=$wp_newsportal['home-page-fifth-section-category'];
$fifth_category_link = get_category_link($fifth_category_id);
$category_post=  $args = array(
    
    'cat'              => $fifth_category_id,
    'post_status' => array(
      'publish',      
    ),

    'orderby'             => 'date',
    
    'posts_per_page'         => 3,
     );

$fifth_category_post = new WP_Query( $args );


?>

<div class="right_coloum floatright">
          <div class="single_right_coloum">
            <h2 class="title"><?php echo $wp_newsportal['home-page-fifth-section-title'];?></h2>
            <ul>
              <?php if ( $fifth_category_post->have_posts() ) : ?>
<?php while ( $fifth_category_post->have_posts() ) : $fifth_category_post->the_post(); ?>
              <li>
                <div class="single_cat_right_content">
                  <h3><?php the_title(); ?></h3>
                  <p class="justify"><?php echo wp_trim_words( get_the_content(), 15,'' ); ?>
              </p>
                  <p class="single_cat_right_content_meta"><a href="<?php the_permalink() ;?>"><span>read more</span></a> 
<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>

</p>
                </div>
              </li>
              
            <?php endwhile; ?>
  <!-- end of the loop -->
<?php endif; ?>
  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>
            </ul>
            <a class="popular_more" href="<?php echo $fifth_category_link;?>">more</a> </div>
          