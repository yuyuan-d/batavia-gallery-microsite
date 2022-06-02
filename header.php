<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsive.css"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">

<!-- <link rel="stylesheet" href="/path/to/bootstrap.min.css">
<script src="/path/to/jquery.min.js"></script>
<script src="/path/to/moment-with-locales.min.js"></script>
<link href="build/css/tempusdominus-bootstrap-4.css" rel="stylesheet">
<script src="build/js/tempusdominus-bootstrap-4.js"></script> -->
<link rel="stylesheet" href="/path/to/fontawesome.min.css">

<title> <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>
</title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
</head>

<body>
<header class="container-fluid bg1">
  <div class="container col-md-10">
    
    <nav class="navbar navbar-dark navbar-expand-md">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html"><img src="http://206.189.45.97/~mesh8/wp-content/uploads/2022/06/logo.png" alt="logo"></a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="history.html">History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Visit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="book.html">Book</a>
              </li>
          </ul>
        </div>
      </nav>

    <div class="tag">
      <h2>THE BATAVIA</h2>
      <h1>MUTINY & 
        <br>MASSACRE</h1>
    </div>
    <a href="#" class="btn" role="button">Explore Now</a>

  </div> <!-- container -->
  <?php wp_head(); ?> 
 </header>