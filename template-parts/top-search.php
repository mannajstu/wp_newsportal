<div class="search" role="search">
        




           <form  method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    
        <input type="search"    placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"
            " /> <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
        </div>