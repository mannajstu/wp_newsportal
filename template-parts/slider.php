<div class="slider_area">
      <div class="slider">
        <ul class="bxslider">

        	<?php 

if (isset($wp_newsportal['home-slides']) && !empty($wp_newsportal['home-slides'])) {


for ($i=0; $i <count($wp_newsportal['home-slides']) ; $i++) { 


	echo '<li><img src="'.$wp_newsportal['home-slides'][$i]['image'].'" alt="" title="'.$wp_newsportal['home-slides'][$i]['title'].'" /></li>';
	
}
} ?>
          
        </ul>
      </div>
      </div>