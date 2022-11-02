<html>
    <head>
        <title>View Information</title>
    </head>


    <body>
        <h1>View Information</h1>

        <?php
            if (isset($_REQUEST['submit'])){
                $name = $_REQUEST['txtname'];
                echo $name;
            }
        ?>

        <!--01.link to another page...
           <a href = "info.php? name= <?php echo $name ?>" > NEXT PAGE </a>--> 

        <!-- 02.create a hidden form-->
        <form action = "info.php" method = "get">
            <input type = "hidden" name = "hname" value = "<?php echo $name ?>">
            <input type = "submit" name = "submit">
        </form>

    </body>

</html>