<?php

    get_header();
    while(have_posts()) {
        the_post();
?>

<?php
    }
    enroll_html_form();
    enroll_map_html();
    get_footer();
?>