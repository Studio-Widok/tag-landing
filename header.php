<?php $url = ""?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tytuł</title>
  <link rel="icon" type="image/png" href="./media/favicon.png" />
  <meta property="og:url" content="<?=$url?>/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="tytuł" />
  <meta property="og:description" content="opis" />
  <meta property="og:image" content="<?=$url?>/media/ogimg.png" />
  <meta property="og:image:width" content="512" />
  <meta property="og:image:height" content="512" />
  <link rel="stylesheet" href="./dist/main.css" />
</head>

<body>
  <?php include 'include/partials.php';?>
