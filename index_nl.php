<!DOCTYPE html>

<html lang="nl_NL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link href="Styles.css" type="text/css"
 			rel="stylesheet" />
    <title>NHLStenden Danscursus | Home</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <a href="./index_nl.php">
            <img src="./resources/logo.png" alt="NHLStenden logo" class="width">
          </a>
        </div>
        <div class="headertext">
          <p><a href="./dances/hiphop_NL.html">Dansprogramma</a></p>
          <p><a href="./signup_NL.html">Aanmelden</a></p>
          <p><a href="./form_NL.php">Feedback</a></p>
          <div>
            <a href="./index.php"><img src="./resources/EN_flag.png" alt="british flag" class="flagImg"></a>
          </div>
        </div>
      </header>
      <aside>
        <img src="./resources/lineArt.png" alt="Lineart ballerina" class="width">
        <a href="./signup_NL.html">
          <div class="join"><h2>Join now!</h2></div>
        </a>
      </aside>
      <main>
        <div class="bgRect"></div>
        <div class="flexRow">
          <div>
            <a href="./dances/hiphop_NL.html">
              <img src="./resources/hiphop.jpg" alt="hiphop dance">
              <h2>Hiphopdans</h2>
              <h3>
                Hiphopdans is een levendige vorm van dans die een verscheidenheid aan
                freestyle-bewegingen combineert om een cultureel kunstwerk te creëren.
                Door de drie hoofdstijlen van popping, locking en breaking is hiphopdans
                geëvolueerd tot een van de meest populaire en invloedrijke dansstijlen.
              </h3>
            </a>
          </div>
          <div>
            <a href="./dances/ballet_NL.html">
              <img src="./resources/ballet.jfif" alt="ballet dance">
              <h2>Ballet</h2>
              <h3>
                Ballet is een kunstvorm gecreëerd door de beweging van het menselijk lichaam.
                Het is theatraal - uitgevoerd op een podium voor een publiek met gebruikmaking
                van kostuums, decorontwerp en verlichting.
              </h3>
            </a>
          </div>
        </div>
        <div class="flexRow">
          <div>
            <a href="./dances/flamenco_NL.html">
              <img src="./resources/flamenco.jfif" alt="flamenco dance">
              <h2>Flamenco</h2>
              <h3>
                Flamenco dans (baile) is een zeer expressieve Spaanse dans vorm.
                De flamenco is een solodans die wordt gekenmerkt door handgeklap,
                percussie voetwerk en ingewikkelde hand-, arm- en lichaamsbewegingen.
                De dans wordt meestal begeleid door een zanger en gitaris
              </h3>
            </a>
          </div>
          <div>
            <a href="./dances/contemporary_NL.html">
              <img src="./resources/contemporary.jfif" alt="contemporary dance">
              <h2>Hedendaagse</h2>
              <h3>
                Hedendaagse dans is een stijl van expressieve dans die elementen van
                verschillende dansgenres combineert, waaronder modern, jazz, lyrisch
                en klassiek ballet. Hedendaagse dansers streven ernaar om de geest en
                het lichaam te verbinden door middel van vloeiende dansbewegingen.
              </h3>
            </a>
          </div>
        </div>
      </main>
      <div class="info">
        <div class="infotext">
          <h2>Over NHLStenden Hogeschool</h2>
        </div>
        <div class="infotext">
          <p>
            Door onze krachten samen te voegen, zijn we er zeker van dat we onze
            studenten het best mogelijke onderwijs kunnen bieden. Onze gloednieuwe
            organisatie behoudt de rijke geschiedenis en ervaringen van instellingen
            die teruggaan tot het jaar 1845. Dit resulteert in een internationaal georiënteerde instelling,
            met sterke banden met lokale gemeenschappen en bedrijven.
          </p>
        </div>
      </div>
      <div class="announcements">
        <?php
        include 'event.php';
        event();
        ?>
      </div>
      <footer>
        <div class="fContent">
          <h2>External links</h2>
          <div class="fItem">
            <p><a href="https://bibliotheek.nhlstenden.com/en/">Library</a></p>
            <p><a href="https://www.studielink.nl/">Studielink</a></p>
          </div>
        </div>
        <div class="fContent">
          <h2>Contact details</h2>
          <p>NHL Stenden University of Applied Sciences Emmen</p>
          <p>Van Schaikweg 94, 7811 KL Emmen</p>
          <p>The Netherlands</p>
          <div class="bottomTxt">
            <p>Tel: <a href="Tel:+31591853100">+31 (0)591 853 100</a></p>
            <p>Email: <a href="mailto:receptie.emmen@nhlstenden.com"> receptie.emmen@nhlstenden.com</a></p>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
