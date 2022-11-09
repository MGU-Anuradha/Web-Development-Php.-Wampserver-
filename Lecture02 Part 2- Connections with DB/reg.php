<?php

    //adding values to the databse when inserting data in a form

    include("db.php");

    if(isset($_REQUEST['submit'])){
        $stdno = $_REQUEST['txtstdno'];
        $stdname = $_REQUEST['txtname'];
        $stdage = $_REQUEST['txtage'];
        $stdcity = $_REQUEST['txtcity'];

        $sql = "INSERT INTO student VALUES ('".$stdno."','".$stdname."',".$stdage.",'".$stdcity."')";

        $result = $link->query($sql);

        if($result){
            echo "Record added...";
        }
    }
?>




<html>
    <head>
        <title>registration </title>
    </head>

    <body>
        <h3> Student Registration </h3>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for = "textfield"> student number: </label>
        <input type="text" name="txtstudno" id = "txtstudno">
        <label for = "textfield"> student name: </label>
        <input type="text" name="txtname" id = "txtname">
        <label for = "textfield"> student age: </label>
        <input type="text" name="txtage" id = "txtage">
        <label for = "textfield"> student cityr: </label>
        <input type="text" name="txtcity" id = "txtcity">

        <input type="submit" name="submit" >

    </body>
</html>





