<html>
    <head>
        <title>View Information2</title>
    </head>


    <body>
        <h1>View Information2</h1>

        <?php
            if (isset($_REQUEST['submit'])){
                $name = $_REQUEST['txtname'];
                
                session_start();
                $_SESSION['s_name'] = $name;

                header('Location:sessioninfo.php'); //redirect to the third page without second page. that page should be in the same directory
                
                /*02. if the page in another directory
                    header('Location:site/sessioninfo.php');
                */

                /*03. to go upwards the directories without going insite
                    header('Location:../sessioninfo.php');
                */

            }
        ?>

        <a href = "sessioninfo.php" > NEXT PAGE </a>

        <!--02. <a href = "site/sessioninfo.php" > NEXT PAGE </a> -->
            

    </body>

</html>