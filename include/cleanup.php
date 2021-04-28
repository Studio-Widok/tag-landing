<?php
add_theme_support("title-tag");
if (!isset($content_width)) {$content_width = 900;}
add_filter('show_admin_bar', '__return_false');

add_filter('intermediate_image_sizes', function ($sizes) {
  return array_filter($sizes, function ($val) {
    return $val !== 'medium_large';
  });
});

add_action('init', function () {
  wp_deregister_script('wp-embed');
  remove_image_size('1536x1536');
  remove_image_size('2048x2048');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  unregister_taxonomy_for_object_type('post_tag', 'post');
  unregister_taxonomy_for_object_type('category', 'post');

  add_image_size('small', 400, 400);
});

add_action('wp_default_scripts', function ($scripts) {
  if (!is_admin() && isset($scripts->registered['jquery'])) {
    $script = $scripts->registered['jquery'];
    if ($script->deps) {
      $script->deps = array_diff($script->deps, ['jquery-migrate']);
    }
  }
});

add_action('wp_before_admin_bar_render', function () {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
});
add_action('admin_menu', function () {
  remove_menu_page('edit.php'); // Posts
  remove_menu_page('edit-comments.php'); // Comments
}, 11);

add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
});
