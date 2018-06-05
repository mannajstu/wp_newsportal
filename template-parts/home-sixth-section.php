
<?php
 $fifth_category_id=$wp_newsportal['home-page-fifth-section-category'];
$fifth_category_link = get_category_link($fifth_category_id);
$category_post=  $args = array(
    
    'cat'              => $fifth_category_id,
    'post_status' => array(
      'publish',      
    ),

    'orderby'             => 'date',
    
    'posts_per_page'         => 5,
     );

$fifth_category_post = new WP_Query( $args );


?>

<div class="single_right_coloum">
            <h2 class="title">editorial</h2>

<?php if ( $fifth_category_post->have_posts() ) : ?>
<?php while ( $fifth_category_post->have_posts() ) : $fifth_category_post->the_post(); ?>
            <div class="single_cat_right_content editorial">  <img class="img-home" src="<?php the_post_thumbnail_url(); ?>" alt="" />
              <h3><?php the_title(); ?></h3>
            </div>

 <?php endwhile; ?>
  <!-- end of the loop -->
<?php endif; ?>
  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>
            

          </div>