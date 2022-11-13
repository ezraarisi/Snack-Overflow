

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack Overflow</title>

  <!-- fav icon -->
  <link rel="stylesheet" href="assets/img/favicon.png">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- boxicons -->
  <link rel="stylesheet" href="<link rel=" stylesheet
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">">

</head>

<body>
  <!--==================== LOADER ====================-->

  <div class="load" id="load">
    <img src="assets/img/loadcoffee.gif" alt="" class="load__gif">
  </div>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <img src="assets/img/logo.png" alt="" class="nav__logo-img">
        Snack Overflow
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#premium" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="#products" class="nav__link">Menu</a>
          </li>
          
          <li class="nav__item">
            <a href="http://localhost/php-sfos/sfos/loginn.php" class="nav__link">Log In</a>
          </li>
        </ul>
        <div class="nav__close" id="nav-close">
          <i class='bx bx-x'></i>
        </div>
      </div>

      <!-- toggle button -->
      <div class="nav__toggle" id="nav-toggle">
        <i class='bx bx-grid-alt'></i>
      </div>
    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main>
     <!--==================== QUALITY ====================-->
    <section class="quality section" id="premium">
      <div class="quality__container container">
        

        <div class="quality__content grid">
          <div class="quality__images">
            <img src="assets/img/quality1.png" alt="" class="quality__img-big">
            <img src="assets/img/quality2.png" alt="" class="quality__img-small">
          </div>

          <div class="quality__data">
            <h1 class="quality__title"> Welcome back ! </h1>
            <br>
            <p class="quality__description">
              Celebrate the season with our festive nondairy Sugar Cookie Almondmilk Latte. Enjoy your drink iced or hot.
            </p>

            <div class="quality__buttons">
              <button class="button">
                Order Now
              </button>

              <a href="http://localhost/php-sfos/sfos/loginn.php" class="quality__button">
                See more
                <i class='bx bx-right-arrow-alt'></i>
              </a>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!--==================== ESPECIALTY ====================-->
    <div class="specialty section container" id="specialty">
      <div class="specialty__container">
        <div class="specialty__box">
          

          
        </div>

        <div class="specialty__category">
          <div class="specialty__group specialty__line">
            <img src="assets/img/specialty1.png" alt="" class="specialty__img">

            <h3 class="specialty__title">Selected Coffee</h3>
            <p class="specialty__description">
              We select the best premium coffee, for a true taste.
            </p>
          </div>

          <div class="specialty__group specialty__line">
            <img src="assets/img/specialty2.png" alt="" class="specialty__img">

            <h3 class="specialty__title">Delicious Cookies</h3>
            <p class="specialty__description">
              Enjoy your coffee with some hot cookies
            </p>
          </div>

          <div class="specialty__group">
            <img src="assets/img/specialty3.png" alt="" class="specialty__img">

            <h3 class="specialty__title">Enjoy at Home</h3>
            <p class="specialty__description">
              Enjoy the best coffee in the comfort of your home.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--==================== PRODUCTS ====================-->
    <section class="products section" id="products">
      <div class="products__container container">
        <h2 class="section__title">
          Choose our delicious and best products
        </h2>

        <ul class="products__filters">
          <li class="products__item products__line active-product" data-filter=".delicacies">
            <h3 class="products__title">New Delicacies</h3>
            <span class="products__stock">3 products</span>
          </li>

          <li class="products__item products__line" data-filter=".coffee">
            <h3 class="products__title">Hot Coffee</h3>
            <span class="products__stock">2 products
            </span>
          </li>

          <li class="products__item" data-filter=".cake">
            <h3 class="products__title">Cakes And Delicacies</h3>
            <span class="products__stock">2 products</span>
          </li>
        </ul>

        <div class="products__content grid">
          <!-- delicacies -->
          <article class="products__card delicacies">
            <div class="products__shape">
              <img src="assets/img/delicacies1.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$5</h2>
              <h3 class="products__name">Cookies</h3>

              
            </div>
          </article>

          <article class="products__card delicacies">
            <div class="products__shape">
              <img src="assets/img/delicacies2.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$6</h2>
              <h3 class="products__name">Croissant</h3>

              
            </div>
          </article>

          <article class="products__card delicacies">
            <div class="products__shape">
              <img src="assets/img/delicacies3.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$4</h2>
              <h3 class="products__name">Croissant</h3>

              
            </div>
          </article>
          <!-- coffee -->
          <article class="products__card coffee">
            <div class="products__shape">
              <img src="assets/img/coffee1.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$7</h2>
              <h3 class="products__name">Black Coffee</h3>

              
            </div>
          </article>

          <article class="products__card coffee">
            <div class="products__shape">
              <img src="assets/img/coffee2.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$12</h2>
              <h3 class="products__name">Pure Coffee</h3>

              
            </div>
          </article>

          

          
          <!-- cake -->
          <article class="products__card cake">
            <div class="products__shape">
              <img src="assets/img/cake1.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$6</h2>
              <h3 class="products__name">Cream Cake</h3>

              
            </div>
          </article>

          

          <article class="products__card cake">
            <div class="products__shape">
              <img src="assets/img/cake3.png" alt="" class="products__img">
            </div>

            <div class="products__data">
              <h2 class="products__price">$15</h2>
              <h3 class="products__name">Pancake</h3>

              <!--<button class="button products__button">
                <i class='bx bx-shopping-bag'></i>
              </button> -->
            </div>
          </article>

          

        </div>
      </div>
    </section>

   
    <!--==================== LOGOS ====================-->
    <section class="logo section">
      <div class="logo__container container grid">
        <img src="assets/img/logocoffee1.png" alt="" class="logo__img">
        <img src="assets/img/logocoffee2.png" alt="" class="logo__img">
        <img src="assets/img/logocoffee3.png" alt="" class="logo__img">
        <img src="assets/img/logocoffee4.png" alt="" class="logo__img">
        <img src="assets/img/logocoffee5.png" alt="" class="logo__img">
      </div>
    </section>

    
  <!--==================== FOOTER ====================-->
  <footer class="footer">
    <div class="footer__container container">
      <h1 class="footer__title"><a href="#" class="nav__logo">
        <img src="assets/img/logo.png" alt="" class="nav__logo-img">
        Snack Overflow
      </a></h1>
      <div class="footer__content grid">
        <div class="footer__data">
          <p class="footer__description">
            Subscribe to our newsletter
          </p>
          <div class="footer__newsletter">
            <input type="email" placeholder="your email address" class="footer__input">
            <button class="footer__button">
              <i class='bx bx-right-arrow-alt'></i>
            </button>
          </div>
        </div>

        <div class="footer__data">
          <h2 class="footer__subtitle">Address</h2>
          <p class="footer__information">
            Africa University <br>
            Mutare, Zimbabwe
            
          </p>



        </div>

        <div class="footer__data">
          <h2 class="footer__subtitle">Contact</h2>
          <p class="footer__information">
            +8801760-670045 <br>
            arisie@africau.edu
          </p>
        </div>

        <div class="footer__data">
          <h2 class="footer__subtitle">Open Cafe</h2>
          <p class="footer__information">
            Monday - Saturday <br>
            9AM - 10PM
          </p>
        </div>
      </div>
      <div class="footer__group">
        <div class="footer__group">
          <ul class="footer__social">
            <a href="https://www.spotify.com/ezra" target="blank" class="footer__social-link">
              <i class='bx bxl-spotify'></i>
            </a>
            <a href="https://www.instagram.com/" target="blank" class="footer__social-link">
              <i class='bx bxl-instagram'></i>
            </a>
            <a href="https://twitter.com/" target="blank" class="footer__social-link">
              <i class='bx bxl-twitter'></i>
            </a>
          </ul>

          <span class="footer__copy">
            &#169; Snack Overflow. All rigths reserved.
          </span>
        </div>
      </div>
    </div>

      
  </footer>


  <!--========== SCROLL UP ==========-->
  <a href="#" class="scrollup" id="scroll-up">
    <i class='bx bx-up-arrow-alt'></i>
  </a>

  <!--=============== MIXITUP FILTER ===============-->
  <script src="assets/js/mixitup.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>