<?php
    get_header();
    while(have_posts()) {
        the_post();
?>

<section class="page">
    <div class="wrapper">
        <h2><?php the_title(); ?></h2>
        <?php if(get_the_post_thumbnail_url() || is_page('history') || is_page('chef')) {
        ?>
        <img src="<?php
            if (is_page('history')) {
                echo get_theme_file_uri('/images/onepage_restaurant.jpg');
           } elseif (is_page('chef')){
                echo get_theme_file_uri('/images/chef.jpg');
            }
        ?>" alt="<?php the_title(); ?>">
        <?php } ?>
        <div class="page-content">
            <?php 
                if (get_field('error_message')) {
                    echo get_field('error_message');
                } else {
                    the_content(); 
                }
                
            ?>
        </div>
    </div>
</section>

<?php
    }
    enroll_map_html();
    get_footer();
?>