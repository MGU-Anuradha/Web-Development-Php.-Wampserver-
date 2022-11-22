<!DOCTYPE html>
<html>
<head>

<?php
    
    //Display values in the form in the same page

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['Uname'];
        $Gen = $_REQUEST['Gender'];
        $Age = $_REQUEST['Age'];

        echo "Name : $name <br> Gender : $Gen <br> Age : $Age"
    }
    else{
        echo "All fields are needed";
    }
?>
</head>



<body> 
    <!--- Creating a form-->

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

        <label>Name: <input type="text" name = "Uname" ></label>      
        <label><br>Gender: Male<input type="radio" name = "Gender" value="M"> 
                           Female <input type="radio" name = "Gender" value="F" >       
        <label><br>Age: <input type="text" name = "Age" ></label><br>
        
        <input type="submit" name="submit" value="Add">
    
    </form>

</body>
</html>