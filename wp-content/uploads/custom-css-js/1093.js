<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
     jQuery(".profile-update").click(function() {
		 var error = false;
		   var username = jQuery(".profile-username").val();
			
		 	if(username == ""){
	   	error = true;
				jQuery(".name-error").show();
	   		}else{
	   jQuery(".name-error").hide();
	   		}
		
		 
		 if(!error){
			  jQuery(".spinner").show();
			 var profileData = {
                    username: username,
                    profileImage: jQuery("#file-upload")[0],		
                };
					 
			 jQuery.ajax({
                type: 'POST',
                url:"https://stagingdev.website/FollowersStudio/wp-admin/admin-ajax.php",
				  data: {
                action: 'profile_update',
                data: profileData
            },           
                success: function(response) {
			
                },
				

            });
			 
			}
			
		  });
});
</script>
<!-- end Simple Custom CSS and JS -->
