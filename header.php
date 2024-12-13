<?php
define("IS_SSL_ENABLED", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on');
define(
  "BASE_URL",
  (IS_SSL_ENABLED ? "https" : "http") . "://" .
  $_SERVER['HTTP_HOST'] .
  str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(__DIR__))
);
define(
  "CURRENT_URL",
  (IS_SSL_ENABLED ? "https" : "http") . "://" .
  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TAG</title>
  <link rel="icon" type="image/png" href="./media/favicon.png" />
  <meta property="og:url" content="<?= CURRENT_URL ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="TAG" />
  <meta property="og:image" content="<?= BASE_URL ?>/media/ogimg.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="color-scheme" content="light only">
  <link rel="stylesheet" href="./dist/main.css" />
  <link rel="stylesheet" href="https://book.dineout.pl/dist/index.css?v=1.1">
</head>

<body>
  <?php include 'include/partials.php'; ?>
