<html>
<head>
    <title> PHP Lesson1- Arrays </title>
</head>

<body>
    <?php

    //01. Numeric Arrays---------------------------------------------------------------------------------

    $arr1 = array(1,2,3,4,5);
    echo $arr1[0];            //--> 1

    var_dump($arr1); //define all elements in the array

    
    //02.Associative Arrays-------------------------------------------------------------------------------

    $marks = array("Nimal"=>75, "Kamal"=>65, "Sunil"=>85);
    echo $marks['Nimal'] ;  //->75
    echo "<br> Sunil's marks = ". $marks['Sunil'];  //Sunil's marks = 85

    var_dump($marks);


    //03.Multidimentional Arrays--------------------------------------------------------------------------

    $allMarks = array("Nimal" => array("seng1"=>75, "seng2"=>65),
                      "Kamal"=> array ("seng1"=>85, "seng2"=>55));
    
    echo "Marks for seng2 for Kamal is ".$allMarks['Kamal']['seng2']; //Marks for seng2 for Kamal is 55
    
    var_dump($allMarks);


    ?>

</body>
</html>

    