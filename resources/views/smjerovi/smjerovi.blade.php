<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/smjerovi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="https://kit.fontawesome.com/425dea2354.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
  <title>Document</title>
</head>
<body>
@include('layout.header')
  <div class="hero">
      <img class="hero-image" src="assets/images/gim-1.jpg">
      <div class="naslov-box">
            <p class="naslov">INFORMACIONO-KOMUNIKACIONI</p>
      </div> 
  </div>
  <section class="about-section">   
    <div class="main">
              <h3>Informaciono-komunikacioni</h3>
              <iframe class="smjer-video" src="https://www.youtube.com/embed/8jLOx1hD3_o" frameborder="0" allowfullscreen></iframe>
      </iframe>
                <div class="smjerovi-p">
              <p>Pored zajedničkih predmeta za sva izborna područja,
                   informatičari imaju i 5 stručnih: Baze podataka,
                    Operativni sistemi, Programiranje,
                     Web dizajn i Sigurnost informacija.
              Sve stručne predmete predaje jedan profesor.
               To znači dobru saradnju između učenika i profesora i mnogo razumijevanja.</p>
             
                <p>Šta su baze podataka? One su svuda oko nas iako ih ne vidimo.
                     Nalaze se iza svakog sajta koji posmatramo,
                      pa čak i iza ovog teksta koji upravo čitate. Upravo o tome mi učimo.</p>

                      <p>Kako u jednoj rečenici opisati programiranje?
                           Teško, zar ne? Programiranje bi se, najjednostavnije,
                            moglo objasniti kao pisanje veoma detaljnih uputstava računaru.
                             Koliko je “lahko” postati programer, saznali smo upravo u ovom području
                              i sa našim profesorom</p>

      <p>Najzanimljivijim predmetima se učenicima čine Sigurnost informacija i Web dizajn.

        Kreiranje šifri koje niko drugi osim nas ne razumije ili,
       ipak, izrada web stranica? Teško je odlučiti se.</p>

      <p>Ukratko, informaciono-komunikaciono područje će vam pružiti mnogo izazova,
          a prije svega MNOGO znanja.</p>
    </div>
  </div>
  </section>
@include('layout.footer')
  <script src="app.js"></script>
</body>
</html>