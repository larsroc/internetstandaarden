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
        <header>
          <?php include '/include/nav.php';  ?>
        </header>
        <main>
          <h1 class="title">Portfolio</h1>
          <div class='protfolioFlex'>
            <figure class="protfolioFigure">
              <img src="./img/portfolio/haard.png" class="protfolioImg" alt="shoptrader template haard">
              <figcaption>HAARD</figcaption>
            </figure>
            <figure class="protfolioFigure">
              <img src="./img/portfolio/parfumstore.png" class="protfolioImg" alt="shoptrader template parfumstore">
              <figcaption>PARFUMstore.</figcaption>
            </figure>
            <figure class="protfolioFigure">
              <img src="./img/portfolio/thesound.png" class="protfolioImg" alt="shoptrader template the sound">
              <figcaption>THE SOUND</figcaption>
            </figure>
            <figure class="protfolioFigure">
              <img src="./img/portfolio/jewels.png" class="protfolioImg" alt="shoptrader template jewels">
              <figcaption>Jewels</figcaption>
            </figure>
            <figure class="protfolioFigure">
              <img src="./img/portfolio/flowerpower.png" class="protfolioImg" alt="shoptrader template flowerpower">
              <figcaption>flowerPOWER</figcaption>
            </figure>
          </div>
        </main>
        <footer>
          <?php include '/include/footer.php';  ?>
        </footer>
  </body>
</html>
