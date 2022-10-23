<html>
<head>
    <title> PHP Lesson1- Conditional statements </title>
</head>

<body>
    <?php

    //01. if else-------------------------------------------------

    $marks = 85;

    if($marks>65){
        echo "PASS";
    }else{
        echo "FAIL";
    }
    echo "<br>";

    //02.swich case----------------------------------------------

    switch($marks){
        case 80 : echo "You got 80"; break;
        case 85 : echo "You got 85"; break;
        default : echo "You got other value"; break;
    }
    echo "<br>";


    $day = "Monday";
    switch($day){
        case "Monday": case "Tuesday": case "Wednesday": case "Thursday": case "Friday":
            echo "Weedays"; break;
        default:
            echo "Weekend"; break;
    }
    echo "<br>";


    $x = 67;
    switch($x){
        case $x<=40   : echo "C" ; break;
        case $x<=60  : echo "B" ; break;
        case $x<=80  : echo "A" ; break;
        case $x<=100 : echo "A+" ; break;
        default      : echo "Invalid result" ; break;
    }
    ?>

</body>
</html>