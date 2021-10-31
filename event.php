<!DOCTYPE html>
<html>
    <head>
        <link href="Styles.css" type="text/css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Event calendar</title>
    </head>
    <body>
        <?php
          function event(){
            //using the file function to split strings from the text file into arrays
            $lines=file("newfile.txt");
            //usign explode to further create arrays for each individual element

            $date=explode(";",$lines[0]);
            $text=explode(";",$lines[1]);

            //finding the minimum count by comparing the counts from the arrays
            //in order to display the minimum number of events to avoid errors or bugs
            //for example if you had 2 dates and 7 texts the program
            //would only show 2 events

            $min=count($date);
            if($min<count($text)){
              $min=count($text);
            }
            //min is the minimum number of events

            $months="a January February March April May June July August September October November December";
            $array_Months=explode(" ",$months);
            for($index=0;$index<$min;$index++){
              if($date[$index]==0){
                ?>
                <div class="nestedAnnounce">
                <?php echo "<b>Announcement:</b> " . $text[$index];?>
              </div>
              <?php
              }
              else if(strlen($date[$index])>10){
                $month_First=substr($date[$index],3,2);
                $month_Second=substr($date[$index],14,2);
                ?>
                <div class="nestedAnnounce">
                <?php echo "<b>Event:</b>" . substr($date[$index],0,3). $array_Months[(int)$month_First]. substr($date[$index],5,5). " - ". substr($date[$index],11,3). $array_Months[(int)$month_Second].
                substr($date[$index],16) . "<br>" . $text[$index];?>
                </div>
                <?php
              }
              else{
                $month_First=substr($date[$index],3,2)
                ?>
                <div class="nestedAnnounce">
                <?php echo "<b>Event:</b> " . substr($date[$index],0,3) . $array_Months[(int)$month_First] . substr($date[$index],5) . "<br>" . $text[$index];?>
                </div>
                <?php
              }
            }
          }
        ?>
    </body>
</html>
