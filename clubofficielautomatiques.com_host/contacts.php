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
  <meta property="og:title" content="Manolita Paris est un lieu unique qui attire les clients par ses commodités">
  <meta property="og:site_name"
    content="Les offres les plus prisées de Manolita Paris comprennent des chambres luxueuses au design exquis, de superbes options de restauration et des soins de spa de classe mondiale.">
  <meta property="og:url" content="https://clubofficielautomatiques.com/">
  <meta property="og:image" content="https://clubofficielautomatiques.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Page d'accueil">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Manolita Paris est un lieu unique qui attire les clients par ses commodités">
  <meta name="twitter:description"
    content="Les offres les plus prisées de Manolita Paris comprennent des chambres luxueuses au design exquis, de superbes options de restauration et des soins de spa de classe mondiale.">
  <meta name="twitter:site" content="https://clubofficielautomatiques.com/">
  <meta name="twitter:image" content="https://clubofficielautomatiques.com/main.png">
  <meta name="description"
    content="Les offres les plus prisées de Manolita Paris comprennent des chambres luxueuses au design exquis, de superbes options de restauration et des soins de spa de classe mondiale.">
  <title>Manolita Paris est un lieu unique qui attire les clients par ses commodités</title>
  <link rel="canonical" href="https://clubofficielautomatiques.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poly-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            Contacts
          </h1>
          <div class="contacts__texts">
            <p class="contacts__text tx-22">
              Remplissez le formulaire et nous vous contacterons et nos responsables discuteront de nos questions avec
              vous
            </p>
          </div>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Nom..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Envoyer
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.643819617928!2d2.330191376959681!3d48.884066198898665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e4f003eb019%3A0x33ba9007515cd24c!2s1%20Rue%20Lepic%2C%2075018%20Paris%2C%20France!5e0!3m2!1sen!2sen!4v1706154925144!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17 rd-upload">
                  <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Icon geo">
                  1 Rue Lepic, 75018 Paris, France
                </li>
                <li class="contacts__info-item tx-17 rd-upload">
                  <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                  <a href="tel:+33177627497">
                    +33177627497
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