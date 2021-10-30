<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link href="Styles.css" type="text/css"
 			rel="stylesheet" />
    <title>NHLStenden Dance course | Home</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <a href="./index.php">
            <img src="./resources/logo_english.png" alt="NHLStenden logo" class="width">
          </a>
        </div>
        <div class="headertext">
          <p><a href="./dances/hiphop.html">Dance programm</a></p>
          <p><a href="./signup.html">Signup</a></p>
          <p><a href="./form.php">Feedback</a></p>
          <div>
            <a href="./index_NL.php"><img src="./resources/NL_flag.png" alt="dutch flag" class="flagImg"></a>
          </div>
        </div>
      </header>
      <aside>
        <img src="./resources/lineArt.png" alt="Lineart ballerina" class="width">
        <a href="./signup.html">
          <div class="join"><h2>Join now!</h2></div>
        </a>
      </aside>
      <main>
        <div class="bgRect"></div>
        <div class="flexRow">
          <div>
            <a href="./dances/hiphop.html">
              <img src="./resources/hiphop.jpg" alt="hiphop dance">
              <h2>Hip-hop</h2>
              <h3>
                Hip-hop dance is a vibrant form of dance that combines
                a variety of freestyle movements to create a cultural experience
                of art. There are three main styles:
                popping, locking and breaking
              </h3>
            </a>
          </div>
          <div>
            <a href="./dances/ballet.html">
              <img src="./resources/ballet.jfif" alt="ballet dance">
              <h2>Ballet</h2>
              <h3>
                Ballet is an art form that is theatrical and has a scenic
                design and lighting. It can tell a story or express a thought,
                concept or emotion. Ballet can be magical, exciting, provoking
                or disturbing
              </h3>
            </a>
          </div>
        </div>
        <div class="flexRow">
          <div>
            <a href="./dances/flamenco.html">
              <img src="./resources/flamenco.jfif" alt="flamenco dance">
              <h2>Flamenco</h2>
              <h3>
                Flamenco dance originates from Spain. Flamenco is a solo dance
                characterized by hand clapping, percussive footwork, and
                intricate hand, arm and body movements. The dance is usually
                accompanied by a singer and a guitar player
              </h3>
            </a>
          </div>
          <div>
            <a href="./dances/contemporary.html">
              <img src="./resources/contemporary.jfif" alt="contemporary dance">
              <h2>Contemporary</h2>
              <h3>
                Contemporary dance is a style of expressive dance that combines
                elements of several dance genres including modern, jazz, lyrical
                and classical ballet. Contemporary dancers strive to connect the
                mind and the body through fluid dance movements
              </h3>
            </a>
          </div>
        </div>
      </main>
      <div class="info">
        <div class="infotext">
          <h2>About NHLStenden University of applied sciences</h2>
        </div>
        <div class="infotext">
          <p>
            By combining our strenghts, we are sure we can provide our students
            with the best possible education. Our brand-new organisation retains
            the rich history and experience of both institutions, dating back to
            the year 1845. This results in an internationally orientated
            institution, with strong ties to local communities and businesses.
          </p>
        </div>
      </div>
      <div class="announcements">
        <div class="nestedAnnounce"><h2>Events</h2></div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <div class="nestedAnnounce">Test</div>
        <?php
        include 'event.php';
        event();
        ?>
      </div>
      <footer>
        <div class="fContent">
          <img src="./resources/logo_english.png" alt="NHLStenden logo">
        </div>
        <div class="fContent">
          <h2>Contact details</h2>
          <p>NHL Stenden University of Applied Sciences</p>
          <p>Rengerslaan 8-10, 8917 DD Leeuwarden</p>
          <p>P.O. Box 1080</p>
          <p>8900 CB Leeuwarden</p>
          <p>The Netherlands</p>

          <div class="bottomTxt">
            <p>Tel: <a href="Tel:+31582441155">+31 58 244 1155</a></p>
            <p>Email: <a href="mailto:studentinfo@nhlstenden.com"> studentinfo@nhlstenden.com</a></p>
          </div>
        </div>
        <div class="fContent">

        </div>
        <div class="fContent">

        </div>
      </footer>
    </div>
  </body>
</html>
