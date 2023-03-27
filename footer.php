<footer id="footer" dir="rtl" style="

  background: white;">

			<!-- top footer -->

			<div class="section">

				<!-- container -->

				<div class="container-fluid">

					<!-- row -->

					<div class="row">

						<div class="col-md-4">

							<div class="footer" style="text-align:center;padding:0px">

								<h3 class="footer-title" style="color:blue">حولنا</h3>

								

								<ul class="footer-links" style="text-align:center;">

									<li><a href="#"><i class="fa fa-map-marker"></i>العنوان:الجمهوريه اليمنيه -محافظه تعز</a></li>

									<li><a href="#"><i class="fa fa-phone"></i>+967712339190</a></li>

									<li><a href="#"><i class="fa fa-envelope-o"></i>alyousfy77885@gmail.com</a></li>

								</ul>

							</div>

						</div>

						<div class="col-md-4" style="margin-top:80px;text-align:center" >

							<ul class="footer-payments">

								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>

								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>

								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>

								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>

								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>

								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>

							</ul>

						</div>



						<div class="col-md-4">

							<div class="footer" style="text-align:center;">

								<h3 class="footer-title" style="color:blue">خدماتنا</h3>

								<ul class="footer-links">

									<li><a href="#">تصميم المواقع الالكترونيه </a></li>

									<li><a href="#">بناء جميع انواع الانظمه</a></li>

								</ul>

							</div></div>

						<div class="clearfix visible-xs">

						

						

						</div>



						

					</div>

					

						</div>

		<span class="copyright" style="text-align:center">

								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

					جميع الحقوق محفوظه		<script>document.write(new Date().getFullYear());</script> 

							

							</span>

					

					<!-- /row -->

				</div>

				<!-- /container -->

			</div>

			<!-- /top footer -->

                



			<!-- bottom footer -->

			

			<!-- /bottom footer -->

		</footer>

		</div>

				<script src="js/jquery.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

		<script src="js/slick.min.js"></script>

		<script src="js/nouislider.min.js"></script>

		

		<script src="js/actions.js"></script>





<script src="js/h.js"></script>

		<script src="js/jquery.zoom.min.js"></script>

		<script src="js/main.js"></script>

		



		<script src="js/sweetalert.min"></script>

		<script src="js/jquery.payform.min.js" charset="utf-8"></script>

    <script src="js/script.js"></script>

		





  <!--

    - custom js link

  -->

  



  <!--

    - ionicon link

  -->		<script>var c = 0;

        function menu(){

          if(c % 2 == 0) {

            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    

            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    

            c++; 

              }else{

            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        

            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        

            c++;

              }

        }

           

		

</script>

    <script type="text/javascript">

		$('.block2-btn-addcart').each(function(){

			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();

			$(this).on('click', function(){

				swal(nameProduct, "is added to cart !", "success");

			});

		});



		$('.block2-btn-addwishlist').each(function(){

			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();

			$(this).on('click', function(){

				swal(nameProduct, "is added to wishlist !", "success");

			});

		});



	</script>

	

    

    <script src="src/jquery.popmenu.js"></script>

			<script src="js/jquery.min.js"></script>

	

    <script>
   

$('#fileToUpload').on('change', function() {



        var file = this.files[0];

        var imagefile = file.type;

        var imageTypes = ["image/jpeg", "image/png", "image/jpg", "image/gif"];

        if (imageTypes.indexOf(imagefile) == -1) {

            //display error

            return false;

            $(this).empty();

        }

        else {

            var reader = new FileReader();

            reader.onload = function(e) {

                $(".empty-text").html('<img src="' + e.target.result + '" />');

            };

            reader.readAsDataURL(this.files[0]);

        }



    });

        $(function(){

          

            $('#demo_box_2').popmenu({'background':'#e67e22','focusColor':'#c0392b','borderRadius':'0'});

           $('#demo_box_3').popmenu({'width': '200px', 'background':'#223','focusColor':'#ee5','borderRadius':'10px', 'top': '70', 'left': '-40', 'color':'#1265fe','border':'3px solid #0035fe'});

        })

    </script>



  <!--

    - custom js link

  -->

	

		<script src="js/actions.js"></script>

		



  <script src="./assets/js/script.js"></script>



  <!--

    - ionicon link

  -->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	

		<script src="js/actions.js"></script>
  <script>  
</script>
	

		</body>

</html>