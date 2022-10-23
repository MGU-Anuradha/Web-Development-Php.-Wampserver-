<html>
<head>
    <title> Student Information </title>
</head>

<body>
    <?php

        $name = $_POST['txtuname'];
        $age  = $_REQUEST['txtage'];
        $city = $_REQUEST['txtcity'];

        echo $name . " " . $age . " " . $city;
    ?>
    
</body>

</html>