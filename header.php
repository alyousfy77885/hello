<?php

session_start();

include "db.php";

?>



<!DOCTYPE html>

<html lang="ar">

	<head>

		<meta charset="utf-8">

	

<meta name="viewport" content="width=960px, initial-scale=1, maximum-scale=1.5">



		<title>Online Shopping</title>

    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css"/>

    

		<!-- Google font -->

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">



  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>    
 <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/veendor/modernizr-2.6.2.min.js"></script>
	        
           

  <!--

    - custom css link

  -->

  <link rel="stylesheet" href="./assets/css/style-prefix.css">



  <link rel="stylesheet" href="ssstyle.css">



  <!--

    - google font link

  -->

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"

    rel="stylesheet">



		<!-- Bootstrap -->

		<link type="text/css" rel="stylesheet" href="css/bbootstrap.min.css"/>



		<!-- Slick -->

		<link type="text/css" rel="stylesheet" href="css/slick.css"/>

		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>



		<!-- nouislider -->

		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>



		<!-- Font Awesome Icon -->

		<link rel="stylesheet" href="css/font-awesome.min.css">



		<!-- Custom stlylesheet -->

		<link type="text/css" rel="stylesheet" href="sstye.css"/>

		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>

		

		

		



		

		

		<link type="text/css" rel="stylesheet" href="css/resppponsive.css"/>



         

		<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>



		

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>

		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

		  <script src="https://oss.maxcdn.com/respond/1.4.2/resspoond.min.js"></script>

		<![endif]-->

		

		<link type="text/css" rel="stylesheet" href="u.css" >

      

  

    <style>

    @viewport {

  

  

 

}

  #container{

            max-width: 480px;

           float:right;

            margin;20px auto;

            margin-right:30px;

margin-top:15px;

z-index:99;

position:relative;

        }

        #demo_box{

           

            z-index:999;

        }

        .fa{

            font-size: 40px;

            line-height: 70px;

        }

        .fa-bars{

            color: #3498db;

        }

        pre{

            font-family: Consolas,Liberation Mono,Courier,monospace;

            font-size: 13px;

        }

        @media screen and (orientation: portrait){

            pre{

                overflow-x: scroll;

            }

        }

    

        #navigation {

          background: #FF4E50;  /* fallback for old browsers */

            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          

        }

        #header {

  

            background: black;  /* fallback for old browsers */

         /*   background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 

            background: linear-gradient(to right, #061161, #780206); 

 



  */

        }

        #top-header {

              

  

            background: black;  /* fallback for old browsers */

        /*    background: -webkit-linear-gradient(to right, #190A05, #870000);  /* Chrome 10-25, Safari 5.1-6 

            background: linear-gradient(to right, #190A05, #870000); W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */





        }

        #footer {

            background: #7474BF;  /* fallback for old browsers */

            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */





          color: #1E1F29;

        }

        #bottom-footer {

            background: #7474BF;  /* fallback for old browsers */

            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */

            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

          



        }

        .footer-links li a {

          color: #1E1F29;

        }

        .main-raiseed {

            

            margin: -7px 0px 0px;

            border-radius: 6px;

            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);



        }

       

        .glyphicon{

    display: inline-block;

    font: normal normal normal 14px/1 FontAwesome;

    font-size: inherit;

    text-rendering: auto;

    -webkit-font-smoothing: antialiased;

    -moz-osx-font-smoothing: grayscale;

    }

    .glyphicon-chevron-left:before{

        content:"\f053"

    }

    .glyphicon-chevron-right:before{

        content:"\f054"

    }

        

.header-link li {color:black;

display:inline-block;

margin:10px;



}

         

.header-link li a i{color:red;







    }

        

    #txt-search {

        border-radius: 0 4px 4px 0;

    }

    

 #btn-search {

margin-right:10px;

text-align:left;

font-size:20px;

height:50px;

margin-bottom:10px;

border-radius:10px;



        position: relative;

        border: 0;

        

		color:white;

		width:100px;

text-align:center;

        z-index: 1;



    }

.empty-text img{width:100%;height:300px}

   .loader,#loader{



  width: 200px;



  height: 200px;

  box-sizing: border-box;

  border-radius: 50%;

  border-top: 10px solid #e74c3c;

 position: relative;

 margin-right:30%;

  animation: a1 2s linear infinite;

}



.loader::before,#loader::after,#loader::before,.loader::after{

 content: '';

  width: 200px;

  height: 200px;

 position: absolute;

 left:0px;

  

  box-sizing: border-box;

  border-radius: 50%;

}



.loader::before,#loader::before{

  border-top: 10px solid #e67e22;

  transform: rotate(120deg);

}



.loader::after,#loader::after{

  border-top: 10px solid #3498db;
border-bottom: 10px solid #3498db;

  transform: rotate(240deg);

}



.loader h3,#loader h1{

  position: absolute;

  width: 200px;

  height: 200px;

  color: black;

  text-align: center;

  line-height: 200px;

  animation: a2 2s linear infinite;

}



@keyframes a1 {

  to{

    transform: rotate(360deg);

  }

}



@keyframes a2 {

  to{

    transform: rotate(-360deg);

  }

}

</style>

    </head>

	<body  style="background:#FFF; " dir="" id="df">

<!-- HEADER -->

	   

	
		<div id="loader-wrapper">	

		
			<div  id="loader"><h1 style="position:fixed">تحميل</h1></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>

		<div id="content">
		</div>


			

  <div class="overlayy" data-overlay></div>



  





  <div class="modall" data-modall>



    <div class="modal-close-overlaay" data-modal-overlay></div>



    <div class="modal-content">



      <button class="modal-close-btn" data-modal-close>

        <ion-icon name="close-outline"></ion-icon>

      </button>

    </div>



  </div>









  <div class="notification-toastt" data-toastt>



    <button class="toast-close-btnn" data-toast-close>

      <ion-icon name="close-outline"></ion-icon>

    </button>







 

  </div>







</div>



  <!--

    - HEADER

  -->



  



<header dir="rtl" style="border-bottom: 2px solid red">

<!-- TOP HEADER -->

     <div id="top-header"  style="background:#FFF;color:black; margin-top:40px;">

            	 

	

				<div class="container-fluid"  style="background:#FFF;color:black; margin:10px"></div>

	       		<center>			<ul class="header-link" style="color:black;text-align:center;float:none" dir="rtl">

					

					

						<li><a href="store.php" style="color:black"><i class="fa fa-home" style="margin-left:10px;"></i> الرئيسيه</a></li>

						<li><?php

                               include "db.php";

                         if(isset($_SESSION["uid"])){

                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";

                                $query = mysqli_query($con,$sql);

                                $row=mysqli_fetch_array($query);

                                 $_SESSION["name"]=$row["first_name"];

                                

                                echo '

                               <div class="dropdownn">

                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" style="color:black"><i class="fa fa-user-o"></i>اهلا ( '.$_SESSION["name"].')</a>

                                  <div class="dropdownn-content" style="background:white;text-align:right">

                                    <a href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true" ></i>الملف الشخصي</a>

                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>تسجيل خروج</a>

                                    

                                  </div>';

                            

                           }else{ 

                                echo '

                                <div class="dropdownn">

                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o" style="margin-left:10px"></i> الحساب</a>

                                  <div class="dropdownn-content" style="background:white;text-align:right">

                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>تسجيل دخول</a>

                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>انشاء حساب</a>

                                    

                                  </div>

                                </div>';

                                

                            }

                                          ?>

                               

                                </li>	

										<li><a href="store.php" style="color:black"><i class="fa fa-location-arrow" style="margin-left:10px"></i>اماكن وجودنا</a></li>

									<li><a href="store.php" style="color:black"><i class="fa fa-product-hunt" style="margin-left:10px;"></i> حولنا</a></li>

				

					</ul>

					</center>

				

			</div>

			<!-- /TOP HEADER -->

			

			



			<!-- MAIN HEADER -->

			<div id="header"  style="background:#FFF;color:black; margin-bottom:" dir="rtl">



				<!-- container -->

				<div class="container-fluid" dir="rtl">

					<!-- row -->

					<div class="row">

		<!-- LOGO -->

						<div class="col-md-12">

				





						



							<div class="header-logo">

                 



								<a href="#" class="logo">

								<font style="font-style:normal; font-size: 33px;color: black">

                                  اهلا بكم في المتجر الشامل      

                                    </font>

									

								</a>

							</div>

						

						</div>



						<!-- /LOGO -->



						<!-- SEARCH BAR -->

				</div>	

							

  

					<div class="row">

								<!-- /ACCOUNT -->

		

     

							<div class="col-xs-12">

<form  enctype="multipart/form-data" method="post">

 <div class="input-group">

 <span class="input-group-btn">       

	<select class="form-control" style="width:100px;height:40px;float:right" name="product_type">

										<option value="0">الاصناف</option>

								  <?php 

        $sql =  "SELECT * FROM categories";

        $result = mysqli_query($con, $sql);



        while($row = mysqli_fetch_array($result)){

        echo "<option value=\"".$row["cat_id"]."\"";

        if($_POST['name'] == $row['cat_title'])

        echo 'selected';

        echo ">".$row["cat_title"]."</option>";

        }?>

	</select>

</span>

									<input class="input" id="search" type="text" placeholder="اسم المنتج" style="height:40px">

<span class="input-group-btn">       

  <button  id="search-btn" class="btn btn-primary" style="height:40px;text-align:center;padding:4px;font-size:20px">

                <span class="fa fa-search" style="padding:4px;font-size:20px;color:white ;text-align:center;hieght:20px;margin-top:0px"></span>بحث

            </button>

    </span>

 </div>

 </form>



	</div>

						<!-- /SEARCH BAR -->



						<!-- ACCOUNT -->

									</div>

					<!-- row -->

				

				<!-- container -->

			



			<!-- /MAIN HEADER -->

	

		

		<div class="modal fade" id="Modal_login" role="dialog">

                        <div class="modal-dialog">

													

                          <!-- Modal content-->

                          <div class="modal-content">

                            <div class="modal-header">

                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                              

                            </div>

                            <div class="modal-body">

                            <?php

                                include "l.php";

    

                            ?>

          

                            </div>

                            

                          </div>

													

                        </div>

                      </div>

                <div class="modal fade" id="Modal_register" role="dialog">

                        <div class="modal-dialog" style="">



                          <!-- Modal content-->

                          <div class="modal-content">

                            <div class="modal-header">

                              <button type="button" class="close" data-dismiss="modal">&times;</button>

                              

                            </div>

                            <div class="modal-body">

                            <?php

                                //include "l.php";

    

                            ?>

          

                            </div>

                           </div> 

                          </div>







                        

</div>

                   </div> </div>

		