<?php // PDO Method

    $server = "localhost";
    $user = "root";
    $pass = "masith23";
    $db = "kuppiya";
    
try{

    $con = new PDO("mysql:host = $server;dbname=$db;charset=UTF8",$user,$pass);    
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "connected";
}

catch(PDOException $e){
    echo $e;
    echo "</br>Error in connection";
}








/* Other two methods--------------------------------------------

$server = "localhost";
$user = "root";
$pass = "masith23";
$db = "kuppiya";


$con = mysqli_connect($server,$user,$pass,$db); ------------- Procedural Method

$con = new mysqli($server,$user,$pass,$db); ----------------- Object oriented Method

if($con){
    echo "Connected";
}
else{
    echo "Error in connection";
}
*/


?>