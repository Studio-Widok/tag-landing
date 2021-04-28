<?php
function change_url($value, $option) {
  include __DIR__ . '/config.php';
  return $url;
}
add_filter('option_siteurl', 'change_url', 10, 2);
add_filter('option_home', 'change_url', 10, 2);
add_filter(
  'template_directory_uri',
  function ($template_dir_uri, $template, $theme_root_uri) {
    include __DIR__ . '/config.php';
    return $url . '/wp-content/themes/' . $template;
  },
  10, 3
);
add_filter('get_attached_file', function ($file) {
  return str_replace('/test_2/', '/test/', $file);
}, 10, 2);
