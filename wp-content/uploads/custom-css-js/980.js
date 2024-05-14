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
			 jQuery(".buy-follower-overlay").css('display', 'none');
			jQuery(".order-error").show();
		}
                },
            });
    }
	
     jQuery(".loginbtn").click(function() {
		 var error = false;
		   var useremail = jQuery("#loginuseremail").val();
		 var userpass = jQuery("#loginuserPassword").val();
		 
		 	if(useremail == ""){
	   	error = true;
				jQuery(".login-email-error").show();
	   		}else{
	   jQuery(".login-email-error").hide();
	   		}
		 
		 	if(userpass == ""){
	   	error = true;
				jQuery(".login-password-error").show();
	   		}else{
	   jQuery(".login-password-error").hide();
	   		}
		 
		 if(!error){	
		
			  jQuery(".loginbtn .spinner").show();
			 	var loginData = {
                    useremail: useremail,
                    userpass: userpass,		
                };
			 
		
			 jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'user_login',
                data: loginData
            },
                success: function(response) {
					jQuery(".loginbtn .spinner").css('display', 'none');
					if (response.success) {
							
						 var encodedParams = new URLSearchParams(window.location.search).get('data');
			 if (encodedParams) {
          jQuery(".user-login-success").html(response.message);
					jQuery(".user-login-success").show();
					jQuery(".user-login-error").hide();
                var decodedParams = JSON.parse(decodeURIComponent(encodedParams));

				var selectedCategory = decodedParams.selectedCategory;
                var service_id = decodedParams.service_id;
              
				 var user_qty = decodedParams.user_qty;
				 var service_rate =  decodedParams.service_rate;
			var service_name = decodedParams.service_name;
				 
				 var dataObject = {
                    selectedCategory: selectedCategory,
                    service_id: service_id,
                    user_qty: user_qty,
					service_rate : service_rate,
					service_name : service_name				
                };
				 
				 if(decodedParams.userselected_name !== ""){
					 dataObject['userselected_name']  = decodedParams.userselected_name;
					}
				 
				 if(decodedParams.userpost_link !== ""){
					 dataObject['userpost_link'] = decodedParams.userpost_link;
					}
				 
				       jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'stripe_session',
                dataObject: dataObject
            },
                success: function(response) {
						jQuery(".spinner").css('display', 'none');
					  var windowWidth = 600;
            var windowHeight = 400;

            // Calculate the center position
            var screenWidth = window.screen.width;
            var screenHeight = window.screen.height;

            var left = (screenWidth - windowWidth) / 2;
            var top = (screenHeight - windowHeight) / 2;
					
				window.open(response.data, '_blank', '_blank', 'width=' + windowWidth + ', height=' + windowHeight + ', left=' + left + ', top=' + top);
					jQuery(".buy-follower-overlay").css('display', 'flex');
				setInterval(check_new_order_recurrsive3, 3000);
		
                }

            });
           
			 }else{
				jQuery(".user-login-success").html(response.message);
					jQuery(".user-login-success").show();
					jQuery(".user-login-error").hide();
					var newUrl = "https://followerstudio.net"; 
                window.location.href = newUrl; 
			 }			
					}else{
					jQuery(".user-login-error").html(response.message);
					jQuery(".user-login-success").hide();
					jQuery(".user-login-error").show();
					}
                },
				

            });
			 
			}
			
		  });
});
</script>
<!-- end Simple Custom CSS and JS -->
