<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
		 function check_new_order_recurrsive3() {
      jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'new_order_check',
            },
                success: function(response) {
				
		if (response.success) {
			 if (response.message !== "") {
			 jQuery(".redirecttext").html("redirection");
			window.location.href = 'https://followerstudio.net/my-orders-details/?id='+response.message;
			 }			
		}else{
			 jQuery(".my-order-overlay").css('display', 'none');
			jQuery(".order-error").show();
		}
                },
            });
    }
	
     jQuery(".order-detail-again").click(function() {
		  jQuery(".my-order-overlay").css('display', 'flex');
			var order_id = jQuery(".hidden-order-id").val();
		
		 var orderAgainData = {
                   order_id : order_id
                };
		 jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'order_again',
                data:  orderAgainData
            },
                success: function(response) {
					 jQuery(".order-again-spinner").hide();
					  var windowWidth = 600;
            			var windowHeight = 400;
			            var screenWidth = window.screen.width;
            			var screenHeight = window.screen.height;
            var left = (screenWidth - windowWidth) / 2;
            var top = (screenHeight - windowHeight) / 2;
	window.open(response.data, '_blank', '_blank', 'width=' + windowWidth + ', height=' + windowHeight + ', left=' + left + ', top=' + top);
					setInterval(check_new_order_recurrsive3, 3000);	
                },
					   error: function(status, error) {
                        
                        console.error('Error:', status, error);
                    }
				

            });
	 });
});

</script>
<!-- end Simple Custom CSS and JS -->
