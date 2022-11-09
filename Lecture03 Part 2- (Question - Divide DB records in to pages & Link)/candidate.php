
<?php
	include ("db.php"); // connect to the db

	if ( isset ($_REQUEST['page'])){ 
		$pageno = $_REQUEST['page']; // get the next page no. if more records. To go to the next page
	}else{
		$pageno=1;
	}


	$recPerPage=50; //how many records going to show in one page
	
	$end = $pageno * $recPerPage; //ending index of a page
	
	if ( $pageno == 1)  // starting index of a page
		$start	= 0;
	else
		$start = (($pageno-1) * $recPerPage )+1;

	
	//find number of pages to link	
	$sql1	= "SELECT * FROM candidate";
	$result1= $link->query($sql1);
	$totalrec=$result1->num_rows;
	$totalPages =	ceil ($totalrec / $recPerPage); //ceil->get the upper limit
	
?>







<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Candidate List</title>
</head>

<body>

	<?php //Divide db records in to pages---------------------------------

	//$sql= "SELECT * FROM candidate limit  0,35";    -->sql command to take limited records to a page
	$sql= "SELECT * FROM candidate limit ".$start.",".$recPerPage; 
	$result= $link->query($sql);
	?>


	<!--insert data in to a table----------------------------------------->
	<table width="75%" border="1"> 
    <tbody>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">A/L Index No</th>
      <th scope="col">A/L ZScore</th>
      <th scope="col">District</th>
    </tr>
	
	
	<?php
	
		if ( $pageno == 1) 
			$i	= 1;
		else
			$i = $start;   //(($pageno-1) * $recPerPage )+1;
		
		while ( $row = $result->fetch_array()){
	?>

		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['alindex']; ?></td>
		<td><?php echo $row['alzscore']; ?></td>
		<td><?php echo $row['district']; ?></td>
		
		</tr>
	  
	  
	<?php  $i++;	} ?>

	</tbody>
	</table>




	<!-- Linking pages-------------------------------------------------->
	<?php
		if ( $pageno>1){ //remove previous linking from the first page
	?>
	<a href="candidate.php?page=<?php echo $pageno-1;?>">PREVIOUS</a>
	<?php 
	    }
		
		//Links to the next pages...
		for ( $k =1 ; $k <=$totalPages;	$k++){
			
			if ( $k==$pageno){
				echo " $k ";}  //link should not available for the current page
			else{
	?>
			<a href="candidate.php?page=<?php echo $k; ?>"> <?php echo $k; ?> </a>
	<?php			
			}			
		}
	?>
	
	
	
	
	<?php
		if ( $pageno!=$totalPages){ //remove next linking from the last page
	?>
	<a href="candidate.php?page=<?php echo $pageno+1;?>">NEXT</a> <!--if more records, link to the next page-->
		<?php
		}
	?>
	
</body>
</html>