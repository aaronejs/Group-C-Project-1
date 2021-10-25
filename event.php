<!DOCTYPE html>
<html>
    <head>
        <link href="Styles.css" type="text/css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Event calendar</title>
    </head>
    <body>
        <?php
          function Event(){
            //using the file function to split strings from the text file into arrays
            $lines=file("newfile.txt");
            //usign explode to further create arrays for each individual element

            $day=explode(" ",$lines[0]);
            $month=explode(" ",$lines[1]);
            $year=explode(" ",$lines[2]);
            $text=explode(";",$lines[3]);

            //creating an array to find the min number of count for each array
            $events[0]=count($day);
            $events[1]=count($month);
            $events[2]=count($year);
            $events[3]=count($text);

            //finding the minimum count by comparing all the counts from all the arrays
            //in order to display the minimum number of events to avoid errors or bugs
            //for example if you had 3 days, 4 months, 5 years and 6 texts, the program
            //would only show 3 events
            $min=$events[0];
            for($index=1;$index<4;$index++)
            {
              if($events[$index]<$min)
              {
                $min=$events[$index];
              }
            }
            //min is the minimum number of events
            for($index=0;$index<$min;$index++){
            ?>
            <div class="nestedAnnounce">
            <?php echo "Event date: " . $day[$index] ." ". $month[$index] ." ". $year[$index] .": ". $text[$index];?>
            </div>
            <?php
            }
          }
        ?>
    </body>
</html>
