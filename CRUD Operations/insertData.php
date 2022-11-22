<!DOCTYPE html>
<html>
<head>

<?php
    
    include "connection.php"; // connect to the db

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['Uname'];
        $Gen = $_REQUEST['Gender'];
        $Age = $_REQUEST['Age'];

        if(!(($name==NULL)||($Gen==NULL)||($Age==NULL))){
            
            try{
                $code = "INSERT INTO temp VALUES('$name',$Age,'$Gen')"; //1st- create the query string
                $stmt = $con->prepare($code);                           //2nd - Prepare
                $stmt->execute();                                       //3rd - execute
            }
            catch(PDOException $e){
                echo $e;
                echo "<br>Cannot add the record";
            }
        }
        else{
              echo "All fields are needed";
           }
    }
?>
</head>






<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

        <label>Name: <input type="text" name = "Uname" ></label>      
        <label><br>Gender: Male<input type="radio" name = "Gender" value="M"> 
                           Female <input type="radio" name = "Gender" value="F" >       
        <label><br>Age: <input type="text" name = "Age" ></label><br>
        
        <input type="submit" name="submit" value="Add">
    
    </form>

</body>
</html>