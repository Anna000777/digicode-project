<?php
    function my_theme_files() {
        wp_enqueue_style('my-theme-styles', get_stylesheet_uri());
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/8b1d4450ed.js');
    }

    add_action('wp_enqueue_scripts', 'my_theme_files');

    function load_js() {
        if (is_page('menu')) {
            wp_enqueue_script('js-file', get_template_directory_uri().'/js/index.js', array(), '', true);
        } elseif (get_post_type()=='dish') {
            wp_enqueue_script('js-file', get_template_directory_uri().'/js/goto.js', array(), '', true);
        } elseif (is_front_page()) {
            wp_enqueue_script('js-file', get_template_directory_uri().'/js/homepage.js', array(), '', true);
            wp_enqueue_script('js-file-second', get_template_directory_uri().'/js/index.js', array(), '', true);
        }
    }

    add_action('wp_enqueue_scripts', 'load_js');

    function my_theme_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('food-card', 200, 200, true);
        add_image_size('food-portrait', 400, 660, true);
    }

    add_action('after_setup_theme', 'my_theme_features');
?>

<?php
    function enroll_html_form() {
?>
        <section class="contact">
            <div class="wrapper">
                <h2>Contact</h2>
                <p>Find us at some place or call us at +39055295433</p>
                <p class="justify">We offer full-service catering for any event, large or small. We understand your needs and will cater the food to satisfy the biggest criteria of them all, both look and taste.</p>
                <h3><b>Reserve</b> a table, ask for today's special or just send us a message:</h3>
                <form name="reserve" id="reserve" method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                    <input type="hidden" name="action" value="enroll">
                    <input type="text" name="name" placeholder="Name">
                    <input type="tel" name="phone" placeholder="+390** *** ** **" required>
                    <input type="number" name="people" min="1" placeholder="How many people">
                    <input type="datetime-local" name="date" value="<?php $now = date('Y-m-d\TH:i', strtotime('+2 hours')); echo $now; ?>">
                    <input type="text" name="message" placeholder="Message \ Special requirements">
                    <input type="submit" name="enroll-submit" value="Send Message">
                </form>
            </div>
        </section>
<?php
    }

    function handle_enroll_form() {
        $valid = true;
        if (isset($_POST['enroll-submit'])) {
            $error_message = '';
            $name = '';
            if (!empty($_POST['name'])) {
                $name = sanitize_text_field($_POST['name']);
            } else {
                $name = 'No Name '.rand(0,1000);
            }
            
            $phone = '';
            if (!empty($_POST['phone'])) {
                $phone = sanitize_text_field($_POST['phone']);
                $result = preg_match('/^\+39[0-9]{10}$/', $phone);
                if (!$result) {
                    $error_message = 'Incorrect phone number. It should be +390*** ** **. '.'<br>';
                    $valid = false;
                }
            }
            
            $people = 1;
            if (!empty($_POST['people'])) {
                $people = $_POST['people'];
            }

            $date = '';
            $date2 = date('d/m/Y H:i', strtotime('+2 hours'));
            if (empty($_POST['date'])) {
                $valid = false;
            } else {
                $date = date('d/m/Y H:i', strtotime($_POST['date']));
            } 
            if ($date < $date2) {
                $error_message .= 'This date has already passed...';
                $valid = false;
            } 

            $message = '';
            if (!empty($_POST['message'])) {
                $message = sanitize_text_field($_POST['message']);
            } else {
                $message = 'No message...';
            }

            $form_content = '';
            if ($valid) {
                $form_content = 'Name: '.$name.'<br>';
                $form_content .= "Phone number: ".$phone.'<br>';
                $form_content .= "Guests' amount: ".$people.'<br>';
                $form_content .= 'Date: '.$date.'<br>';
                $form_content .= 'Message: '.$message.'<br>';
                var_dump($form_content);

                wp_insert_post(array(
                    'post_title' => $name.' - '.wp_date('d.m.Y H:i', strtotime('+2 hours')),
                    'post_type' => 'message',
                    'post_content' => $form_content,
                    'post_status' => 'publish',
                ));

                wp_safe_redirect(site_url('success'));
                exit;
            } else {
                update_field('error_message', $error_message, 118);
                wp_safe_redirect(site_url('oops'));
                exit;
            }
        }
    }

    add_action('admin_post_enroll', 'handle_enroll_form');
    add_action('admin_post_nopriv_enroll', 'handle_enroll_form');
?>

<?php
    function enroll_map_html() {
?>
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11524.607873864166!2d11.247230037312436!3d43.76970416108036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a5400e4b9c2f3%3A0x121b038e2faa952f!2zUC56YSBkZWxsYSBTaWdub3JpYSwgNTAxMjIgRmlyZW56ZSBGSSwg0JjRgtCw0LvQuNGP!5e0!3m2!1sru!2sua!4v1669709008272!5m2!1sru!2sua" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
<?php
    }
?>