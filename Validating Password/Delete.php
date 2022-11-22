<!DOCTYPE html>
<html>
<head>
<?php
include "conn.php";

if(isset($_REQUEST["submit"])){
    $user = $_REQUEST["Uname"];
    $pw = $_REQUEST["pw"];

    $sql = "DELETE FROM personal WHERE (Name = '$user' AND Password = '".md5($pw)."') OR ( Email = '$user' AND Password = '".md5($pw)."')";

    echo "</br> $sql";
    try{
        $stmt = $con->prepare($sql);
        $stmt->execute();
       
        $sql = "SELECT Name FROM personal WHERE (Name = '$user') OR (Email = '$user')";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchColumn();
        
      
        echo "<script type='text/javascript'>
        window.onload = function () { alert('Successfully deleted the acount'); }
        </script>";

        }
        catch(Exception $e){
            //echo $e;
            echo '<script type="text/javascript">
            window.onload = function () { alert("Did not find an account! Username or Password can be wrong!"); }
            </script>';

        }

}

?>


</head>
<body>
    <h1>Delete</h1>
    <form action = "<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label>User Name Or Email: <input type="text" name = "Uname"></label><br>
        <label>Password: <input type="password" name = "pw"></label><br>
        <input type="submit" name="submit" value="Login">
    </form>


</body>

</html>