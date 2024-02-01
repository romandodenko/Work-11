<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="French">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="fr_FR">
  <meta property="og:title" content="Le Plaza Brussels est un hôtel emblématique offrant les dernières commodités">
  <meta property="og:site_name"
    content="Ce majestueux hôtel allie charme historique et équipements modernes pour répondre aux besoins des clients. Les chambres de l'hôtel sont décorées dans un style classique et équipées">
  <meta property="og:url" content="https://listedesclubsdejeu.com/">
  <meta property="og:image" content="https://listedesclubsdejeu.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Le Plaza Brussels est un hôtel emblématique offrant les dernières commodités">
  <meta name="twitter:description"
    content="Ce majestueux hôtel allie charme historique et équipements modernes pour répondre aux besoins des clients. Les chambres de l'hôtel sont décorées dans un style classique et équipées">
  <meta name="twitter:site" content="https://listedesclubsdejeu.com/">
  <meta name="twitter:image" content="https://listedesclubsdejeu.com/main.png">
  <meta name="description"
    content="Ce majestueux hôtel allie charme historique et équipements modernes pour répondre aux besoins des clients. Les chambres de l'hôtel sont décorées dans un style classique et équipées">
  <title>Le Plaza Brussels est un hôtel emblématique offrant les dernières commodités</title>
  <link rel="canonical" href="https://listedesclubsdejeu.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poly-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-36">
              Contacts
            </h1>
            <p class="contacts__text tx-22">
              Remplissez le formulaire et nous vous contacterons
            </p>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nom..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Envoyer
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.7190891751075!2d4.353829777042619!3d50.85488595816087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c383b28dcac9%3A0xdc7f95f5700ae750!2sBd%20Adolphe%20Max%20118%2F126%2C%201000%20Bruxelles%2C%20Belgium!5e0!3m2!1sen!2sen!4v1706507099497!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item rd-upload tx-17">
                  <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Icon geo">
                  Avenue Adolphe Max 118/126, 1000 Bruxelles, Belgique
                </li>
                <li class="contacts__item rd-upload tx-17">
                  <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                  <a href="tel:+3222780100">
                    +3222780100
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