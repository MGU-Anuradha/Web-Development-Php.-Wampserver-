<html>
<head>
    <title> PHP Lesson1- For Loops </title>
</head>

<body>
    <?php

    //01.for loop ---------------------------------------------

   
    for( $x =0; $x<5; $x++){
        echo "Number is $x <br>";
    }

    for( $x =1; $x<=6; $x++){
        echo "<h$x> Softwaree Engineering </h$x> <br>";
    }

    //---------------------------------------------------------------------

    $names = array("Kamal","Nimal","Sunil","Kasun","Pathum");
    $marks = array(75,85,96,65,86);

    ?>

    <table width="250" border = "1">
        <tbody>
            <tr>
                <th> Name </th>
                <th> Marks </th>
            </tr>

            <?php
                for ($i=0; $i<5; $i++){
                    echo "<tr>
                            <td> $names[$i] </td>
                            <td> $marks[$i] </td>
                        </tr>";
                }
            ?>

        </tbody>
            </table>
    
    <!-------------------------------------------------------------------->

    <?php
    
    //for each loop -----------------------------------------------------
    
    $stunames = array("Kamal","Nimal","Sunil","Kasun","Pathum");

    foreach ($stunames as $students){
        echo "<br>".$students;
    }
    
    ?>

</body>
</html>