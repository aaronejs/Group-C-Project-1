<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="Styles.css" type="text/css"
 			rel="stylesheet"/>
    <title>NHLStenden Danscursus | Vorm</title>
  </head>
  <body>
    <div class="container_form">
      <header>
        <div class="logo">
          <a href="./index.php">
            <img src="./resources/logo.png" alt="NHLStenden logo" width="100%">
          </a>
        </div>
        <div class="headertext">
          <p><a href="./dances/hiphop_NL.html">Dansprogramma</a></p>
          <p><a href="./signup_NL.html">Aanmelden</a></p>
          <p><a href="./form_NL.php">Feedback</a></p>
          <div>
            <a href="./form.php"><img src="./resources/EN_flag.png" alt="british flag" class="flagImg"></a>
          </div>
        </div>
      </header>
         <aside>
        <img src="./resources/lineArt.png" alt="Lineart ballerina" width="100%">
      </aside>
        <main>
    <form action="form_nl.php" method="post">
        <label for="fname">Voor-en achternaam *</label><br>
        <input class="name" type="text" id="firstName" name="firstName" placeholder="Voornaam">
        <input class="name" type="text" id="lastName" name="lastName" placeholder="Achernaam"><br>
        <label for="email">E-mail *</label><br>
        <input class="email_ctype" type="email" id="email" name="email" placeholder="E-mail"><br>
        <label for="select">Contact type *</label><br>
        <select class="email_ctype" name="formType">
            <option value="Vraag" selected>Vraag</option>
            <option value="Feedback">Feedback</option>
            <option value="Klacht">Klacht</option>
        </select><br>
        <label for="message">Bericht *</label><br>
        <input id="message" type="textarea" name="message" placeholder="Uw bericht...">
        <input id="submit" type="submit" name="submit" value="Versturen">
        <input id="reset" type="reset" value="Vorm resetten">
    </form>
    <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['message'])){
              //setting up variables so the validator doesn't complain.
              $firstName=$_POST['firstName'];
              $lastName=$_POST['lastName'];
              $email=$_POST['email'];
              $formType=$_POST['formType'];
              echo $formType . " is ingediend.";
              $message=$_POST['message'];
              if ($formType!='Klacht'){
                if((!is_dir('Messages NL/'))){
                  mkdir('Messages NL/');
                }
                if((!is_dir('Messages NL/'.$formType.'/'))){
                  //if  direction doesn't exist, make it
                  mkdir('Messages NL/'.$formType.'/');
                }
                //example, put Question_Evald_Narkevicius.txt to a Question folder.
                file_put_contents('Messages NL/'.$formType.'/'.$formType. '_' . $firstName . '_' . $lastName . '.txt',
                                  $formType.' van '.$firstName." ".$lastName.
                                  "\n------------------------------\nDatum: "
                                  .date("Y/m/d").
                                  "\n------------------------------\nEmail: "
                                  .$email.
                                  "\n------------------------------\n"
                                  .$message.
                                  "\n------------------------------\n\n",FILE_APPEND);
            }else{
                echo "Vul de vereiste informatie in.";
            }
        }else{
            echo "Gelieve het formulier in te dienen";
        }
      }
    ?>
    </main>
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
