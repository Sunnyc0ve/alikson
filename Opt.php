<!DOCTYPE >
<html lang="ru">
  <head>
    <title>Alikson - Оптовая дистрибуция</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/pages/opt/_opt.css" />
    <link rel="stylesheet" href="fonts/stylesheet.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include('include/header.html')?>
    <main>
        <section class="MainSection">
            <div class="MainSection-Header">
                <h1>оптовая дистрибуция</h1>
                <p>Alikson Group - ваш надежный партнер в оптовой дистрибуции. Полный спектр услуг для бизнеса: закупка, логистика, таможенное оформление и юридическое сопровождение</p>
            </div>
            <div class="MainSection-Content">
                <a href="">Оставить заявку</a>
                <div>
                    <div class="Info">
                        <div>
                            <h3>200+</h3>
                            <p>надежных поставщиков по всему миру</p>
                        </div>
                    </div>
                    <div class="Info">
                        <div>
                            <h3>12 млрд ₽</h3>
                            <p>годовой оборот проекта</p>
                        </div>
                    </div>
                    <div class="Info">
                        <div>
                            <h3>10 000+</h3>
                            <p>наименований продукции</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ServicesSection">
            <div class="Services-Header">
                <h2>Наши услуги</h2>
                <p>Полный цикл услуг - от закупки до доставки</p>
            </div>
            <div class="Services-Content">
                <div class="Card">
                    <div><img src="img/opt/Services1.svg"></div>
                    <h3>Оптовая дистрибуция</h3>
                </div>
                <div class="Card">
                    <div><img src="img/opt/Services2.svg"></div>
                    <h3>Таможенное<br> оформление и логистика</h3>
                </div>
                <div class="Card">
                    <div><img src="img/opt/Services3.svg"></div>
                    <h3>Юридическая поддержка</h3>
                </div>
                <div class="Card">
                    <div><img src="img/opt/Services4.svg"></div>
                    <h3>Параллельный импорт<br> и производство</h3>
                </div>
                <div class="Card">
                    <div><img src="img/opt/Services5.svg"></div>
                    <h3>Консалтинг</h3>
                </div>
                <div class="Card">
                    <div><img src="img/opt/Services6.svg"></div>
                    <h3>Автоматизация процессов</h3>
                </div>
            </div>
        </section>


        <section class="FormSection">
        <div class="Form-Header">
          <h2>оставьте заявку</h2>
          <p>Оставьте заявку и получите бесплатную консультацию уже сегодня</p>
        </div>
        <div class="Form-Main">
          <form action="" method="POST">
            <div>
              <img src="img/inputInfo.svg" />
              <input type="text" name="name" required placeholder="Ваше имя" />
            </div>
            <div>
              <img src="img/inputInfo.svg" />
              <input
                type="text"
                name="phone"
                required
                placeholder="Ваш телефон"
              />
            </div>
            <input type="submit" value="ОСТАВИТЬ ЗАЯВКУ" />
            <p>Заполните форму, чтобы узнать больше</p>
          </form>
        </div>
      </section>
    </main>
    <?php include('include/footer.html') ?>
  </body>
  <script src="include/header.js"></script>
</html>
