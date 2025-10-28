

<?php

// Asfi Ahmed 1822729

include "class.php";

		
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Point of Sale (POS)</title>

       
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>

    <link href="admin.css" rel="stylesheet" type="text/css" media="all"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

<style> .rating{ height:32px; }</style>		
   </head>
    
    

    
    
    
    
    
        <body class=""> <h4 class="text-center m-auto" >
		<?php if(isset($_SESSION['success'])) { echo $_SESSION['success']; $_SESSION['success']='';}?>
                                                    </h4>
    
<div class="container mt-5">

<div class="row" >

<div class="mx-2"> </div>


 </div>

    <div class="row ">
   
   <h3  class="my-5 h3 bg-light px-5 font-weight-bold"><span class="text-success">(Point of Sale) - </span>  All Products  </h3>
   <a href="addpro.php" class="dropdown w-25 m-auto mr-1 btn btn-info"> Add product</a>
   
   <p class="dropdown w-25 m-auto mr-1 btn btn-light"> <b>Date: </b><?php echo date('M d, h:i A',strtotime(date('m/d/Y H:i:s'))); ?> </p>
   






<table class="display table table-bordered " id="myTable">
	<thead>
		<tr>
			<th>Product Name </th>
			<th>Image</th>
			<th>Description</th>
			<th>Quantity</th>
			<th>Price (RM)</th>
			<th>Tax (RM)</th>
			<th>Discount) (RM)</th>
			
			<th>Total (RM)</th>		
			
			<th class="text-center">Actions</th>
		
		</tr>
	</thead>
	
	<tbody>
	
	
	<?php  
	$sel="select * from products ";
	$run=$db->select($sel);
	while($row=$run->fetch_assoc()){  ?>
		
		<tr>
			<td><?php echo $row['name'];?></td>
			
			<td><img style="width:120px;height:80px" src="images/<?php echo $row['image'];?>" alt="" /></td>	
			<td><?php echo $row['description'];?></td>	
            <td><?php echo $row['quantity'];?></td>				
			<td>RM <?php echo $row['price'];?></td>
			<td>RM <?php echo $row['price']*0.06;?> (6%)</td>
			<td>RM <?php echo $row['discount'];?>%</td>
			<td>RM <?php echo $row['total'] - ($row['price']*($row['discount']/100)); ?></td>
			
			<td class="text-center">
			<a href="editpro.php?id=<?php echo $row['id'];?>" class=" mr-1 btn btn-info">Edit</a>
			<a onclick="return confirm('are you sure?');" href="delete.php?proid=<?php echo $row['id'];?> &image=<?php echo $row['image'];?> " class=" btn btn-danger">Delete</a>
			
	<?php } ?>
			
			
			</td>
		</tr>
		
		
		
	</tbody>
	
	
</table>



		
		
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

    </body>
</html>