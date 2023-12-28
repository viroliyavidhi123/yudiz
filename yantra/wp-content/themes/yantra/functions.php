<?php
function yantra()
{
	wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js');
	wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/js/jquery-3.6.4.js');
	wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/js/slick.min.js');
	wp_enqueue_style('slider-css', get_stylesheet_directory_uri() . '/css/slick.css');
	wp_enqueue_style('fonts-NeueMachina', get_stylesheet_directory_uri() . '/fonts/NeueMachina');
	wp_enqueue_style('fonts-Satoshi', get_stylesheet_directory_uri() . '/fonts/Satoshi');
	wp_enqueue_style('theam-css', get_stylesheet_directory_uri() . '/css/slick-theme.css');
	wp_enqueue_style('font-awsome-style', get_stylesheet_directory_uri() . '/css/all.css');
	wp_enqueue_style('animate-css', get_stylesheet_directory_uri() . '/css/animate.css');
	wp_enqueue_script('wow-js', get_stylesheet_directory_uri() . '/js/wow.min.js');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('scrollme-js', get_stylesheet_directory_uri() . '/js/scrollme.js');
}
add_action('wp_enqueue_scripts', 'yantra', 99);


// function widgest
function twenty_twenty_one_custom_widgets_init()
{

	register_sidebar(
		array(
			'name'          => esc_html__('footer-logo', 'yantra'),
			'id'            => 'footer-logo',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'yantra'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Quick-Links', 'yantra'),
			'id'            => 'Quick-Links',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'yantra'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('Connect-with-Us', 'yantra'),
			'id'            => 'Connect-with-Us',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'yantra'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('powered-by', 'yantra'),
			'id'            => 'powered-by',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'yantra'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__('privacy-policy', 'yantra'),
			'id'            => 'privacy-policy',
			'description'   => esc_html__('Add widgets here to appear in your footer.', 'yantra'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action('widgets_init', 'twenty_twenty_one_custom_widgets_init');


// Allow SVG
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


//   footer social icon
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args)
{
	// loop
	foreach ($items as &$item) {
		// vars
		$icon = get_field('menu_icon', $item);
		// append icon
		if ($icon) {
			$item->title = ' <img class="menu-icon" src=' . $icon . ' alt="icon"/>';
		}
	}
	// return
	return $items;
}

//Hide WordPress version number
function remove_version_info()
{
	return '';
}
add_filter('the_generator', 'remove_version_info');
