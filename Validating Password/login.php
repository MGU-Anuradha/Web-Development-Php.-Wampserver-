<!DOCTYPE html>
<html>
<head>
    <?php
   
        include "conn.php";

        if(isset($_REQUEST["submit"])){
            
            $user = $_REQUEST["Uname"];
            $pw = $_REQUEST["pw"];

            $sql = "SELECT * FROM personal WHERE (Name = '$user' AND Password = '".md5($pw)."') OR ( Email = '$user' AND Password = '".md5($pw)."')";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $list = $stmt->fetchAll();

            if($list == null){
                echo '<script type="text/javascript">
                        window.onload = function () { alert("Did not find an account! Username or Password can be wrong!"); }
                        </script>';
            }
            else{
                $sql = "SELECT Name FROM personal WHERE (Name = '$user') OR (Email = '$user')";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetchColumn();
                
            
                echo "<script type='text/javascript'>
                        window.onload = function () { alert('Hi $row'); }
                        </script>";
                

        }

    }
    ?> 
</head>



<body>
    <h1>Log IN</h1>
    <form action = "<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label>User Name Or Email: <input type="text" name = "Uname"></label><br>
        <label>Password: <input type="password" name = "pw"></label><br>
        <input type="submit" name="submit" value="Login">
    </form>


</body>

</html>