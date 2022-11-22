<!DOCTYPE html>

<html>
<head>
<?php
    
    include "connection.php";

    if(isset($_REQUEST['submit'])){
        
        $name = $_REQUEST['Uname'];
        
        if(!($name==NULL)){

            //DELETE FROM temp WHERE Name = 'Masith'
            try{
                $sql = "DELETE FROM temp WHERE Name = '$name'";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                
                echo "successfully deleted the record";
            }
            catch(PDOException $e){
                echo $e;
                echo "<br>Cannot delete the record";
            }
        }
        else{
            echo "No name entered";
        }   
    }
?>
</head>





<body>
    
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label>Name: <input type="text" name = "Uname" ></label>
        <br><input type="submit" name="submit" value="Delete">
        </label>
    </form>

</body>
</html>