<!DOCTYPE html>
<html>
<body>

<?php 
    include "connection.php";

    //SELECT * FROM temp; -----> fetch() command enough in the 4th step
    $sql = "SELECT * FROM temp WHERE Name = 'Gihantha'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $list = $stmt->fetchAll();  // 4th step

    //var_dump($list); --> display all details
    
    $r = $list[0];
    
    echo "Name:".$r['Name']."<br>Gender: ".$r['Gender']."<br>
        Age:".$r['Age']."
        <br><br><br>";

    
    /* display all records (when using select *)
    
    foreach($list as $r){
        echo "Name:".$r['Name']."<br>
              Gender: ".$r['Gender']."<br>
              Age:".$r['Age']."
              <br><br><br>";
    }*/

?>

</body>





</html>