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
            $lines=file("Events.txt");
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

            //made an array for the months and added a random first element
            //in order for the months to match the array index
            //for example now January is $array_Months[1] because it is the first month
            $months="a January February March April May June July August September October November December";
            $array_Months=explode(" ",$months);
            //the $array_Months is used to display the month inputed in the "Events.txt" as string rather than a number
            for($index=0;$index<$min;$index++){
              //this if checks if the input is either an event or an announcement
              //if $date[$index]==0 the input is an announcement
              if($date[$index]==0){
                ?>
                <div class="nestedAnnounce">
                <?php echo "<b>Announcement:</b> " . $text[$index];?>
              </div>
              <?php
              }
              //this if checks if the length of the date entered is higher than 10
              //if true, it means the event has a start and an end date
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
              //if false, it means the event only lasts for one day
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
