
 <div class="single_left_coloum_wrapper gallery">
            <h2 class="title"><?php echo $wp_newsportal['home-page-third-section-title'];?></h2>
            <a class="more" href="<?php echo $third_category_link;?>">more</a> 

    <?php 

    $image_id = $wp_newsportal['home-page-third-section-category'];

    $gallery = explode(",", $image_id);
    $i=0;

    foreach($gallery as $image):
if($i<6):
    ?>
    
    <img class="img-home" src="<?php $imag_var = wp_get_attachment_image_src($image); echo $imag_var[0]; 



    
    $i++;?>" alt="">
    <?php endif; ?>
    <?php endforeach; ?>

     </div>