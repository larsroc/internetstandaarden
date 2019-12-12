<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>template</title>
    <link rel="shortcut icon" href="include/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  </head>
    <body>
      <!-- <div class="loadin"><img src="http://pngtransparent.com/images/satellite-png-1920x1080_efd79960.png"></div> -->
        <header>
          <?php include '/include/nav.php';  ?>
        </header>
        <main>
          <h1 class="naam">Lars Kamman</h1>
          <div class="parralax">
            <img src="img/earth.png" class="layer" alt="earth" data-speed="1">
            <img src="img/moon.png" class="layer-moon" alt="moon">
            <img src="img/space_ship.png" class="layer ship" alt="space_ship" data-speed="4">
            <script src="js/javascript.js"></script>
          </div>
        </main>
        <footer>
          <?php include '/include/footer.php';  ?>
        </footer>
  </body>
</html>
