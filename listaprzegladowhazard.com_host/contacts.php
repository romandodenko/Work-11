<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="Polish">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="pl_PL">
  <meta property="og:title" content="Nobu Hotel Warsaw to imponujący hotel o wiodącej pozycji.">
  <meta property="og:site_name"
    content="Hotel Nobu Warsaw w Polsce został zaprojektowany tak, aby zaspokoić nawet najbardziej wymagające potrzeby gości. Oto najlepsza lista usług.">
  <meta property="og:url" content="https://listaprzegladowhazard.com/">
  <meta property="og:image" content="https://listaprzegladowhazard.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Nobu Hotel Warsaw to imponujący hotel o wiodącej pozycji.">
  <meta name="twitter:description"
    content="Hotel Nobu Warsaw w Polsce został zaprojektowany tak, aby zaspokoić nawet najbardziej wymagające potrzeby gości. Oto najlepsza lista usług.">
  <meta name="twitter:site" content="https://listaprzegladowhazard.com/">
  <meta name="twitter:image" content="https://listaprzegladowhazard.com/main.png">
  <meta name="description"
    content="Hotel Nobu Warsaw w Polsce został zaprojektowany tak, aby zaspokoić nawet najbardziej wymagające potrzeby gości. Oto najlepsza lista usług.">
  <title>Nobu Hotel Warsaw to imponujący hotel o wiodącej pozycji.</title>
  <link rel="canonical" href="https://listaprzegladowhazard.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/PlayfairDisplay-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts">
        <div class="contacts__container container">
          <div class="contacts__left">
            <h1 class="contacts__title tt-53-36">
              Łączność
            </h1>
            <p class="contacts__text tx-22">
              Wypełnić formularz
            </p>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
              </div>
              <button class="form__buttton but" type="submit">
                Wysłać
              </button>
            </form>
          </div>
          <div class="contacts__right">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.114746125928!2d21.005578777101828!3d52.223133058165786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccec43b79d47%3A0xc681111e3b6ce705!2sWilcza%2073%2C%2000-670%20Warszawa%2C%20Poland!5e0!3m2!1sen!2sen!4v1705656198983!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item rd-upload tx-17">
                  <img src="." data-rd-image="./img/svg/mail.svg" width="24" height="24" alt="Icon mail">
                  Wilcza 73, 00-670 Warszawa, Polska
                </li>
                <li class="contacts__item rd-upload tx-17">
                  <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                  <a href="tel:+48225518888">
                    +48225518888
                  </a>
                </li>
              </ul>
            </address>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>