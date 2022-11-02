<html>
    <head>
        <title>Contact Information2</title>
    </head>


    <body>
        <h1> Contact Information2 </h1>
        
        <?php
            session_start();
            $name = $_SESSION['s_name'];

            echo $name;

            /* remove a session variable
                unset ($_SESSION['s_name']);
            
            remove the whole session
                session_unset();          */
            

        ?>

    </body>

</html>
