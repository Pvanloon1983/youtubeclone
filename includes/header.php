<?php require_once("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Clone</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</head>
<body>
  <div id="pageContainer">
    <div id="mastHeadContainer">
      <button class="navShowHide">
        <img src="assets/images/icons/menu.png">
      </button>

      <a class="logoContainer" href="index.php">
      <img src="assets/images/icons/VideoTubeLogo.png" title="Site logo" alt="Site logo">
      </a>

      <div class="searchBarContainer">
        <form action="search.php" method="GET">
          <input type="text" class="searchBar" name="term" placeholder=""Search...>
          <button class="searchButton">
            <img src="assets/images/icons/search.png">
          </button>
        </form>
      </div>

      <div class="rightIcons">
        <a href="upload.php">
          <img class="upload.php" src="assets/images/icons/upload.png">
        </a>
        <a href="#">
          <img class="upload" src="assets/images/profilePictures/default.png">
        </a>
      </div>

    </div>
    <div id="sideNavContainer" style="display:none;">
      Hello Sidebar
    </div>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">