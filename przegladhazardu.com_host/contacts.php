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
  <meta property="og:title" content="Hotel Na Fali - Grand w Polsce zasłużenie cieszy się wysoką oceną wśród hoteli">
  <meta property="og:site_name"
    content="Na Fali - Grand Hotel jest uważany za jeden z najlepszych w regionie ze względu na doskonałą obsługę i obsługę, wykwintny wystrój i wspaniałe widoki na morze.">
  <meta property="og:url" content="https://przegladhazardu.com/">
  <meta property="og:image" content="https://przegladhazardu.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Hotel Na Fali - Grand w Polsce zasłużenie cieszy się wysoką oceną wśród hoteli">
  <meta name="twitter:description"
    content="Na Fali - Grand Hotel jest uważany za jeden z najlepszych w regionie ze względu na doskonałą obsługę i obsługę, wykwintny wystrój i wspaniałe widoki na morze.">
  <meta name="twitter:site" content="https://przegladhazardu.com/">
  <meta name="twitter:image" content="https://przegladhazardu.com/main.png">
  <meta name="description"
    content="Na Fali - Grand Hotel jest uważany za jeden z najlepszych w regionie ze względu na doskonałą obsługę i obsługę, wykwintny wystrój i wspaniałe widoki na morze.">
  <title>Hotel Na Fali - Grand w Polsce zasłużenie cieszy się wysoką oceną wśród hoteli</title>
  <link rel="canonical" href="https://przegladhazardu.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/Marcellus-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/MarcellusSC-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__top-left">
              <h1 class="contacts__title tt-53-36">
                Łączność
              </h1>
              <p class="contacts__text tx-22">
                Wypełnij formularz, a my oddzwonimy do Ciebie w celu rezerwacji pokoju lub odpowiemy na Twoje pytania
              </p>
            </div>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Wysłać
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16434.361406042022!2d20.99418087884814!3d52.24370261655423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc66f0ce7afd%3A0x2d41f59ceef28f1f!2sSafestay%20Warsaw!5e0!3m2!1sen!2sen!4v1705649340203!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  Krakowskie Przedmieście 55, 00-071 Warszawa, Poland
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