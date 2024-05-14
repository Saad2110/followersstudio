<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    jQuery('.logged-out-end-step').click(function () {
	var error = false;
		var selectedOption = jQuery(".services-select").find('option:selected');
	 var dataType = selectedOption.data('type');
		if(dataType == "username"){
		   if(jQuery(".user_social_name_field").val() === ""){
		error = true;
		   jQuery(".username-error").css('display','block');
			jQuery(".user_social_name_field").addClass("redborder");
		   }else{
				error = false;
			    jQuery(".username-error").css('display','none');
			jQuery(".user_social_name_field").removeClass("redborder");
			
		   }
		   }
		
		if(dataType == "post"){
		    if(jQuery(".user_post_name_field").val() === ""){
		error = true;
		   jQuery(".post-error").css('display','block');
			jQuery(".user_post_name_field").addClass("redborder");
		   }else{
				error = false;
			    jQuery(".post-error").css('display','none');
			jQuery(".user_post_name_field").removeClass("redborder");
			
		   }
		   }
		
			if(!error){
			
			
			var userselected_name = "";
			var post_link = "";
			
				jQuery(".spinner").css('display', 'block');
			    var selectedCategory = jQuery("input[name='serviceCategory']:checked").val();
			   var service_id =  selectedOption.data('service-id');
			  
			   var user_qty = JSON.parse(jQuery(".quanity-field").val()).quantity;
var service_name = jQuery('.services-select option:selected').text();
			  var service_rate =  JSON.parse(jQuery(".quanity-field").val()).price;
		
			if(dataType == "username"){
				 userselected_name = jQuery(".user_social_name_field").val();
				
			}
			
			if(dataType == "post"){
				post_link = jQuery(".user_post_name_field").val();
			}
			
		
				
			var data = {
                    selectedCategory: selectedCategory,
                    service_id: service_id,
                    user_qty: user_qty,
					service_rate : service_rate,
					service_name : service_name				
                };
			
			if(userselected_name !== ""){
			  data['userselected_name'] = userselected_name;
				
			   }
			
			if(post_link !== ""){
				 data['userpost_link'] = post_link;

			   }
		
				 var encodedParams = encodeURIComponent(JSON.stringify(data));
				 var baseURL = 'https://followerstudio.net/login';
				 var redirectURL = baseURL + '?data=' + encodedParams;
				 window.location.href = redirectURL;
				
				
			}
	
	});
});


</script>
<!-- end Simple Custom CSS and JS -->
