<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="German">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="de_DE">
  <meta property="og:title" content="Rosewood Vienna ist hoch bewertet und hoch bewertet.">
  <meta property="og:site_name"
    content="Der exzellente Service, das anspruchsvolle Design und die Liebe zum Detail machen das Rosewood Hotel Vienna zu einem der Besten seiner Klasse. Liegt in einem wunderschönen Gebäude">
  <meta property="og:url" content="https://spielhalle-online.com/">
  <meta property="og:image" content="https://spielhalle-online.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Rosewood Vienna ist hoch bewertet und hoch bewertet.">
  <meta name="twitter:description"
    content="Der exzellente Service, das anspruchsvolle Design und die Liebe zum Detail machen das Rosewood Hotel Vienna zu einem der Besten seiner Klasse. Liegt in einem wunderschönen Gebäude">
  <meta name="twitter:site" content="https://spielhalle-online.com/">
  <meta name="twitter:image" content="https://spielhalle-online.com/main.png">
  <meta name="description"
    content="Der exzellente Service, das anspruchsvolle Design und die Liebe zum Detail machen das Rosewood Hotel Vienna zu einem der Besten seiner Klasse. Liegt in einem wunderschönen Gebäude">
  <title>Rosewood Vienna ist hoch bewertet und hoch bewertet.</title>
  <link rel="canonical" href="https://spielhalle-online.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/HelveticaNeueCyr-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <h1 class="contacts__title tt-53-36">
            Kontakte
          </h1>
          <p class="contacts__text tx-22">
            Unsere Mitarbeiter werden Sie auf jeden Fall zurückrufen und wir besprechen alle Details
          </p>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
            </div>
            <button class="form__button but" type="submit">
              Schicken
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.8448416771134!2d16.367088476931972!3d48.20960444614331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079893c7e299%3A0x4d8484e610469d3e!2sPeterspl.%207%2C%201010%20Wien%2C%20Austria!5e0!3m2!1sen!2sen!4v1705481904428!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item rd-upload tx-17">
                  <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                  <a href="tel:+4317999888">
                    +4317999888
                  </a>
                </li>
                <li class="contacts__item rd-upload tx-17">
                  <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Icon geo">
                  Peterspl. 7, 1010 Wien, Österreich
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