<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" type="text/css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Event calendar</title>
    </head>
    <body>
    <h1>Event adder</h1>
        <?php
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

            //checking the smallest number of elements from all arrays
            //in order to not have errors from the different number of inputs for each element(array)
            $min=$events[0];
            for($index=1;$index<4;$index++)
            {
              if($events[$index]<$min)
              {
                $min=$events[$index];
              }
            }

            for($index=0;$index<$min;$index++){
            ?>
            <table class="padtop">
            <tr>
            <td>
            <?php echo "Event date: " . $day[$index] ." ". $month[$index] ." ". $year[$index]; ?>
            </td>
            <td>
            <?php echo $text[$index]; ?>
            </td>
            </tr>
            </table>
            <?php
            }
        ?>
    </body>
</html>
