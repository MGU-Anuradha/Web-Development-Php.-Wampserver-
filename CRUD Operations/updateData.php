<!DOCTYPE html>
<html>

<head>
<?php
    
    include "connection.php";

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['Uname'];
        $Age = $_REQUEST['Age'];
       
        if(!(($name==NULL)||($Age==NULL))){
            
            //UPDATE temp SET Age = '21' WHERE Name = "Gihanta"
            try{
                $sql = "UPDATE temp SET Age = $Age WHERE Name = '$name'";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                
                echo "successfully Update the record";
            }
            catch(PDOException $e){
                echo $e;
                echo "<br>Cannot Update the record";
            }
        }
        else{
            echo "Record is not updated";
        }
    }
?>
</head>




<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <label>Name: <input type="text" name = "Uname" ></label>
        <label>New age: <input type="text" name = "Age" ></label>
        <br><input type="submit" name="submit" value="Update">
        </label>
    </form>
</body>

</html>