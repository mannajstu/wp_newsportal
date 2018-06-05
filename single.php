
 <?php get_header(); ?>

<div class="content_area">
      <div class="main_content floatleft">
        
          
         


                     
           <?php if ( have_posts() ) : ?>

  
  <?php while ( have_posts() ) : the_post(); ?>
    
<img  class="img-single" src="<?php the_post_thumbnail_url(); ?>" alt="" />
<div class="jumbotron">
              <h2 class="title"><?php the_title(); ?></h3>
              <p class="justify"><?php echo wp_trim_words( get_the_content(), -1,'' ); ?></p>

      </div>        

	<?php $comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);	?>
<ol class="commentlist">
	<?php
		//Gather comments for a specific page/post 
		$comments = get_comments(array(
			'post_id' => get_the_ID(),
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		//Display the list of comments
		wp_list_comments(array(
			'per_page' => 10, //Allow comment pagination
			'reverse_top_level' => false //Show the oldest comments at the top of the list
		), $comments);
	?>
</ol>


  <?php endwhile; ?>
  <!-- end of the loop -->
<?php endif; ?>
  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>



         
        
      </div>
      <?php require_once get_template_directory().'/template-parts/home-seventh-section.php';?>
      </div>
    </div>


    <?php get_footer(); ?>