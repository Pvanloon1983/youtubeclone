<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YouTube Clone</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="assets/js/commonActions.js"></script>
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
    </div>
    <div id="sideNavContainer" style="display:none;">
      Hello Sidebar
    </div>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">
        Hello Main Container
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>