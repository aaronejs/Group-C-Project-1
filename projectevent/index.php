<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event calendar</title>
    </head>
    <body>
    <h1>Event calendar</h1>
        <form method="post">
                <label for="day">Day (between 1 and 31):</label>
		<input type="number" id="day" name="day" min="1" max="31" /><br>
                <label for="month">Month (between 1 and 12):</label>
                <input type="number" id="month" name="month" min="1" max="12" /><br>
                <label for="year">Year:</label>
                <input type="year" id="year" name="year" /><br>
                <input type="submit" id="submit" name="submit" value="Add event" />
        </form>
        <?php
        //use array, implement modify, remove event function
        //add time to events, maybe use empty function to check
        //(if time is empty it will be a whole day event)
        //READ ABOUT SET TIME FUNCTION
        //set the time after getting the day month year variables and then output the day with date('l')
        $i=0;
        if(isset($_POST['submit']))
        {
            $day=$_POST['day'];
            $month=$_POST['month'];
            $year=$_POST['year'];
            
            
            $array[$i][$day]=$day;
            $array[$i][$month]=$month;
            $array[$i][$year]=$year;
            
            //echo $array[$i][$day]." ".$array[$i][$month]." ".$array[$i][$year];
            ?>
            <div class=gridcontainer>
            <div class=griditem>
            <?php echo $array[$i][$day]." ".$array[$i][$month]." ".$array[$i][$year]; ?>
            </div>
            </div>
            <?php 
            $i++;
        }
        /*$year=2021;
        $month=10;
        $day=13;
        $date= date($day+2 . " - $month - $year");
        echo $date;*/ 
        ?>
        
    </body>
</html>
