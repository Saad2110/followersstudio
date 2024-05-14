<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
	 
     jQuery(".change-password-button").click(function() {
		 var error = false;
		 var newpassword_user = jQuery(".change-password").val();
		 var repeat_new_pass_user = jQuery(".change-repeat-password-field").val();
		
		if(newpassword_user == ""){
		   error = true;
			jQuery(".password-error").show();
		   }else{
			jQuery(".password-error").hide();
		   }
		 			
              if( repeat_new_pass_user == ""){
				  error = true;
					jQuery(".repeat-password-error").show();
				 }else{
					jQuery(".repeat-password-error").hide();
				 }
		 		
			 if( repeat_new_pass_user!= "" && newpassword_user != "" && repeat_new_pass_user != newpassword_user){
				  error = true;
					jQuery(".not-match-password-error").show();
				 }else{
					jQuery(".not-match-password-error").hide();
				 }

		 
		 if(!error){
			  jQuery(".change-password-spinner").show();
			 var userid = jQuery(".user-hidden-id").val();
			  	var passwordData = {
                    newpassword_user: newpassword_user,
                    userid: userid,			
                };
		   jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'user_update_password',
                data:  passwordData
            },
                success: function(response) {
					 jQuery(".change-password-spinner").hide();
					if (response.success) {
						jQuery(".error-response").empty();
						jQuery(".success-response").html(response.message);
						window.location.href = "https://followerstudio.net/my-profile/";
					}else{
						jQuery(".success-response").empty();
						jQuery(".error-response").html(response.message);
					
					}
                },
				

            });
			}
		 
            });
});


</script>
<!-- end Simple Custom CSS and JS -->
