<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="Netherlands">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="nl_NL">
  <meta property="og:title" content="Het W Amsterdam Hotel in Nederland is een nieuwe en betere hotellijst.">
  <meta property="og:site_name"
    content="The W Amsterdam ligt in het stadscentrum en biedt luxe accommodatie, waarbij zowel een historisch kerkgebouw als een modern hotel worden gecombineerd.">
  <meta property="og:url" content="https://gokmachines-nl.com/">
  <meta property="og:image" content="https://gokmachines-nl.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Het W Amsterdam Hotel in Nederland is een nieuwe en betere hotellijst.">
  <meta name="twitter:description"
    content="The W Amsterdam ligt in het stadscentrum en biedt luxe accommodatie, waarbij zowel een historisch kerkgebouw als een modern hotel worden gecombineerd.">
  <meta name="twitter:site" content="https://gokmachines-nl.com/">
  <meta name="twitter:image" content="https://gokmachines-nl.com/main.png">
  <meta name="description"
    content="The W Amsterdam ligt in het stadscentrum en biedt luxe accommodatie, waarbij zowel een historisch kerkgebouw als een modern hotel worden gecombineerd.">
  <title>Het W Amsterdam Hotel in Nederland is een nieuwe en betere hotellijst.</title>
  <link rel="canonical" href="https://gokmachines-nl.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/HelveticaNeueCyr-Roman.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Ostrovsky-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
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
      <section class="contacts rd-upload">
        <div class="container">
          <h1 class="contacts__title tt-53-30">
            Contacten
          </h1>
          <div class="contacts__content">
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Neem telefonisch contact met ons op met uw nummer of per e-mail met uw e-mailadres. Ons team helpt u
                graag om uw verblijf comfortabel en onvergetelijk te maken.
              </p>
            </div>
            <form class="form" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <label class="form__label" for="text">
                  <span class="tx-17">
                    Vul uw naam in
                  </span>
                  <input class="form__input input" type="text" name="text" id="text" required>
                </label>
                <label class="form__label" for="email">
                  <span class="tx-17">
                    Voer uw e-mailadres in
                  </span>
                  <input class="form__input input" type="email" name="email" id="email" required>
                </label>
              </div>
              <button class="form__button button" type="submit">
                Versturen
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.873074597868!2d4.8871229771083415!3d52.37272144712278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c6afda0941%3A0x363a72bfc0b5049e!2sSpuistraat%20175%2C%201012%20VN%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1704771155304!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__list-item tx-17">
                  <span>
                    Adres
                  </span>
                  Spuistraat 175, Amsterdam
                </li>
                <li class="contacts__list-item tx-17">
                  <span>
                    Telefoon
                  </span>
                  <a href="tel:+31208112500">
                    +31 2081 125 00
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