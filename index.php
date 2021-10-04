<!DOCTYPE html>

<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="Styles.css" type="text/css"
 			rel="stylesheet" />
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>Mo</th>
        <th>Tu</th>
        <th>We</th>
        <th>Th</th>
        <th>Fr</th>
        <th>Sa</th>
        <th>Su</th>
      </tr>
      <?php
      for ($day=0; $day < 30; $day++) {// set the amount of days to be 30 cuz nov. has 30 days
        if($day%7==0){ //check if a new week has begun
          echo "<tr>"; //create a new row
        }
        echo "<td>" . $day+1; //echo a new data cell and the day+1
      }                       //because we started counting from 0
      ?>
    </table>
  </body>
</html>
