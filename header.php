<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta property="og:image"
    content="<?php echo esc_url(get_template_directory_uri()); ?>/img/ogimg.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
