<!DOCTYPE html>
<html>
<head>
<h1>Sign UP</h1>

    <?php
    include "conn.php";

    if(isset($_REQUEST["submit"])){
        $un = $_REQUEST["Uname"];
        $email = $_REQUEST["Email"];
        $gen = $_REQUEST["Gender"];
        $pw = $_REQUEST["pw"];
        $cpw = $_REQUEST["cpw"];

        if($pw == $cpw){

            $sql = "INSERT INTO personal VALUES(NULL,'$un','$gen','$email','".md5($pw)."')";
            //echo $sql;
            try{
                $stmt = $con->prepare($sql);
                $stmt->execute();
                echo "<script>alert('Successfully Registered.')</script>";

            }catch(Exception $e){
                    //echo $e;
                echo '<script type="text/javascript">
                        window.onload = function () { alert("Error in registering! Try again"); }
                        </script>';

            }
        }else{
            echo "<script>alert('Passwords are not matched.')</script>";
        }
    }
    ?>
</head>


<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label>Name: <input type="text" name = "Uname" ></label>
        <label><br>Gender: Male<input type="radio" name = "Gender" value="M"> Female <input type="radio" name = "Gender" value="F" >
        <label><br>Email: <input type="text" name = "Email" ></label>
        <label><br>Password: <input type="password" name = "pw" ></label>
        <label><br>Confirm Password: <input type="Password" name = "cpw" ></label>
        <br><input type="submit" name="submit" value="Sign UP">
        </label>
    </form>



</body>
</html>