<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="Styles.css" type="text/css"
 			rel="stylesheet"/>
    <title>NHLStenden Dance course | Form</title>
  </head>
  <body>
    <div class="container_form">
      <header>
        <div class="logo">
          <a href="./index.php">
            <img src="./resources/logo_english.png" alt="NHLStenden logo" width="100%">
          </a>
        </div>
        <div class="headertext">
          <p><a href="./dances/hiphop.html">Dance programm</a></p>
          <p><a href="./signup.html">Signup</a></p>
          <p><a href="./form.php">Feedback</a></p>
          <div>
            <a href="./form_NL.php"><img src="./resources/NL_flag.png" alt="dutch flag" class="flagImg"></a>
          </div>
        </div>
      </header>
         <aside>
        <img src="./resources/lineArt.png" alt="Lineart ballerina" width="100%">
      </aside>
      <main>
        <form action="form.php" method="post">
            <label for="fname">Full name *</label><br>
            <input class="name" type="text" id="firstName" name="firstName" placeholder="First">
            <input class="name" type="text" id="lastName" name="lastName" placeholder="Last"><br>
            <label for="email">E-mail *</label><br>
            <input class="email_ctype" type="email" id="email" name="email" placeholder="E-mail"><br>
            <label for="select">Contact type *</label><br>
            <select class="email_ctype" name="formType">
                <option value="Question" selected>Question</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
            </select><br>
            <label for="message">Message *</label><br>
            <input id="message" type="textarea" name="message" placeholder="Your message...">
            <input id="submit" type="submit" name="submit" value="Send">
            <input id="reset" type="reset" value="Reset form">
        </form>
        <?php
            if(isset($_POST['submit'])){
              if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['message'])){
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                $email=$_POST['email'];
                $formType=$_POST['formType'];
                echo $formType . " has been submitted";
                $message=$_POST['message'];
                if ($formType!='Complaint'){
                  if((!is_dir('Messages EN/'))){
                    //if direction doesn't exist, make it, made so that dutch and english messages are separated.
                    mkdir('Messages EN/');
                  }
                  if((!is_dir('Messages EN/'.$formType.'/'))){
                    //if  direction doesn't exist, make it
                    mkdir('Messages EN/'.$formType.'/');
                  }
                  //example, put Question_Evald_Narkevicius.txt to a /Messages EN/Question/ folder.
                  file_put_contents('Messages EN/'.$formType.'/'.$formType. '_' . $firstName . '_' . $lastName . '.txt',
                                    $formType.' from '.$firstName." ".$lastName.
                                    "\n------------------------------\nDate: "
                                    .date("Y/m/d").
                                    "\n------------------------------\nEmail: "
                                    .$email.
                                    "\n------------------------------\n"
                                    .$message.
                                    "\n------------------------------\n\n",FILE_APPEND);
                  }else{
                      echo "Please fill in the required information.";
                  }
            }else{
                echo "Please, submit the form.";
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
