<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
	 		 function check_new_order_recurrsive4() {
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
     jQuery(".signup-button").click(function() {
		 var error = false;
		   const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
           
		   var usernameValue = jQuery("input[name='username']").val();
		  var useremailValue = jQuery("input[name='useremail']").val();
		 var userpassValue = jQuery(".fetchpassword").val();
		  var userrepeatpassValue = jQuery(".fetchrepeatpassword").val();
		
		if(usernameValue == ""){
		   error = true;
			jQuery(".name-error").show();
		   }else{
			jQuery(".name-error").hide();
		   }
		 
		 	if(useremailValue == ""){
		   error = true;
			jQuery(".email-error").show();
		   }else{
			jQuery(".email-error").hide();
			   if(emailPattern.test(jQuery(".fetchemail").val())){
					jQuery(".invalid-email-error").hide();
					}else {
                    error = true;
					jQuery(".invalid-email-error").show();
                }
		   }
	
					
					
              if(userpassValue == ""){
				  error = true;
					jQuery(".password-error").show();
				 }else{
					jQuery(".password-error").hide();
				 }
		 		
		  if(userrepeatpassValue == ""){
				  error = true;
					jQuery(".repeat-password-error").show();
				 }else{
					jQuery(".repeat-password-error").hide();
				 }
		 
		 if( userpassValue != "" && userrepeatpassValue != "" && userpassValue !=userrepeatpassValue  ){
				error = true;
					jQuery(".not-match-password-error").show();
			}else{
					jQuery(".not-match-password-error").hide();
			}
		 
		 if(!error){
			  jQuery(".btn-design .spinner").show();
			  	var registerData = {
                    usernameValue: usernameValue,
                    useremailValue: useremailValue,
                    userpassValue: userpassValue,
                    userrepeatpassValue: userrepeatpassValue,			
                };
		   jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'user_registration',
                data: registerData
            },
                success: function(response) {
					if (response.success) {
						 var encodedParams = new URLSearchParams(window.location.search).get('data');

				if(encodedParams){
          jQuery(".user-login-success").html(response.message);
					jQuery(".user-login-success").show();
					jQuery(".user-login-error").hide();
               var params = {};
            var pairs = encodedParams.split('&');
            pairs.forEach(function(pair) {
                var parts = pair.split('=');
                var key = decodeURIComponent(parts[0]);
                var value = decodeURIComponent(parts[1]);
                params[key] = value;
            });

				var selectedCategory = params.selectedCategory;
                var service_id = params.service_id;
           
				 var user_qty = params.user_qty;
				 var service_rate =  params.service_rate;
			var service_name = params.service_name;
				 
				 var data = {
                    selectedCategory: selectedCategory,
                    service_id: service_id,
                    user_qty: user_qty,
					service_rate : service_rate,
					service_name : service_name				
                };
				
					if(params.userselected_name !== ""){
					   data['userselected_name'] = params.userselected_name;
					   }
					
					if(params.userpost_link !== ""){
					   data['userpost_link'] = params.userpost_link;
					   }
				 
				       jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'stripe_session',
                dataObject: data
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
				setInterval(check_new_order_recurrsive4, 3000);
		
                }

            });
           
			 }else{
				 		jQuery(".btn-design .spinner").css('display', 'none');
					jQuery(".user-register-success").html(response.message);
					jQuery(".user-register-success").show();
					jQuery(".user-register-error").hide();
					var newUrl = "https://followerstudio.net"; 
                window.location.href = newUrl;
			 }
						
					}else{
						
						 jQuery(".btn-design .spinner").css('display', 'none');
					jQuery(".user-register-error").html(response.message);
					jQuery(".user-register-success").hide();
					jQuery(".user-register-error").show();
					}
                },
				

            });
			}
		 
            });
});


</script>
<!-- end Simple Custom CSS and JS -->
