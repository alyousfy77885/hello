<?php
session_start();

include "db.php";

if(isset($_POST["categoryhomme"])){
	$category_query = "SELECT * FROM categories";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "<div id='responsive-nav'>
					<!-- NAV -->
				<ul class='main-nav nav navbar-nav'>
                    <li class='active'><a href='index.php'>Home</a></li>
                    <li><a href='store.php'>Electronics</a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
            
            $sql = "SELECT COUNT(*) AS count_items FROM products,categories WHERE product_cat=cat_id";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($query);
            $count=$row["count_items"];
            
            
            
			echo "
					
                    
                               <li class='categoryhome' cid='$cid'><a href='store.php'>$cat_name</a></li>
                    
			";
		}
        
		echo "</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
               
			";
	}
exit();
}


if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/2);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#product-row' page='$i' id='page'>$i</a></li>
            
            
		";
	}
exit();
}

if(isset($_POST["getProducthom"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            
            $cat_name = $row["cat_title"];
			echo "
				
                       <div class='product-widget'>
                                <a href='product.php?p=$pro_id'> 
									<div class='product-img'>
										<img src='product_images/$pro_image' alt=''>
									</div>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price'>$pro_price<del class='product-old-price'>$990.00</del></h4>
									</div></a>
								</div>
                        
			";
		}
	}
exit();
}

if(isset($_POST["gethomeProduct"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
    
	$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 71 AND 74";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
        
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            
            $cat_name = $row["cat_title"];
            
			echo "
				
                        
                                <div class='col-md-12 col-xs-6'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>جديد</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btn' style='display:inline'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>اضافه الى المفظله</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>المقارنات</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>عرض اكثر</span></button>
										</div>
									</div>
									<div class='add-to-car'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> اضافه للسله</button>
									</div>
								</div>
                                </div></div>";
							
                       
		}
        
      
}

    }
if(isset($_GET['i'])){
header('location:store.php');
}
exit();


	/*
    
if(isset($_POST["get_seleted_Category"]) ||  isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products,categories WHERE product_cat = '$id' AND product_cat=cat_id";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_keywords LIKE '%$keyword%'";
	}
	echo "<div class='row'>";
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            $cat_name = $row["cat_title"];
			echo "
					
                        <div class='col-md-12 col-xs-3'>
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>جديد</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btn' style='display:inline'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>اضافه الى المفظله</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>المقارنات</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>عرض اكثر</span></button>
										</div>
									</div>
									<div class='add-to-car'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> اضافه للسله</button>
									</div>
								
                                </div></div>";
							
       
		}exit();
		echo "</div";
	}*/