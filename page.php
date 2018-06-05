
 <?php get_header(); ?>

<div class="content_area">
      <div class="main_content floatleft">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <?php the_title(); ?>
 <?php the_content(); ?>
 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>
      </div>
      <?php require_once get_template_directory().'/template-parts/home-seventh-section.php';?>
      </div>
    </div>


    <?php get_footer(); ?>