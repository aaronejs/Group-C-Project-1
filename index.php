<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <link href="Styles.css" type="text/css"
 			rel="stylesheet" />
    <title>NHLStenden Dance course</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo">
          <a href="index.php">
            <img src="./resources/logo_english.png" alt="NHLStenden logo" width="100%">
          </a>
        </div>
        <div class="headertext">
          <p><a href="">Dance programm</a></p>
          <p><a href="">Signup</a></p>
          <p><a href="form.php">Feedback</a></p>
        </div>
      </header>
      <aside>
        <img src="./resources/lineArt.png" alt="Lineart ballerina" width="100%">
      </aside>
      <main>
        <div class="flexRow">
          <div>
            <img src="./resources/hiphop.jpg" alt="hiphop dance" >
            <h2>Hip-hop</h2>
            <h3>
              Hip-hop dance is a vibrant form of dance that combines
              a variety of freestyle movements to create a cultural experience
              of art. There are three main styles:
              popping, locking and breaking
            </h3>
          </div>
          <div>
            <img src="./resources/ballet.jfif" alt="ballet dance" >
            <h2>Ballet</h2>
            <h3>
              Ballet is an art form that is theatrical and has a scenic
              design and lighting. It can tell a story or express a thought,
              concept or emotion. Ballet can be magical, exciting, provoking
              or disturbing
            </h3>
          </div>
        </div>
        <div class="flexRow">
          <div>
            <img src="./resources/flamenco.jfif" alt="flamenco dance">
            <h2>Flamenco</h2>
            <h3>
              Flamenco dance originates from Spain. Flamenco is a solo dance
              characterized by hand clapping, percussive footwork, and
              intricate hand, arm and body movements. The dance is usually
              accompanied by a singer and a guitar player
            </h3>
          </div>
          <div>
            <img src="./resources/contemporary.jfif" alt="contemporary dance" >
            <h2>Contemporary</h2>
            <h3>
              Contemporary dance is a style of expressive dance that combines
              elements of several dance genres including modern, jazz, lyrical
              and classical ballet. Contemporary dancers strive to connect the
              mind and the body through fluid dance movements
            </h3>
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
        footer
      </footer>
    </div>
  </body>
</html>
