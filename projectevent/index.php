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
            //$lines[0] is the number of events you want to add
            for($index=0;$index<$lines[0];$index++)
            {$day=explode(" ",$lines[1]);
             $month=explode(" ",$lines[2]);
             $year=explode(" ",$lines[3]);
             $text=explode(";",$lines[4]);
            }

            for($index=0;$index<$lines[0];$index++){
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
