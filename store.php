<?php
include 'v.php';
?>
     <script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 500);
    };	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>
      <div class="main maiin-raised" dir="rtl"> 
        
		<div class="section">
			<!-- container -->
			<div class="container-fluid" >
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-4" style="">
					<div id="get_category" style="float:right;width:100%">
				        </div>
					
						<!-- aside Widget -->
						<div class="aside" style="float:right;margin-bottom:20px;width:100%" >
							<h3 class="aside-title" style="text-align:center;padding:10px;
border-bottom: 2px solid cornflowerblue;border-top: 2px solid cornflowerblue;"
>الاسعار</h3>
							<div class="price-filter">
								<div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 0%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 0%; right: 0%;"></div><div class="noUi-origin" style="left: 100%;">
<div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;"></div></div></div></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span></span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
						<!-- aside Widget -->
					<!-- aside Widget -->
						<div class="aside" style="width:100%;float:right;
border-bottom: 2px solid cornflowerblue;border-top: 2px solid cornflowerblue;
">
						<div id="get_brand" style="width:100% ;text-align:right">
				</div>        
					</div>		<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
					<div class="aside" style="float:right;width:100%">
							<h3 class="aside-title" style="text-align:center;padding:10px;
border-bottom: 2px solid cornflowerblue;border-top: 2px solid cornflowerblue;"
>الاكثر طلبا</h3>
							<div id="get_product_home" style="text-align:right">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>
					</div>
									
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->
					<!-- STORE -->
							<div id="stor" class="col-md-8" dir="rtl" style="overflow:auto">
						<!-- store top filter -->
									
		<?php include "sl.php";?>
				
						<div class="store-filter clearfix"  >
							<div class="store-sort" style="float:right:text-align:right">
								<label style="float:right:text-align:right">
								ترتيب بواسطه:
									<select class="input-select">
										<option value="0">الاكثر شهره</option>
										<option value="1">الموقع</option>
									</select>
								</label>

								<label>
								عرض	:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row" id="product-row" style="max-height:1000px;overflow:auto;min-height:500px">
							
						<div class="c" id="product_msg" style="text-align:right">
					</div>
							<!-- product -->
									<div id="get_product" class="container" style="margin:10px;top:10px">
							<!--Here we get product jquery Ajax Request-->
						</div>
							
							<!-- /product -->
						</div>
						<!-- /store products -->
						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty" style="float:right;text-align:right;margin:10px">عرض 20-100 منتج</span>
							<ul class="store-pagination" id="pageno">
								<li ><a class="active" href="#aside">1</a></li>
								
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
</div>
<?php

include "newslettter.php";
include "footer.php";
exit();
?>