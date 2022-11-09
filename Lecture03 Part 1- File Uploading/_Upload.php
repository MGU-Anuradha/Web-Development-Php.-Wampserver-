<?php

    if(isset($_REQUEST['submit'])){
        echo "Submitted.<br>";

        $filename = $_FILES['myfile']['name'];
        $filetype = $_FILES['myfile']['type'];
        $filesize = $_FILES['myfile']['size'];
        
        echo "<br>".$filename."<b><br>".$filetype."<br> ".$filesize;
       
        //check whether the filesize is greater than 2MB
       // $max = 2*1024*1024;
        //if($filesize > $max) die ("Maximum file size is 2MB..");  


        //check the file type...
        //01. check whether it is a valid file type
        // $allowtypes = array["image/jpg","image/jpeg","image/png","image/gif"];
        //get the filetype and go through the array to check if it is available*/


        
        
        
        //check whether there's a existing file
        if(file_exists("Userupload/".$filename)){

            echo "<br><br>".$filename." is in the folder";
        }else{
            move_uploaded_file($_FILES['myfile']['tmp_name'], "Userupload/".$filename);
            echo "Upload done...";
        }

        
    }
?>