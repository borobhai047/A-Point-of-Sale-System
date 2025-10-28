
<?php    session_start();
include "class.php";




// Delete: Product

if(isset($_GET['proid']) ){

$id=$_GET['proid'];
$image=$_GET['image'];


$del=" delete from products where id='$id' ";
$run=$db->delete($del);

if($run==true){
	unlink('images/'.$image);
	
	$_SESSION['delpro']="Deleted Successfully";	
	header('location:index.php'); exit;
}
}

?>

