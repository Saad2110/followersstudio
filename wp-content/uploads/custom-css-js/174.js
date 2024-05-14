<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){

		 function check_new_order_recurrsive2() {
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
	 jQuery("input[name='serviceCategory']").on('change', function() {
                // Remove the 'selected' class from all '.icon-columns' divs
                jQuery('.icon-columns').removeClass('hightlightborder');

                // Add the 'selected' class to the parent '.icon-columns' of the selected radio button
                jQuery(this).closest('.icon-columns').addClass('hightlightborder');
            });
	
	jQuery('.step-1').addClass('active');
    jQuery('.next-step').click(function() {
		jQuery(".spinner").css('display', 'block');
				   var currentStep = jQuery(this).closest('.step');
		 var currentStepNumber =jQuery(".step:visible").data("step");
		 var nextStep = currentStep.next('.step');
		if(currentStepNumber == 1){
			
		   var selectedCategory = jQuery("input[name='serviceCategory']:checked").val();
			

				      jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
                data: {
                action: 'getServices',
                category: selectedCategory
            },
                success: function(response) {
			
					jQuery(".spinner").css('display', 'none');
					 var service_select = jQuery('.services-select');
					 var qty_select = jQuery('.quanity-field');
					service_select.empty();
					qty_select.empty();
					 service_select.append(response.services_options);
					qty_select.append(response.qty_field);
				var service_rate =jQuery('.quanity-field option:first').val();
					var parsjson = JSON.parse(service_rate);
	
		  jQuery(".price-services-text").html("€"+parsjson.price);
					
				if(selectedCategory == "Instagram"){
					jQuery(".selectedPlatform").html('<i class="fa fa-instagram"></i><span>Instagram</span>');
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Instagram de qualité standard du monde entier sur le profil de votre choix");
			jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');
			  
				   }
			if(selectedCategory == "Facebook"){
				
				jQuery(".selectedPlatform").html('<i class="fa fa-facebook-square"></i><span>Facebook</span>');
				
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Facebook du monde entier sur le profil de votre choix");   
			jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');	
				   }	
			if(selectedCategory == "Spotify"){
				jQuery(".selectedPlatform").html('<i class="fa fa-spotify"></i><span>Spotify</span>');
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Spotify uniquement francais sur le profil de votre choix");   
					jQuery(".user-name-row label").html("Votre lien de profil");	
					jQuery(".user_social_name_field").attr('placeholder', 'https://lienduprofil');
				   }
		if(selectedCategory == "Youtube"){
			jQuery(".selectedPlatform").html('<i class="fa fa-youtube-play"></i><span>Youtube</span>');
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Youtube sur la chaine de votre choix");   
			jQuery(".user-name-row label").html("Votre lien de chaine");	
					jQuery(".user_social_name_field").attr('placeholder', 'https://liendelachaine');
				   }	
		if(selectedCategory == "TikTok"){
			jQuery(".selectedPlatform").html('<i class="fa-brands fa-tiktok"></i><span>TikTok</span>');
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Tiktok sur le compte de votre choix");  
			jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');
				   }
			if(selectedCategory == "Twitter"){
				jQuery(".selectedPlatform").html('<i class="fa fa-twitter"></i><span>Twitter</span>');
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés X sur le profil de votre choix");   
		jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');		
				   }
			if(selectedCategory == "Telegram"){
				jQuery(".selectedPlatform").html('<i class="fa fa-telegram"></i><span>Telegram</span>');
			  jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des membres Telegram sur le canal de votre choix");   
			jQuery(".user-name-row label").html("Votre lien de télégram");	
					jQuery(".user_social_name_field").attr('placeholder', 'https://lientelegram');			
				   }		
					
					
					  currentStep.hide();
        		nextStep.show();
                },

            });
			   
			  
		   }
 
    });

    jQuery('.prev-step').click(function() {
        var currentStep = jQuery(this).closest('.step');
        var prevStep = currentStep.prev('.step');
        currentStep.hide();
        prevStep.show();
    });
	
	jQuery('.end-step').click(function() {
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
			   var service_id = selectedOption.data('service-id');
			 
			   var user_qty = JSON.parse(jQuery(".quanity-field").val()).quantity;
var service_name = jQuery('.services-select option:selected').text();
			  var service_rate =  JSON.parse(jQuery(".quanity-field").val()).price;
		
			if(dataType == "username"){
				 userselected_name = jQuery(".user_social_name_field").val();
				
			}
			
			if(dataType == "post"){
				post_link = jQuery(".user_post_name_field").val();
			}
			
		
				
			var dataObject = {
                    selectedCategory: selectedCategory,
                    service_id: service_id,
                    user_qty: user_qty,
					service_rate : service_rate,
					service_name : service_name,
				    service_type : dataType
                };
			
			if(userselected_name !== ""){
			  dataObject['userselected_name'] = userselected_name;
				
			   }
			
			if(post_link !== ""){
				 dataObject['userpost_link'] = post_link;

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
				setInterval(check_new_order_recurrsive2, 3000);
		
                },
					   error: function(status, error) {
                        
                        console.error('Error:', status, error);
                    }

            });
		   
		   }
});
	


});
</script>
<!-- end Simple Custom CSS and JS -->
