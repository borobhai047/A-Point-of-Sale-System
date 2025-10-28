<?php 

// Muhammad Aiman Najmi Bin Abdullah

include "class.php";

//Add Product";
	
	if(isset($_POST['addpro'])){
		
	$all->products($_POST);
	
	}
	
	////Add Product";";
	
	
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
    
	
	<h3  class="my-4 w-75 mx-auto  h3 bg-light text-center font-weight-bold">Add Products  </h3>
<div class="text-center bg-success mb-5"><b class="bg-success  " >

</div>


			

			
		    <form class="w-75 mx-auto" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post" enctype="multipart/form-data" >
			
		    	<div class="row form-group">
		    		<div class="col-sm-1"><label for="name"><strong>Product Name</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="text" name="name" id="name" placeholder="Enter Name"  /> 
					
					</div>
					
					
		    	</div>
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Quantity</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group" type="number" min="1" name="qty" id="username" placeholder="Enter quantity"  /> 
					
					</div>
					
		    	</div>
				
				
		
	
					<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Descrip -tion</strong></label></div>
					
		    		<div class="col-sm-7"> 
                     <textarea required="" name="description" cols="50" rows="2"></textarea>			
					</div>
					
		    	</div>
				
				
				
				
				
				
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Price</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input required="" class="form-control form-group " type="text" name="price" id="username" placeholder="RM"  /> 
					
					</div>
					
		    	</div>
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Discount</strong></label></div>
					
		    		<div class="col-sm-7"> 
					<input class="form-control form-group " type="number" name="discount" id="username" placeholder="discount in %"  /> 
					
					</div>
					
		    	</div>
				
				
				<div class="row form-group">
		    		<div class="col-sm-1"><label for="username"><strong>Image</strong></label></div>
					
		    		<div class="col-sm-7"> 
                   <input required="" type="file" name="file" />					
					</div>
					
		    	</div>
				
				
				
				
				<input type="submit" name="addpro" value="Save" class=" w-50 mt-4 px-3 py-2 btn btn-primary  font-italic" />
				
		    </form>
			
			
			
							<div class="clearfix" style="min-height:140px"></div>
							
							
							

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

