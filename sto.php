<?php
include 'header.php';
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
        }, 50);
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
      <div class="main main-raised"> 
        
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
								<div id="store" class="col-md-8">
						<!-- store top filter -->
						<div class="store-filter">
							<div class="store-sort">
								<label>
									فرز بواسطه:
									<select class="input-select">
										<option value="0">الاكثر شيوعا</option>
										<option value="1">الموقع</option>
									</select>
								</label>

								<label>
									عرض:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active" style="color:black"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
							<!-- product -->
							<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
							<div class="row" id="product-row">
						<div class="col-xs-12" id="product_msg">
					
				</div>
				</div>			
							<!-- /product -->
						
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix" style="color:black">
							<span class="store-qty">عرض 20-100 منتج</span>
							<ul class="store-pagination" id="pageno">
								<li ><a class="active" href="#aside">1</a></li>
								
								<li><a href="#" style="color:black"><i class="fa fa-angle-right"></i></a></li>
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
?>