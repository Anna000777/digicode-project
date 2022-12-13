<?php

    get_header();
    while(have_posts()) {
        the_post();
?>

<section class="menu">
    <div class="wrapper">
        <h2><?php the_title(); ?></h2>
        <div id="tabs">
            <div id="tabs-heads">
                <button data-category="pizza" class="tab-head-item active1">Pizza</button>
                <button data-category="salad" class="tab-head-item">Salads</button>
                <button data-category="starter" class="tab-head-item">Starter</button>
            </div>
            <div id="tabs-body">
                <div data-category="pizza" class="tab-item active1">
                    <ul class="menu-list">
                        <?php
                            $menu_items_pizzas = new WP_Query(array(
                                'post_type' => 'dish',
                                'posts_per_page' => -1,
                                'category_name' => 'pizza',
                                'meta_key' => 'price',
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
                            ));
                            while ($menu_items_pizzas->have_posts()) {
                                $menu_items_pizzas->the_post();
                        ?>
                        <li class="menu-item">
                            <h3 class="<?php echo get_field('dish_label'); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="price">
                                <p>$<?php echo get_field('price')?></p>
                            </div>
                            <?php the_excerpt(); ?>
                        </li>

                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>

                <div data-category="salad" class="tab-item">
                    <ul class="menu-list">
                        <?php
                            $menu_items_salads = new WP_Query(array(
                                'post_type' => 'dish',
                                'posts_per_page' => -1,
                                'category_name' => 'salad',
                                'meta_key' => 'price',
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
                            ));
                            while ($menu_items_salads->have_posts()) {
                                $menu_items_salads->the_post();
                        ?>
                        <li class="menu-item">
                            <h3 class="<?php echo get_field('dish_label'); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="price">
                                <p>$<?php echo get_field('price')?></p>
                            </div>
                            <?php the_excerpt(); ?>
                        </li>

                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>

                <div data-category="starter" class="tab-item">
                    <ul class="menu-list">
                        <?php
                            $menu_items_starters = new WP_Query(array(
                                'post_type' => 'dish',
                                'posts_per_page' => -1,
                                'category_name' => 'starter',
                                'meta_key' => 'price',
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
                            ));
                            while ($menu_items_starters->have_posts()) {
                                $menu_items_starters->the_post();
                        ?>
                        <li class="menu-item">
                            <h3 class="<?php echo get_field('dish_label'); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="price">
                                <p>$<?php echo get_field('price')?></p>
                            </div>
                            <?php the_excerpt(); ?>
                        </li>

                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>


<?php
    }
    get_footer();
?>