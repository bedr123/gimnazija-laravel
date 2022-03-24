<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gimnazija Visoko</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="icon" href="{{ asset('/assets/images/logo u boji.png') }}" />
    <script
      src="https://kit.fontawesome.com/7526d7a6e6.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

  @include('layout.header')

    <!-- HEADER START -->
    <header class="header">
      <div class="header__slideshow-wrapper">
        <!-- SLIDER -->
        <div class="header__slideshow"></div>
        <!-- SLIDER BUTTONS -->
        <i id="btn-left" class="fa-solid fa-angle-left"></i>
        <i id="btn-right" class="fa-solid fa-angle-right"></i>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- SMJEROVI SECTION START -->
    <section class="smjerovi">
      <h1 class="heading">SMJEROVI</h1>
      <div class="smjerovi__container">
        <div class="smjerovi__box">
          <a href="#">
            <img
              class="smjerovi__icon"
              src="./assets/images/infokom.png"
              alt=""
            />
            <div class="smjerovi__text-content">
              <h2>Informaciono - komunikacioni</h2>
            </div>
          </a>
        </div>
        <div class="smjerovi__box">
          <a href="#">
            <img
              class="smjerovi__icon"
              src="./assets/images/prirodni.png"
              alt=""
            />
            <div class="smjerovi__text-content">
              <h2>Prirodni</h2>
            </div>
          </a>
        </div>
        <div class="smjerovi__box">
          <a href="#">
            <img class="smjerovi__icon" src="./assets/images/mat.png" alt="" />
            <div class="smjerovi__text-content">
              <h2>Matematičko - informatički</h2>
            </div>
          </a>
        </div>
        <div class="smjerovi__box">
          <a href="#">
            <img
              class="smjerovi__icon"
              src="./assets/images/drustveni.png"
              alt=""
            />
            <div class="smjerovi__text-content">
              <h2>Društveni</h2>
            </div>
          </a>
        </div>
        <div class="smjerovi__box">
          <a href="#">
            <img
              class="smjerovi__icon"
              src="./assets/images/jezicki.png"
              alt=""
            />
            <div class="smjerovi__text-content">
              <h2>Jezički</h2>
            </div>
          </a>
        </div>
        <div class="smjerovi__box">
          <a href="#">
            <img
              class="smjerovi__icon"
              src="./assets/images/pedagoski.png"
              alt=""
            />
            <div class="smjerovi__text-content">
              <h2>Pedagoški</h2>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- SMJEROVI SECTION END -->

    <!-- O SKOLI SECTION START -->
    <section class="about-us">
      <h1 class="heading">O gimnaziji</h1>
      <div class="about-info">
        <img src="./assets/images/gim-1.jpg" alt="gimnazija" />
        <div class="about-us-text">
          <p>
            Škola nosi naziv Gimnazija “Visoko”. Po tipu je svrstana u opće
            gimnazije za odgoj i obrazovanje učenika po općeobrazovnim
            programima. Plan i program Gimnazije ima općeobrazovni karakter koji
            treba da obezbjedi osnovu za optimalan razvoj učenika uvažavajući
            individualne razlike kako bi svaki učenik mogao ispoljiti i razviti
            svoje sklonosti i sposobnosti, razviti kritičko mišljenje, usvojiti
            nove načine sticanja znanja i ovladavanja novim tehnikama za rad na
            najnovijim tehnikama i metodama rada u nastavi. Predmetno-planska
            struktura Gimnazije omogućuje učenicima individualno opredjeljenje
            područja izučavanja: jezičko, društveno, prirodno,
            matematičko-informatičko i pedagoško, kroz koja će usavršavati i
            sticati znanja i sposobnosti za nastavak obrazovanja na
            visokoškolskim ustanovama.
          </p>
          <a href="#" class="btn">dsadasd</a>
        </div>
      </div>
    </section>
    <!-- O SKOLI SECTION END -->

    <!-- NOVOSTI SECTION START -->
    <section class="novosti">
      <h1 class="heading">NOVOSTI</h1>
      <div class="novosti__container">
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="./assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="./assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="./assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- NOVOSTI SECTION END -->

  @include('layout.footer')

  <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>