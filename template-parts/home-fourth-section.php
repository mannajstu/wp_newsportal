<?php
 $fourth_category_id=$wp_newsportal['home-page-fourth-section-category'];
$fourth_category_link = get_category_link($fourth_category_id);
$category_post=  $args = array(
    
    'cat'              => $fourth_category_id,
    'post_status' => array(
      'publish',      
    ),

    'orderby'             => 'date',
    
    'posts_per_page'         => 4,
     );

$fourth_category_post = new WP_Query( $args );


?>



 <div class="single_left_coloum_wrapper single_cat_left">
             <h2 class="title"><?php echo $wp_newsportal['home-page-fourth-section-title'];?></h2>
            <a class="more" href="<?php echo $fourth_category_link;?>">more</a>
          
           <?php if ( $fourth_category_post->have_posts() ) : ?>
<?php while ( $fourth_category_post->have_posts() ) : $fourth_category_post->the_post(); ?>

            <div class="single_cat_left_content floatleft">
              <h3><?php the_title(); ?> </h3>
              <p class="justify"><?php echo wp_trim_words( get_the_content(), 15,'' ); ?>
              <a class="readmore" href="<?php the_permalink() ;?>">read more</a></p>
              <p class="single_cat_left_content_meta">by <span><?php the_author(); ?></span> |  <?php comments_number( 'no comments', '1 comments', '% comments' ); ?> 
              </p>
            </div>


            <?php endwhile; ?>
  <!-- end of the loop -->
<?php endif; ?>
  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>
          </div>