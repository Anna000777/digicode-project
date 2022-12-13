<?php
    get_header();
    while(have_posts()) {
        the_post();
?>

<section class="page dish">
    <div class="wrapper">
        <h2><?php the_title(); ?></h2>
        <p class="category"><a data-category="<?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>" href="<?php echo site_url('/menu'); ?>">It's a <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> category.</a></p>
        <?php
            the_post_thumbnail('food-card');
        ?>
        <div class="page-content">
            <?php
                the_content();
                $relatedDishes = get_field('try_with');
                
            ?>
        </div>

        <?php if ($relatedDishes) { ?>
        <div class="related-dishes">
            <p class="category">Try with</p>
            <div class="related-dishes-content">
                <?php
                    foreach ($relatedDishes as $dish) {
                ?>
                <div>
                    <h3><?php echo get_the_title($dish); ?></h3>
                    <a href="<?php echo get_the_permalink($dish); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url($dish, 'thumbnail'); ?>" alt="<?php echo get_the_title($dish); ?>">
                    </a>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<?php
    }
    get_footer();
?>