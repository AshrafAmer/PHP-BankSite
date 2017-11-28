<!doctype html>

<html lang="en">
  <head>
    <title>Globe Bank
      <?php
      if(isset($page_title)) {
        echo '- ' . h($page_title);
      }
      if(isset($preview) && $preview) {
        echo ' [PREVIEW]';
      } ?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <a href="<?= url_for('/index.php'); ?>">
          <img src="<?= url_for('/images/gbi_logo.png'); ?>" width="298" height="71" alt="" />
        </a>
      </h1>
    </header>
