<?php

    //list available data in the database

    include ("db.php");
    $sql = "SELECT * FROM student";
    $result = $link->query($sql);

    //var_dump($result);

    if($result->num_rows>0){
        $n = $result->num_rows;  //get number of queries
        echo "You got $n records";

?> 
        <!--make a table and insert data to it-->

        <table width = "50%" border="1">
        <tbody>
            <tr>
                <th scope="col"> Student No </th>
                <th scope="col"> Name </th>
                <th scope="col"> Age </th>
                <th scope="col"> City </th>
            </tr>

        
<?php
            $i = 1;
            while($rows = $result->fetch_array()){
?>
          
          <tr>
                <td><?php $i ; ?> </td>
                <td><?php echo $row['stdno']; ?> </td>
                <td><?php echo strtoupper ($row['name']);  //to make all names in upper case-->
                
                
                    //to update a query-->
                    $uppername = strtoupper($row['name']);
                    $id = $row['stdno'];

                    $sql2 = "UPDATE student SET name ='".$uppername."' where stdno = '".$id."' ";
                    $result2 = $link->query($sql2);

                ?> </td>

                
                <td><?php echo $row['age']; ?> </td>
                <td><?php echo $row['city']; ?> </td>
           </tr>

<?php
            $i++;
        }
        
    }else{
        echo " NO reords match with the sql";
    }
?>
    

</tbody>
</table>