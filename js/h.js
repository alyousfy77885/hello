$(document).ready(
 function()
 {
 
 $('#search-btn').click(
 function(event)
 {
 
 event.preventDefault();
 
 
 $("#get_product").html("<div class='loader'><h3>جارى البحث</h3></div>");
		var keyword = $("#search").val();
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		});
	
 }
 );
 
 }
);
