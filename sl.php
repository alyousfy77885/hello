<?php
include "db.php";


if(!isset($_POST["getProducthome"])){
	$limit = 6;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 1;
	}
	$product_query = "SELECT * FROM r";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		
		?>      
          <div class="container-fluid" style="width:100%;float:right;overflow:auto;">
  					<h3 class="aside-title" style="text-align:center;border-bottom: 2px solid cornflowerblue;padding:6px">الاعلانات</h3>
					
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin:1px;background-color:white;">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="text-align:center">


        <?php 
      $i=0;
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['ud'];
			$pro_cat   = $row['comp'];
			$pro_brand = $row['product_image'];
			$pro_title = $row['prduct_name'];
			$pro_price = $row['price'];
			$pro_image = $row['product_image'];
            	$pro_dat = $row['Dat'];
  $desc=$row['desc'];
$cont=$row['cont'];
            $cat_name = $row["loc"];
            if($i==1) {?>
      <div class="item active" style="text-align:center;float:right;width:100%">
<?php }else {?>

      <div class="item">
      <?php }?>
        <img src="product_images/<?php echo $pro_image;?>" alt="Los Angeles" style="width:80%;margin:10%;height:200px">
        <br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="ms-2 c-details">
                            <h6 class="mb-0"><?php echo $pro_cat;?></h6> <span><?php echo $cat_name;?></span>
                        </div>
                    </div>
                    <div class="badge"> <span style="color:black">$<?php echo $pro_price;?></span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading"><?php echo $pro_title;?> <br><?php echo $pro_dat;?></h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1"><?php echo $desc;?><span class="text2"></span></span> </div>
                           <center>
                           <a href="chat/chat.php?iid=<?php echo $pro_id;?>" style="background: #2B2D42;color:white;width:70px;border-radius:10px;height:30px;text-align:center;padding:8px;font-size:10px"><i class="fa fa-telegram" style="color:white"></i>استفسار 
</a>
             </center>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
 

  <?php $i++;}
  ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev" style="background:white;width:20px">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next" style="background:white;width:20px">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  

</div></div>
<?php } }?>
