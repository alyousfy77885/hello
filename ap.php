<?php
session_start();
include "db.php";




if(isset($_POST['btn_save']))
{
  $ud=$_SESSION['uid'];
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

$comp=$_POST['comp'];
$loc=$_POST['loc'];
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];


	$category_query = "SELECT * FROM categories";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
while($row1= mysqli_fetch_array($run_query)){
  if($product_type==$row1['cat_title']){
  $cd=$row1['cat_id'];
  }
}
if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		
		move_uploaded_file($picture_tmp_name,"product_images/".$pic_name);
	$r=mysqli_query($con,"INSERT INTO `products`(`product_cat`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `lid`) values('$cd','$product_name',$price,'$details','$pic_name','$comp',1)");
$run=mysqli_query($con,"INSERT INTO `r`(`ud`, `prduct_name`, `product_cat`,`price`, `product_image`, `desc`, `comp`, `loc`, `Dat`)  values ('$ud','$product_name','$cd','$price','$pic_name','$details','$comp','$loc',CURRENT_TIMESTAMP)") or die (mysqli_error($con));
if($r){ header("location: store.php");}
else
echo $con->error;/*
 header("location: sumit_form.php?success=1");*/
}
/*
mysqli_close($con);*/

}
?>
