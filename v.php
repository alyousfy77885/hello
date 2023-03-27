<?php include "header.php";

 ?>
</div>
    <nav class="desktop-navigation-menu">

      <div class="containerr">

      </div>

    </nav>

    <div class="mobile-bottom-navigation" style="top:10px;">

      <button class="action-btn"  style="text-align:center;font-size:10px" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"  style="font-size:25px"></ion-icon>
        						
       المدن 

      </button>

      <button class="action-btn"  style="font-size:10px">

       <div class="header-ctnn">
							

								<!-- Cart -->
								<div class="dropdown" style="text:align:center">
	
									<a class="dropdown-toggl" data-toggle="dropdown" aria-expanded="false" style="text-align:center">
			
                	
        <ion-icon name="cart-outline"  style="font-size:25px;text-align:left"></ion-icon>
        
        <span class="count" id="count" style="top:-10px;right:-9px">0</span>
سلتى
          
               		</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  تعديل الطلب</a>
											
										</div>
									</div>
					
									</div>
									
								<!-- /Cart -->
								<!-- /Menu Toogle -->
							</div>

					
      </button>

<a href="addp.php" style="">
      
      <button class="action-btn" style="text-align:center;font-size:10px">
        <ion-icon name="add-circle-outline"  style="font-size:25px;text-align:left;font-size:30px;margin-right:5px"></ion-icon>   اضافه اعلان  </button>

      </a>
<a href="chat/index.php">
      <button class="action-btn" style="text-align:center;font-size:10px">


        <ion-icon name="mail-outline"  style="font-size:25px;text-align:center"></ion-icon>
        <span class="count">
<?php 

	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item from messages WHERE incoming_msg_id  = $_SESSION[uid]";
	
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item from messages WHERE incoming_msg_id  = $_SESSION[uid] and t=0";
	
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	}
else 
echo '0';
?>
</span>
الرسائل
      </button>
</a>
      <button class="action-btn" data-mobile-menu-open-btn style="text-align:center;font-size:10px">
        <ion-icon name="grid-outline"  style="font-size:25px"></ion-icon>
        الاصناف
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">المدن</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title" style="text-align:right">مناطق توفر المنتجات</a>
        </li>
<?php
$category_query = "SELECT * FROM location";
    
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	if(mysqli_num_rows($run_query) > 0){
        $i=1;
		while($row = mysqli_fetch_array($run_query)){
            
			$cid = $row["id"];
			         $i++;
 ?>
        <li class="menu-category">

          <button class="accordion-menu" lid='<?php echo $row['locid']?>' data-accordion-btn>
            <p class="menu-title"><?php echo $row['city'];?> </p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button></li>
<?php 
}}?>
      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">الدعم الفني</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category" dir="rtl">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title" style="float:right">مطور الموقع</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>

</div>
</div>

