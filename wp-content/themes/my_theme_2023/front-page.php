<?php
    get_header();
    while(have_posts()) {
        the_post();
?>

<main>
    <div class="header" style="background-image: url(<?php echo get_theme_file_uri('/images/pizza.jpg'); ?>); ">
        <h1>Garibaldi's Pizza</h1>
        <button><a href="<?php echo site_url('/menu'); ?>">Let me see the menu</a></button>
        <div class="work-hours">
            <p>Open from 10AM to 12PM</p>
        </div>
    </div>
    <section class="menu">
        <div class="wrapper">
            <h2>The Menu</h2>
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
                                    'posts_per_page' => 4,
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
                                    'posts_per_page' => 4,
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
                                    'posts_per_page' => 4,
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
    <section class="about">
        <div class="wrapper">
            <h2>About</h2>
            <p class="justify">Garibaldi's Pizza Restaurant was founded in blabla Mr. Patrizio Garibaldi in Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi nihil repellat sed sint. Accusantium architecto asperiores assumenda culpa doloribus est fuga magnam, minus numquam officia reiciendis repudiandae saepe, sint.</p>
            <div>
                <p><b>The Chef?</b> Mr. Italiano himself.</p>
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
    <?php enroll_map_html(); ?>
    <!-- <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11524.607873864166!2d11.247230037312436!3d43.76970416108036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a5400e4b9c2f3%3A0x121b038e2faa952f!2zUC56YSBkZWxsYSBTaWdub3JpYSwgNTAxMjIgRmlyZW56ZSBGSSwg0JjRgtCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1669709008272!5m2!1sru!2sua" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section> -->
    <!-- <section class="contact">
        <div class="wrapper">
            <h2>Contact</h2>
            <p>Find us at some place or call us at 05050525-122330</p>
            <p class="justify">We offer full-service catering for any event, large or small. We understand your needs and will cater the food to satisfy the biggest criteria of them all, both look and taste.</p>
            <h3><b>Reserve</b> a table, ask for today's special or just send us a message:</h3>
            <form name="reserve" id="reserve" action="">
                <input type="text" placeholder="Name">
                <input type="number" min="1" placeholder="How many people">
                <input type="date" placeholder="11/16/2020 08:00 PM">
                <input type="text" placeholder="Message \ Special requirements">
                <input type="submit" value="Send Message">
            </form>
        </div>
    </section> -->
</main>

<?php
    }
    enroll_html_form();
    get_footer();
?>
