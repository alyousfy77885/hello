<?php include "h.php" ?>
<body class="login" dir="rtl">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<ul class="switcher clearfix">
				<li class="first logo active" data-tab="logi">					
						<a>تسجيل دخول</a>			
				</li>
				<li class="second logo" data-tab="sign_up">
						<a>انشاء حساب</a>	
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="logi">
					<form class="form-horizontal login-form" action="login.php" method="post">
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_username" placeholder="البريد الالكتروني" required="" type="email" name="email"> <i class="fa fa-user"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" placeholder="كلمه السر" required="" type="password" name="password"> <i class="fa fa-lock"></i>
						</div>
						<div class="form-group">
							<input class="btn btn-success btn-lg btn-block" type="submit" name="login">
						</div>
						<div class="checkbox checkbox-success">
							<input id="stay-sign" type="checkbox">
              <label for="stay-sign" >انشاء حساب</label>
						</div>
            <hr />
						<div class="text-center">
							<label><a href="#">هل نسيت كلمه السر</a></label>
						</div>
					</form>
				</div>
				<div class="tab-pane" id="sign_up">
					<form class="form-horizontal login-form" method="post" action="register.php" enctype="multipart/form-data">
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_username" placeholder="اسم المستخدم" required="" type="text" name="f_name"> <i class="fa fa-user"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" placeholder="اللقب" required="" type="text" name="l_name"> <i class="fa fa-users"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" type="email" name="email"  placeholder="البريد الالكتروني"> <i class="fa fa-envelope"></i>
						</div>
							<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" placeholder="كلمه المرور" required="" type="password" name="password"> <i class="fa fa-lock"></i>
						</div>
						<div class="form-group relative">
							<input class="form-control input-lg" id="login_password" placeholder="اعاده كتابه كلمه المرور" required="" type="password" name="repassword"> <i class="fa fa-key"></i>
						</div>
					
                                  	<div class="form-group relative">
					
<input type="file" name="picture" required class="form-control input-lg" id="picture" > <i class="fa fa-file-image-o"></i>
                     </div>
                                  	<div class="form-group relative">
					      <input class="form-control  input-lg" type="text" name="mobile" id="mobile" placeholder="رقم الهاتف"> <i class="fa fa-phone-square"></i>
                                    </div>
                               	<div class="form-group relative">
					         <input class="form-control input-lg" type="text" name="address1" id="address1" placeholder="العنوان"> <i class="fa fa-address-book-o"></i>
                                    </div>
                                 	<div class="form-group relative">
					       <input class="form-control input-lg" type="text" name="address2" id="address2" placeholder="المدينه"> <i class="fa fa-address-card-o"></i>
                                    </div>
                                    
                                    
                           
						<div class="form-group">
							<button class="btn btn-success btn-lg btn-block" type="submit" name="signup_button">تسجيل</button>
						</div>

						<div class="checkbox checkbox-success">
							<input id="agree-terms" type="checkbox">
              <label for="agree-terms"> الموافقه على الشروط والخصوصيه</label>
						</div>
						<hr>
						<div class="text-center">
							<label><a href="#"  data-tab="logi">هل لديك حساب?</a></label> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
                           



</body>
<script>
$(document).ready(function(){
	
	$('ul.switcher li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('li').removeClass('active');
    $('div.tab-pane').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	})

})
</script>
