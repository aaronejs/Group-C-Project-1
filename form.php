<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="Styles.css" type="text/css"
 			rel="stylesheet"/>
    <title>NHLStenden Dance course | Form</title>
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
    <form action="form.php" method="post">
        <label for="fname">Full name *</label><br>
        <input class="name" type="text" id="firstName" name="firstName" placeholder="First">
        <input class="name" type="text" id="lastName" name="lastName" placeholder="Last"><br>
        <label for="email">E-mail *</label><br>
        <input class="email_ctype" type="text" id="email" name="email" placeholder="E-mail"><br>
        <label for="select">Contact type *</label><br>
        <select class="email_ctype" name="formType">
            <option value="Question" selected>Question</option>
            <option value="Suggestion">Feedback</option>
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
      footer
    </footer>
    </div>
  </body>
</html>
