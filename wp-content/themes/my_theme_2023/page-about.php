<?php
    get_header();
    while(have_posts()) {
        the_post();
?>

<section class="about">
    <div class="wrapper">
        <h2><?php the_title(); ?></h2>
        <div>
            <div class="bookmark">
                <a href="<?php echo site_url('/history'); ?>"><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <p class="justify"><?php echo wp_trim_words(get_the_content(null, false, 17), 40); ?></p>
        </div>
        <div>
            <div class="bookmark">
                <a href="<?php echo site_url('/chef'); ?>"><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <p><?php echo wp_trim_words(get_the_content(null, false, 19), 8); ?></p>
            <!--<p><b>The Chef?</b> Mr. Italiano himself.</p> -->
            <p>We are proud of our interiors.</p>
            <img class="chef" src="<?php echo get_theme_file_uri('/images/chef.jpg'); ?>" alt="chef">
        </div>
        <img src="<?php echo get_theme_file_uri('/images/onepage_restaurant.jpg'); ?>" alt="interior">
        <h3>Opening Hours</h3>
        <div class="working-hours">
            <p>Mon & Tue Closed</p>
            <p>Wednesday 10.00-24.00</p>
            <p>Thursday 10.00-24.00</p>
            <p>Friday 10.00-24.00</p>
            <p>Saturday 10.00-23.00</p>
            <p>Sunday Closed</p>
        </div>
    </div>
</section>

<?php
    }
    get_footer();
?>