<html>
<head>
    <title> Student Information </title>
</head>

<body>

    <?php
        if(isset ($_REQUEST['Submit'] ) ){

            $name = $_POST['txtuname'];
            $age  = $_REQUEST['txtage'];
            $city = $_REQUEST['txtcity'];

            echo $name . " " . $age . " " . $city;
        }
    ?>



    <form method = "post" action = "<?php $_SERVER['PHP_SELF'];?> " >
        
        Username : <input type ="text" name = "txtuname"/><br>
        Age      : <input type ="text" name = "txtage"/><br>
        City     : <input type ="text" name = "txtcity"/><br>
        
        <input type = "submit" name = "Submit" value = "Click me"/>

    <form>
    <br><br>
    
</body>

</html>