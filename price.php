<!DOCTYPE html>
<html lang="md">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Producție, fabricarea de piatră flexibilă, fabricarea marmurii flexibile">
  <meta name="keywords" content="piatra elastica,marmura elastica,piatra flexibila,marmura flexibila,tapete piatra flexibile,piatra artificiala,tapete elastice,decorarea fațadelor, decorarea fațadelor, decorațiunile interioare, imitația pietrei naturale">
  <meta name="author" content="Catarag Maxim">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/price.css">
  <link rel="stylesheet" href="css/shared.css">
  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/calculator.js" defer></script>
  <title>GORSTONE Preturi</title>
</head>
<body>
  <div class="background"></div>
  <div class="main-block">
    <?php
      require_once "tpl/header.php";
    ?>
    <div class="main-block_items">
      <div class="price-block">
        <div class="price-info">
          <ul>
            <h4>PREȚ LA M²</h4>
            <li>1-50 m²: 205 lei/m²</li>
            <li>51-100 m²: 190 lei/m²</li>
            <li>101-200 m²: 185 lei/m²</li>
            <li>201-250 m²: 180 lei/m²</li>
            <li>De la 250 m²: 175 lei/m²</li>
          </ul>
          <ul>
            <li>Montarea: în jur de 220 lei/m².</li>
            <li>Cu materialele incluse ( cleiul, grund, șchelele).</li>
            <li>Se montează pe clei pentru teracotă.</li>
          </ul>
        </div>
        <div id="calculator">
          <h3 class="calc-text">CALCULATOR</h3>
          <div class="input-order">
            <input type="number" id="number"><p>m<sup>2</sup></p>
          </div>
          <form id="dop-price">
            <input type="checkbox" id="upgCr"> Montarea
            <p class="sub-text">(Lucru, adeziv, grund, șchelele)</p>
          </form>
          <div>
            <button type="button" id="Btn-calculate">Calcularea rezultatului</button>
            <h3>Rezultatul: <span id="current-result">0</span> lei</h3>
          </div>
        </div>
      </div>
    <?php
      require_once "tpl/footer.php";
    ?>
</body>
</html>