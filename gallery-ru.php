<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Производство,изготовление гибкого камня,изготовление гибкого мрамора">
  <meta name="keywords" content="гибкий камень,гибкий мрамор,искуственый камень,гибкие обои,оделка фасада,отделка фасадов,отделка интериера,имитация натурального камня">
  <meta name="author" content="Cataraga Maxim">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/gallery.css">
  <link rel="stylesheet" href="css/shared.css">
  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/gallery.js" defer></script>
  <title>GORSTONE Галерея</title>
</head>
<body>
  <div class="background"></div>
  <div class="full_img">
    <div class="backdrop" onclick="removeImg()"></div>
    <div class="image-items">
      <div class="main-img"><img class="gallery_img-images" src="gallery/f33.jpg" alt="0" onclick="removeImg()"></div>
      <div id="go-back" onclick="goPrevImg()"><img src="img/arowsright.png"></div>
      <div id="go-next" onclick="goNextImg()"><img src="img/arowsright.png"></div>
    </div>
  </div>
  <div class="main-block">
    <?php
      require_once "tpl/header-ru.php";
    ?>
      <div class="main-block_items">
      <div class="btn--category">
          <div class="active" onclick="allImg()">ВСЕ</div>
          <div onclick="intImg()">ИНТЕРЬЕР</div>
          <div onclick="fasImg()">ФАСАДЫ</div>
        </div>
        <div id="gallery">
        <div class="gal-img fas"><img src="gallery/f46.jpg" alt="0" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f47.jpg" alt="1" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f48.jpg" alt="2" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f49.jpg" alt="3" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f50.jpg" alt="4" onclick="openImg(this)"></div>

        <div class="gal-img fas"><img src="gallery/f41.jpg" alt="5" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f42.jpg" alt="6" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f43.jpg" alt="7" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f44.jpg" alt="8" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f45.jpg" alt="9" onclick="openImg(this)"></div>

        <div class="gal-img fas"><img src="gallery/f33.jpg" alt="10" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f34.jpg" alt="11" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f36.jpg" alt="12" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f37.jpg" alt="13" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f35.jpg" alt="14" onclick="openImg(this)"></div>
        
        <div class="gal-img fas"><img src="gallery/f32.jpg" alt="15" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f30.jpg" alt="16" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f31.jpg" alt="17" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i34.jpg" alt="18" onclick="openImg(this)"></div>
        
        <div class="gal-img fas"><img src="gallery/f38.jpg" alt="19" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f39.jpg" alt="20" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f40.jpg" alt="21" onclick="openImg(this)"></div>
        
        <div class="gal-img int"><img src="gallery/i31.jpg" alt="22" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i32.jpg" alt="23" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i33.jpg" alt="24" onclick="openImg(this)"></div>
        
        <div class="gal-img fas"><img src="gallery/f17.jpg" alt="25" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f19.jpg" alt="26" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i28.jpg" alt="27" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f20.jpg" alt="28" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f21.jpg" alt="29" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f22.jpg" alt="30" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f26.jpg" alt="31" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i23.jpg" alt="32" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f25.jpg" alt="33" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f16.jpg" alt="34" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f18.jpg" alt="35" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f24.jpg" alt="36" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i26.jpg" alt="37" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i27.jpg" alt="38" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f27.jpg" alt="39" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f28.jpg" alt="40" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i30.jpg" alt="41" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i29.jpg" alt="42" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f29.jpg" alt="43" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f23.jpg" alt="44" onclick="openImg(this)"></div>
        
        <div class="gal-img fas"><img src="gallery/f6.jpg" alt="45" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i25.jpg" alt="46" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i24.jpg" alt="47" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f7.jpg" alt="48" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f8.jpg" alt="49" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f9.jpg" alt="50" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f11.jpg" alt="51" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f12.jpg" alt="52" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f15.jpg" alt="53" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f10.jpg" alt="54" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f13.jpg" alt="55" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f14.jpg" alt="56" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i22.jpg" alt="57" onclick="openImg(this)"></div>

        <div class="gal-img int"><img src="gallery/i1.jpg" alt="58" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i2.jpg" alt="59" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i3.jpg" alt="60" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i4.jpg" alt="61" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i5.jpg" alt="62" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i6.jpg" alt="63" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i7.jpg" alt="64" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i8.jpg" alt="65" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i9.jpg" alt="66" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i10.jpg" alt="67" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i11.jpg" alt="68" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i12.jpg" alt="69" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i13.jpg" alt="70" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i14.jpg" alt="71" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i15.jpg" alt="72" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i16.jpg" alt="73" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i17.jpg" alt="74" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i18.jpg" alt="75" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i19.jpg" alt="76" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f1.jpg" alt="77" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f2.jpg" alt="78" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i20.jpg" alt="79" onclick="openImg(this)"></div>
        <div class="gal-img int"><img src="gallery/i21.jpg" alt="80" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f3.jpg" alt="81" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f4.jpg" alt="82" onclick="openImg(this)"></div>
        <div class="gal-img fas"><img src="gallery/f5.jpg" alt="83" onclick="openImg(this)"></div>
      </div>
      <?php
        require_once "tpl/footer-ru.php";
      ?>
</body>
</html>