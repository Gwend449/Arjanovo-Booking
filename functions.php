<?php
/**
 * Forest Hideaway Theme Functions
 */

// Theme Setup
function forest_hideaway_setup()
{
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'forest-hideaway'),
        'footer' => __('Footer Menu', 'forest-hideaway')
    ));
}
add_action('after_setup_theme', 'forest_hideaway_setup');


function forest_hideaway_scripts()
{
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600;700&display=swap', array(), null);

    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', array(), '2.2.19');

    wp_enqueue_style('forest-hideaway-style', get_stylesheet_uri(), array('tailwind-css'), '1.0');

    // Theme JavaScript
    wp_enqueue_script('forest-hideaway-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'forest_hideaway_scripts');
function auto_load_gallery_images()
{
    $theme_path = get_template_directory();
    $theme_url = get_template_directory_uri();
    $gallery_folder = '/images/';

    $images = [];
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    // Проверяем существование папки
    $full_path = $theme_path . $gallery_folder;
    if (!is_dir($full_path)) {
        return '<p>Gallery folder not found.</p>';
    }

    // Читаем файлы в папке
    $files = scandir($full_path);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..')
            continue;

        $file_path = $full_path . $file;
        $file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

        // Проверяем что это изображение
        if (in_array($file_extension, $allowed_extensions) && is_file($file_path)) {
            $images[] = [
                'src' => $theme_url . $gallery_folder . $file,
                'alt' => pathinfo($file, PATHINFO_FILENAME),
                'title' => ucfirst(str_replace(['-', '_'], ' ', pathinfo($file, PATHINFO_FILENAME)))
            ];
        }
    }

    if (empty($images)) {
        return '<p>No images found in gallery folder.</p>';
    }

    // Генерируем галерею
    $output = '<div class="custom-gallery" id="auto-gallery">';

    foreach ($images as $index => $image) {
        $output .= sprintf(
            '<div class="gallery-item" data-index="%d">
                <img src="%s" 
                     data-src="%s" 
                     alt="%s" 
                     title="%s"
                     loading="lazy"
                     class="lazy-load">
            </div>',
            $index,
            esc_url(get_template_directory_uri() . '/public/placeholder.jpg'),
            esc_url($image['src']),
            esc_attr($image['alt']),
            esc_attr($image['title'])
        );
    }

    $output .= '</div>';

    return $output;
}

function handle_booking_form()
{
    if (isset($_POST['booking_submit'])) {
        // Verify nonce
        if (!isset($_POST['booking_nonce']) || !wp_verify_nonce($_POST['booking_nonce'], 'booking_form')) {
            wp_die('Security check failed');
        }

        // Sanitize data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $checkin = sanitize_text_field($_POST['checkin']);
        $checkout = sanitize_text_field($_POST['checkout']);
        $guests = intval($_POST['guests']);
        $message = sanitize_textarea_field($_POST['message']);

        // Email setup
        $to = get_option('admin_email');
        $subject = 'Новая заявка с сайта "Воронье Гнездо"';
        $body = "Заявка получена:\n\n";
        $body .= "Имя: $name\n";
        $body .= "Почта: $email\n";
        $body .= "Телефон: $phone\n";
        $body .= "Заезд: $checkin\n";
        $body .= "Выезд: $checkout\n";
        $body .= "Количество гостей: $guests\n";
        $body .= "Комментарий: $message\n";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Воронье Гнездо <no-reply@' . $_SERVER['SERVER_NAME'] . '>',
            "Reply-To: $email"
        );

        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(add_query_arg('booking', 'success', $_SERVER['REQUEST_URI']));
        } else {
            wp_redirect(add_query_arg('booking', 'error', $_SERVER['REQUEST_URI']));
        }
        exit;
    }
}
add_action('template_redirect', 'handle_booking_form');

function register_activities_post_type()
{
    $args = array(
        'public' => true,
        'label' => 'Activities',
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-palmtree',
    );
    register_post_type('activity', $args);
}
add_action('init', 'register_activities_post_type');

function register_gallery_post_type()
{
    $args = array(
        'public' => true,
        'label' => 'Gallery',
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallery',
    );
    register_post_type('gallery_item', $args);
}
add_action('init', 'register_gallery_post_type');

function my_phpmailer_example($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = SMTP_HOST;
    $phpmailer->SMTPAuth = SMTP_AUTH;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_USER;
    $phpmailer->Password = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From = SMTP_FROM;
    $phpmailer->FromName = SMTP_NAME;

}
add_action('phpmailer_init', 'my_phpmailer_example');
// add_action('init', function () {
//     if (isset($_GET['testmail'])) {
//         wp_mail('nlyapin2013@yandex.ru', 'SMTP Test', 'Если ты получил это письмо — SMTP работает!');
//         exit('Test email sent.');
//     }
// });
?>