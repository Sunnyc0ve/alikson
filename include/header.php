<!DOCTYPE >
<html lang="ru">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<link rel="stylesheet" href="css/header.css?2.6" />
<link rel="stylesheet" href="fonts/stylesheet.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

<?php if(isset($csspage)){ 
  echo'<link rel="stylesheet" href="css/pages/' . $csspage . '" />';
  echo '<link rel="stylesheet" href="css/form.css?2.5" />';
  }else{
    echo '<link rel="stylesheet" href="css/main.css?2.8" />';
    }
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
<header>
  <div class="HeaderContainer">
    <logo>
      <img src="img/logo.svg" />
    </logo>
    <nav>
      <ul>
        <li><a href="Company.php">О компании</a></li>
        <li><a href="">Направления бизнеса</a></li>
        <li><a href="">Карьера в компании</a></li>
        <li><a href="">Контакты</a></li>
      </ul>
    </nav>
    <div class="Header-Menu">
      <button><img src="img/zoom.svg" /></button>
      <input type="text" placeholder="Поиск по сайту" />
    </div>
    <div class="Header-Menu_mobile">
      <button><img src="img/zoom_1.svg" /></button>
      <button id="MenuButton"><img src="img/menu.svg" /></button>
      <div class="Header-Menu_mobile_hidden">
        <div>
          <button data="m1"><span>О КОМПАНИИ</span><img src="img/ArrowRight_2.svg"></button>
          <div data="m1">
            <div>
            <!-- <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> -->
          </div>
          </div>
        </div>
        <div>
          <button data="m2"><span>НОВОСТИ</span><img src="img/ArrowRight_2.svg"></button>
          <div data="m2">
            <div>
            <!-- <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> -->
          </div>
          </div>
        </div>
        <div>
          <button data="m3"><span>НАШИ ПРОЕКТЫ</span><img src="img/ArrowRight_2.svg"></button>
          <div data="m3">
            <div>
            <!-- <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> -->
          </div>
          </div>
        </div>
        <div>
          <button data="m4"><span>СОТРУДНИЧЕСТВО</span><img src="img/ArrowRight_2.svg"></button>
          <div data="m4">
            <div>
            <!-- <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> -->
          </div>
          </div>
        </div>
        <div>
          <button data="m5"><span>КОНТАКТЫ</span><img src="img/ArrowRight_2.svg"></button>
          <div data="m5">
            <div>
            <!-- <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> -->
          </div>
          </div>
        </div>
        <div>
          <button data="m6"><span>ТЕХПОДДЕРЖКА</span><img src="img/ArrowRight_2.svg"></button>
          <div data="m6">
            <div>
            <!-- <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> 
            <a href="">Ссылка</a> -->
          </div>
          </div>
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