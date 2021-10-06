<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="Styles.css" type="text/css"
 			rel="stylesheet"/>
    <title></title>
  </head>
  <body>
    <form method="POST">
      <input type="radio" name="radio" value="red">RED
      <input type="radio" name="radio" value="purple">PURPLE
      <input type="radio" name="radio" checked value="white">WHITE
      <input type="submit" name="submit" value="Get Selected Values" />
    </form>
    <?php
    if(isset($_POST['submit'])){
      if(isset($_POST['radio'])){
        $color=($_POST['radio']);
      }
      echo $color;
    }else {
      $color="white";
    }
    ?>
    <table>
      <?php
      $days=['Mo','Tu','We','Th','Fr','Sa','Su'];
      for ($day=0; $day < count($days); $day++) {
        echo "<th>" . $days[$day];
      }
        /*
      <tr>
        <th>Mo</th>
        <th>Tu</th>
        <th>We</th>
        <th>Th</th>
        <th>Fr</th>
        <th>Sa</th>
        <th>Su</th>
      </tr>
      */
      for ($dayNr=0; $dayNr < 30; $dayNr++) {// set the amount of days to be 30 cuz nov. has 30 days
        if($dayNr%7==0){ //check if a new week has begun
          echo "<tr>"; //create a new row
        }
        echo "<td "/*bgcolor= " . $color . */ . ">" . $dayNr+1; //echo a new data cell and the day+1
      }                       //because we started counting from 0
      ?>
    </table>
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
            if(!empty($_POST['fname']) || !empty($_POST['lname']) || !empty($_POST['email']) || !empty($_POST['message'])){
                $fname=$_POST['fname'];
                $lname=$_POST['lname'];
                $email=$_POST['email'];
                $formType=$_POST['formType'];
                echo "The ".$formType;
                echo " has been submitted.";
                $message=$_POST['message'];
                file_put_contents('forms.txt',
                                    $formType.' from '.$fname." ".$lname.
                                    "\n------------------------------\nEmail: "
                                    .$email.
                                    "\n------------------------------\n"
                                    .$message.
                                    "\n------------------------------\n\n",FILE_APPEND);
            }else{
                echo "Please fill in the required information.<br>";
            }
        }else{
            echo "please, submit the form.";
        }
    ?>
  </body>
</html>
