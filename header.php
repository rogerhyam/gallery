<!DOCTYPE html>

<html lang="en">
<head>
<title><?php echo $page_title; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="<?php echo $page_title; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo 'https://www.hyam.net' .  $_SERVER['REQUEST_URI'] ?>" />

<?php
  // we need a $featured_image for the open graph
  // it should be set above here but we can fall back to the first
  // image in the photos array if it isn't
  if(!isset($featured_image)){
    if(isset($photos)){
      $featured_image = "https://www.hyam.net/" . $photos[0]->file;
    }else{
      $featured_image = ""; // default to blank
    }
  }

?>
<meta property="og:image" content="<?php echo $featured_image ?>" />


<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/w3v5.02.css">
<link rel="stylesheet" href="style/main.css">
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="w3-bar-item w3-button">HOME</a>
    <a href="/#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="/#photographs" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PHOTOGRAPHS</a>
    <a href="/#dedication" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-heart-o"></i> DEDICATION</a>
    <a href="/#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="/#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="/#photographs" class="w3-bar-item w3-button" onclick="toggleFunction()">PHOTOGRAPHS</a>
    <a href="/#dedication" class="w3-bar-item w3-button" onclick="toggleFunction()">DEDICATION</a>
    <a href="/#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>
    <!-- end header.php -->