<?php

include 'h.php';

if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<div class="login-marg">
						<!-- Billing Details -->
						
						
						<!-- /Billing Details -->
						
						
								<form action="login.php" id="llogin" method="post" class="login100-form ">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >تسجيل دخول</h2>
                                    </div>
                                   
                                    
                                    <div class="form-group">
                                       <label for="email" style="float:right">البريد الالكتروني</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="البريد الالكتروني" id="password" required>
                                    </div>
                                    <div class="form-group">
                                       <label for="email" style="float:right">كلمه المرور</label>
                                        <input class="input input-borders" type="password" name="password" placeholder="******" id="password" required>
                                    </div>
                                    
                                    <div class="text-pad" >
                                       <a href="#">
                                           هل نسيت كلمه السر?
                                       </a>
                                        
                                    </div>
                                    
                                        <input class="primary-btn btn-block"   type="submit"  Value="دخول" name="login">
                                        
                                        <div class="panel-footer"><div class="alert alert-danger"><h4 id="e_msg"></h4></div></div>
                                    
                                    	
                                        
                                    

                                </div>
                                
								</form>
                           
						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			</div>