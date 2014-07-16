<?php

if (isset($title)) {
  $head_title = $title;
}

else {
  $head_title = "Subscribe to The Tyee";
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $head_title ?></title>
  <link href="http://subscribe.thetyee.ca/stylesheets/style.css" rel="stylesheet" media="screen">
  <link rel="shortcut icon" href="https://static.thetyee.ca/support/v1.3.2/ui/img/favicon.ico">
  <script>
  document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + 'js';
  </script>
</head>

<body>

  <div role="main">
    <img src="http://thetyee.ca/ui/img/logo.png" class="logo">
