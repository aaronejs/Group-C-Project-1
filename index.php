<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="Styles.css" type="text/css"
 			rel="stylesheet"/>
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
        <label for="fname">Full name *</label><br>
        <input type="text" id="fname" name="fname" placeholder="First">
        <input type="text" id="lname" name="lname" placeholder="Last"><br>
        <label for="email">E-mail *</label><br>
        <input type="text" id="email" name="email" placeholder="E-mail"><br>
        <label for="select">Contact type *</label><br>
        <select class="ctype" name="formType" id="ctype">
            <option value="Question" selected>Question</option>
            <option value="Suggestion">Feedback</option>
            <option value="Complaint">Complaint</option>
        </select><br>
        <label for="message">Message *</label><br>
        <input type="textarea" style="resize:none" name="message" placeholder="Your message...">
        <input type="submit" name="submit" value="Send">
        <input type="reset" value="Reset form">
    </form>
    <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['message'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $formType=$_POST['formType'];
                echo "The ".$formType . " has been submitted.";
                $message=$_POST['message'];
                if ($formType!='Complaint'){
                  file_put_contents('Form_' . $fname . "_" . $lname . '.txt',
                                      $formType.' from '.$fname." ".$lname.
                                      "\n------------------------------\nDate: "
                                      .date("Y/m/d").
                                      "\n------------------------------\nEmail: "
                                      .$email.
                                      "\n------------------------------\n"
                                      .$message.
                                      "\n------------------------------\n\n",FILE_APPEND);
                }
            }else{
                echo "Please fill in the required information.<br>";
            }
        }else{
            echo "please, submit the form.";
        }
    ?>
  </body>
</html>
