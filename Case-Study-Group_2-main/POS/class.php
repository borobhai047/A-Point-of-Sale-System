<?php  

// Wasiul Islam 1822615


include "mysql.php";



Class Complete{
	
public $db;
	
	public function __construct(){
	$this->db=new Database();
	}
	
	
	
	public function products($var){
		
		
		$name=$var['name'];
		$price=$var['price'];
		$description=$var['description'];
		$image=$_FILES['file']['name'];
		$total=$price+($price*.06);
		$discount=$var['discount'];
		$quantity=$var['qty'];
		
		
		$insert="insert  into products(name,price,image,description,total,quantity,discount)
		values('$name','$price','$image','$description','$total','$quantity','$discount')";
		$run=$this->db->insert($insert);
		
		if($run){

		$_SESSION['pro']="Product Inserted Successfullly !";
		move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$image);
		header('location:index.php'); exit;
	}
	
	}
	
	
	
	
	public function editproduct($var){
		
		
		$name=$var['name'];
		$id=$var['id'];
		$price=$var['price'];
		$total=$price+($price*.06);
		$quantity=$var['qty'];
		$image=$_FILES['file']['name'];
		$description=$var['description']; //echo $description; exit;
		
		if($image==""){  
		$up="update  products set name='$name', price='$price',quantity='$quantity',description='$description', total='$total' where id='$id' ";
		$run=$this->db->update($up);

		}   
		
		else{
			$up="update  products set name='$name', price='$price',quantity='$quantity',description='$description', image='$image', total='$total' where id='$id' ";
		$run=$this->db->update($up);
		move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$image);
		}   
			
		
		
		if($run){

		$_SESSION['insert']="Informations Updated Successfullly !";
		header('location:index.php '); exit;
	}
	
		
	}
	
	
	
	public function addtocart($var,$product,$qt){
		
	$pro_name=$product['pName'];
	$pro_id=$product['ID'];
	$price=$product['Price'];
	$image=$product['Image'];
	$ses_id=session_id();
	
	if(isset($var['quantity'])) $quantity=$var['quantity'];
	else $quantity=$qt;
	
	$insert="insert  into cart(Pro_name,Pro_id,Price,Image,Ses_id,Quantity) 
	values('$pro_name','$pro_id','$price','$image','$ses_id','$quantity')";
		
		$sel="select* from cart where Pro_id='$pro_id' AND Ses_id ='$ses_id' "; $res=$this->db->select($sel);
		if($res->num_rows> 0){ if(isset($var['quantity'])) $_SESSION['duplicate']="Product is already in the cart !";
		else { $_SESSION['duplicate']="Product is already in the cart !"; header('location:savelist.php'); exit; } }
		
		
		else {
			$run=$this->db->insert($insert);
		
	     if($run==true){ header('location:cart.php');
		 $_SESSION['addcart']=$pro_name." Added to Cart !"; 
		
		 exit; }
		}
	}
	
	

	public function savelist($product){
		
	$pro_name=$product['pName'];
	$pro_id=$product['ID'];
	$price=$product['Price'];
	$image=$product['Image'];
	$cus_id=$_SESSION['log_id'];
	
	 $quantity=$_POST['quantity'];
	
	
	
	$insert="insert  into savelist(Pro_name,Pro_id,Price,Image,Cus_id,Quantity) 
	values('$pro_name','$pro_id','$price','$image','$cus_id','$quantity')";
		
		$sel="select* from savelist where Pro_id='$pro_id' AND Cus_id ='$cus_id' "; $res=$this->db->select($sel);
		if($res->num_rows> 0) $_SESSION['duplicate']="Product is already in the savelist !";
		
		else {
			$run=$this->db->insert($insert);
		
	     if($run==true){ header('location:savelist.php');
		 $_SESSION['addcart']=$pro_name." Added to Savelist !"; 
		
		 exit; }
		}
	}
	
	
	
	public function order($var){
		$ses_id=session_id();
		$cus_id=$var['cus_id'];
		
		
		$sel="select * from cart where Ses_id='$ses_id' "; $res=$this->db->select($sel); $c=0; $total_pro=0;
		
		$get_sl="select * from orders"; $last_sl=$this->db->select($get_sl)->num_rows;
		while($row=$res->fetch_assoc()) { 
		
		$last_sl=$last_sl+1;
		$pro_id=$row['Pro_id'];
		$pro_name=$row['Pro_name'];
		$quantity=$row['Quantity'];
		$price=$row['Price']; 
		
		$in="insert into Orders(Cus_id,Pro_id,Pro_name,Quantity,Price,SL) values('$cus_id','$pro_id','$pro_name','$quantity','$price','$last_sl')";	
			
	        $run=$this->db->insert($in);
		
	    if($run == true) { $c=($quantity*$price)+$c;  $total_pro++;  $_SESSION['last_order_id']=$this->db->connect->insert_id;
		
		} }  $c=$c+($c*.1);   $_SESSION['total_pro']=$total_pro;
		
		if($c!=0){  $_SESSION['order']="Order Successfull <small class='pt-1 ml-4 text-dark bg-success'> ($$c payment received) ! </small> "; 
		$del="delete from cart where Ses_id='$ses_id' "; $this->db->delete($del);
		header('location:cart.php'); exit;
		}
		
			
		
	}
	
	
	public function shiporders($min,$max){
		$min_id=$min;
		$max_id=$max;
		
	$up="update orders set Status=1 where (SL<='$max_id' AND SL>='$min_id') ";
	$res=$this->db->update($up); 
	if($res==true) {
		$_SESSION['shipped']="Package Shipped !";
		header('location:index.php?page=options/orders'); exit;
		
	}
		
}



public function searchpro($var){
		
		   $sel="select * from products where pName LIKE '%$var%'";  $res=$this->db->select($sel); return $res;
		   if($res==true){  header('location:products.php'); exit; }

}



}

$all=new Complete();

?>