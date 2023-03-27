   
   <?php 
   


   ?>
   
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <style>
    .input-borders{
        border-radius:30px;
    }
    </style>
				<!-- row -->
				
                <div class="container-fluid">
					
						
						
						<!-- /Billing Details -->
						
								<form id="signup_for"  class="login100-form" method="post" action="register.php" enctype="multipart/form-data">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >انشاء حساب</h2>
                                    </div>
                                    <div class="form-group ">
                                    
                                        <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="الاسم الاول">
                                    </div>
                                    <div class="form-group">
                                    
                                        <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="الاسم الاخير">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="email" name="email"  placeholder="البريد الالكتروني">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="كلمع المرور">
                                    </div>
                                      <div class="form-group">
                                  
<input type="file" name="picture" required class="btn btn-fill btn-succes" id="picture" >
                     </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="تاكيد كلمه المرور">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="رقم الهاتف">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address1" id="address1" placeholder="العنوان">
                                    </div>
                                    <div class="form-group">
                                        <input class="input form-control input-borders" type="text" name="address2" id="address2" placeholder="المدينه">
                                    </div>
                                    
                                    
                                    <div style="form-group">
                                       <input class="primary-btn btn-block"  value="انشاء حساب" type="submit" name="signup_button">
                                    </div>
                                    <div class="text-pad">
                                    <a href="login_form.php" data-toggle="modal" data-target="#Modal_login" id="Log">هل لديك حساب بالفعل؟تسجيل دخول</a>
                                       
                                    </div>
                                    
                                
								</form>
                                <div class="login-marg">
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                    

                                </div>
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-2"></div>
                        </div>

						
					</div>
                    </div> 

					
				
				<!-- /row -->

			
