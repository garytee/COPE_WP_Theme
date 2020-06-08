<?php
                    // // GLOBAL NAV
                    // //store the current blog_id - Use this function at the start of the function that you want to share
                    // global $blog_id;
                    // $current_blog_id = $blog_id;
                    // //switch to the main blog which will have an id of 1
                    // switch_to_blog(1);
                    // //output the WordPress navigation menu - incase of menu-sharing use this
                    // // wp_nav_menu( array(
                    // //     'theme_location' => 'menu-1',
                    // //     'menu_id'        => 'primary-menu',
                    // // ) );
                    //     //switch back to the current blog being viewed - before ending of the function
                    // // switch_to_blog($current_blog_id); 
                    ?>

<?php 

// args
$args = array(
    'numberposts'   => -1,
    'posts_per_page' => -1,
    'post_type'     => 'locations',
    // 'meta_key'       => 'location',
    // 'meta_value' => 'Melbourne'
);



// Custom query.
$query = new WP_Query( $args );

// Check that we have query results.
if ( $query->have_posts() ) {
    echo '[';
    // Start looping over the query results.
    while ( $query->have_posts() ) {

        $query->the_post();

        $comma_char = ($query->current_post + 1) < ($query->post_count) ? "," : "";//add comma if not last post
        // printf('<a href="%s" class="link">%s</a>' . $comma_char, get_permalink(), get_the_title());
        // printf('<a href="%s" class="link">%s</a>%s' . $comma_char, get_permalink(), get_field('latitude'), get_the_title());
        // printf('<a href="%s" class="link">%s</a>%s' . $comma_char, get_permalink(), get_the_title(), get_field('latitude'));
        printf('{"name":"%s","lat":"%s","lng":"%s"}' . $comma_char, get_the_title(), get_field('latitude'), get_field('longitude'));

    }
echo ']';
}

// Restore original post data.
wp_reset_postdata();


// switch_to_blog($current_blog_id); 

?>
