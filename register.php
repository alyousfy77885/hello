<?php
session_start();
include "db.php";
if (isset($_POST["signup_button"])) {
	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
//picture coding
$picture_name=$_FILES["picture"]["name"];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"chat/php/images/".$pic_name);
		
                    
         $status = "Active now";
    
		$sql1 = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`,`img`,`status`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2','$pic_name','$status')";
		$run_query = mysqli_query($con,$sql1);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE  user_id = -1";
	if($run_query==true){
                     
		echo "<script>alert('تم التسجيل بنجاح '); location.href='store.php'; </script>";
   }else
echo "hshsh" .$con->error;
}}
                    
?>















































