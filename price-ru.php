<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Производство,изготовление гибкого камня,изготовление гибкого мрамора">
  <meta name="keywords" content="гибкий камень,гибкий мрамор,искуственый камень,гибкие обои,оделка фасада,отделка фасадов,отделка интериера,имитация натурального камня">
  <meta name="author" content="Cataraga Maxim">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/price.css">
  <link rel="stylesheet" href="css/shared.css">
  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/calculator.js" defer></script>
  <title>GORSTONE Цены</title>
</head>
<body>
  <div class="background"></div>
  <div class="languages"></div>
  <div class="main-block">
    <?php
      require_once "tpl/header-ru.php";
    ?>
    <div class="main-block_items">
    <div class="price-block">
        <div class="price-info">
          <ul>
            <h4>ЦЕНА ЗА М²</h4>
            <li>1-50 м²: 205 лей/м²</li>
            <li>51-100 м²: 190 лей/м²</li>
            <li>101-200 м²: 185 лей/м²</li>
            <li>201-250 м²: 180 лей/м²</li>
            <li>От 250 м²: 175 лей/м²</li>
          </ul>
          <ul>
            <li>Монтаж: примерно 220 лей/м².</li>
            <li>С включенными материалами (клей, грунтовка, леса).</li>
            <li>Монтируется на клей для плитки.</li>
          </ul>
        </div>
        <div id="calculator">
          <h3 class="calc-text">КАЛЬКУЛЯТОР</h3>
          <div class="input-order">
            <input type="number" id="number"><p>м<sup>2</sup></p>
          </div>
          <form id="dop-price">
            <input type="checkbox" id="upgCr"> Монтаж
            <p class="sub-text">(Работа, клей, грунтовка, леса)</p>
          </form>
          <div>
            <button type="button" id="Btn-calculate">Расчет стоимости</button>
            <h3>Стоимость: <span id="current-result">0</span> лей</h3>
          </div>
        </div>
      </div>
      <?php
        require_once "tpl/footer-ru.php";
      ?>
</body>
</html>