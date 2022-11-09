<?php

    //Procedural method
    $conn = mysqli_connect ('localhost','root','','uni');

    //object oriented method
    //1st method
    $link = new mysqli ('localhost','root','','uni');

    //2nd method
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "uni";

    $link = new mysqli ($host,$user,$passwd,$db);

    //insert values
    $sql1 = "INSERT INTO student VALUES ('Ushani','24','Pannala')";

    //run the query in php
    $result = $link->query($sql1);
    
    if($result){  //check whether our sql addded perfecly
        echo "Record added to the database";
    }else{
        echo "error occurs";
    }

    //to update
    $sql2 = "UPDATE Student Age=25 WHERE FName = ”Ushani”";
?>