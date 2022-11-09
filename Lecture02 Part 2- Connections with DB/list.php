<?php

    //list available data in the database

    include ("db.php");
    $sql = "SELECT * FROM student";
    $result = $link->query($sql);

    //var_dump($result);

    if($result->num_rows>0){
        $n = $result->num_rows;  //get number of queries
        echo "You got $n records";

        while($rows = $result->fetch_array()){
            echo $row['stdio']."<br>";
        }
        
    }else{
        echo " NO reords match with the sql";
    }
?>