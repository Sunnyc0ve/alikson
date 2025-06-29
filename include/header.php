
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