<!DOCTYPE >
<html lang="ru">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<link rel="stylesheet" href="css/header.css?5.6" />
<link rel="stylesheet" href="fonts/stylesheet.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<?php if(isset($csspage)){ 
  echo'<link rel="stylesheet" href="css/pages/' . $csspage . '" />';
  echo '<link rel="stylesheet" href="css/form.css?5.6" />';
  }else{
    echo '<link rel="stylesheet" href="css/main.css?5.6" />';
    }
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
<header>
  <div class="HeaderContainer">
    <a href="index.php">
      <logo>
        <img src="img/logo.svg" />
      </logo>
    </a>
    <nav>
      <ul>
        <li><a href="Company.php">О компании</a></li>
        <li id="DirectionsMenuBtn">Направления бизнеса
          <div class="Directions_hidden">
            <ul>
              <li><a href="PremierCars.php">Premier Cars</a></li>
              <li><a href="Marketplace.php">Аликсон Маркетплейс</a></li>
              <li><a href="Opt.php">Оптовая дистрибуция</a></li>
              <li><a href="Investitions.php">Alikson Invest</a></li>
              <li><a href="Mining.php">Майнинг</a></li>
              <li><a href="Logistick.php">Логистика</a></li>
              <li><a href="Tender.php">Тендерный дивизион</a></li>
              <li><a href="PayAgent.php">Платежный агент</a></li>
              <li><a href="Development.php">Девелопмент</a></li>
              <li><a href="Vad.php">ВЭД</a></li>
              <li><a href="ApartSharing.php">Apart Sharing</a></li>
            </ul>
          </div>
        </li>
        <li><a href="https://hh.ru/employer/5185896">Карьера в компании</a></li>
        <li><a href="<?php if(isset($csspage)){echo 'index.php';} ?>#AnchorForm">Контакты</a></li>
      </ul>
    </nav>
    <div class="Header-Menu">
      <button><img src="img/zoom.svg" /></button>
      <input type="text" placeholder="Поиск по сайту" />
    </div>
    <div class="Header-Menu_mobile">
      <button id="MenuButton"><img src="img/BurgerMenu.svg" /></button>
      <div class="Header-Menu_mobile_hidden">
        <div>
          <a href="Company.php"><span>О компании</span><img src="img/ArrowRight_2.svg"></a>
        </div>
        <div>
          <button data="h1"><span>Направления бизнеса</span><img src="img/ArrowRight_2.svg"></button>
          <div data="h1">
            <ul>
              <li><a href="PremierCars.php">Premier Cars</a></li>
              <li><a href="Marketplace.php">Аликсон Маркетплейс</a></li>
              <li><a href="Opt.php">Оптовая дистрибуция</a></li>
              <li><a href="Investitions.php">Alikson Invest</a></li>
              <li><a href="Mining.php">Майнинг</a></li>
              <li><a href="Logistick.php">Логистика</a></li>
              <li><a href="Tender.php">Тендерный дивизион</a></li>
              <li><a href="PayAgent.php">Платежный агент</a></li>
              <li><a href="Development.php">Девелопмент</a></li>
              <li><a href="Vad.php">ВЭД</a></li>
              <li><a href="ApartSharing.php">Apart Sharing</a></li>
            </ul>
          </div>
        </div>
        <div>
          <a href="news.php"><span>Новости</span><img src="img/ArrowRight_2.svg"></a>
        </div>
        <div>
          <a href="<?php if(isset($csspage)){echo 'index.php';} ?>#AnchorProjects"><span>Проекты</span><img src="img/ArrowRight_2.svg"></a>
        </div>
        <div>
          <a href="https://hh.ru/employer/5185896"><span>Карьера</span><img src="img/ArrowRight_2.svg"></a>
        </div>
        <div>
          <a href="<?php if(isset($csspage)){echo 'index.php';} ?>#AnchorForm"><span>Контакты</span><img src="img/ArrowRight_2.svg"></a>
        </div>
        <div>
          <div class="LastContainer">
            <a href="">8-999-999-99-99</a>
            <div class="LangContainer">
              <button class="Active">RU</button>
              <button>EN</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>