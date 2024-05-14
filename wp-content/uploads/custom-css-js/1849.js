<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.getElementById('service-field-select').addEventListener('change', function() {
  var selectedOption = jQuery(this).find('option:selected');
	 var dataType = selectedOption.data('type');

	
	var selectedService = jQuery("#service-field-select").val();
			       jQuery.ajax({
                type: 'POST',
                url:"https://followerstudio.net/wp-admin/admin-ajax.php",
              data: {
                action: 'get_services_options',
                data: selectedService
            },
                success: function(response) {
					
				 jQuery(".qty-field-row").empty();
					jQuery(".qty-field-row").append(response);
					 var qtySelectedValue = jQuery(".quanity-field").val();
					 var jsonObject = JSON.parse(qtySelectedValue);
        			var priceValue = jsonObject.price;
					 jQuery(".price-services-text").html("€"+priceValue);
						if(dataType == "username"){
	   jQuery(".user-name-row").show();
		  jQuery(".post-link-row").hide();
	   }else{
		    jQuery(".post-link-row").show();
		   jQuery(".user-name-row").hide();
	   }
		if(selectedService == "insta-followers-standard"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Instagram de qualité standard du monde entier sur le profil de votre choix");
			
		   }
					
		if(selectedService == "insta-followers-france"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Instagram uniquement francais sur le profil de votre choix");
			
		   }	
					
	if(selectedService == "instagram-like"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des likes Instagram sur le post de votre choix");
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');	
			
		   }
		if(selectedService == "instagram-comment"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des commentaires Instagram sur le post de votre choix");
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
			
		   }	
			if(selectedService == "facebook-followers"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Facebook du monde entier sur le profil de votre choix");
		jQuery(".post-link-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_post_name_field").attr('placeholder', '@nomutilisateur');		
			
		   }	
		if(selectedService == "facebook-like"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des likes Facebook sur le post de votre choix");
			jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');	
		   }	
	if(selectedService == "facebook-page-like"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des likes Facebook sur la page de votre choix");	
	jQuery(".post-link-row label").html("Votre lien de page");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelapage');		
		   }
			if(selectedService == "facebook-comments"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des commentaires Facebook sur le post de votre choix");	
			jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');	
		   }
		if(selectedService == "facebook-page-follower"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Facebook sur la page de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de page");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelapage');		
		   }
					
			if(selectedService == "spotify-followers-fr"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Spotify uniquement francais sur le profil de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de profil");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://lienduprofil');		
		   }
			if(selectedService == "spotify-prenium-play-fr-track-play"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des stream Spotify uniquement francais sur la musique de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de musique");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelamusique');		
		   }	
			if(selectedService == "youTube-followers"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Youtube sur la chaine de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de chaine ");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelachaine');		
		   }
			if(selectedService == "youTube-views"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues Youtube sur la vidéo de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de vidéo");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelavidéo');		
		   }
				if(selectedService == "youTube-likes"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des likes Youtube sur la vidéo de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de vidéo");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelavidéo');		
		   }
			if(selectedService == "youTube-commentaires"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des commentaires Youtube sur la vidéo de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de vidéo");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendelavidéo');		
		   }
		if(selectedService == "tiktok-followers"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés Tiktok sur le compte de votre choix");	
		jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');		
		   }	
		if(selectedService == "tiktok-likes"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des likes Tiktok sur le post de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
		   }				
		if(selectedService == "tiktok-comment-fr"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des commentaires francais Tiktok sur le post de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
		   }
		if(selectedService == "tiktok-live-stream-durant-15min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }
		if(selectedService == "tiktok-live-stream-durant-30min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }	
		if(selectedService == "tiktok-live-stream-durant-60min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }
		if(selectedService == "tiktok-live-stream-durant-90min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }	
		if(selectedService == "tiktok-live-stream-durant-120min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }
	if(selectedService == "tiktok-live-stream-durant-180min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }
			if(selectedService == "tiktok-live-stream-durant-240min"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de live Tiktok sur le live de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de live");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendulive');		
		   }	
			if(selectedService == "x-followers"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés X sur le profil de votre choix");	
		jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');		
		   }
				if(selectedService == "x-followers-crypto"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des abonnés X sur le profil de votre choix");	
		jQuery(".user-name-row label").html("Votre nom d'utilisateur");	
					jQuery(".user_social_name_field").attr('placeholder', '@nomutilisateur');		
		   }	
				if(selectedService == "x-retweet"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des retweets X sur le post de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
		   }	
			if(selectedService == "x-Like"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des likes X sur le post de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
		   }	
			if(selectedService == "x-View"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues X sur le post de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
		   }
		if(selectedService == "x-view-video"){
		   jQuery(".servicetooltip-text").html("En commandant le service suivant, vous recevrez des vues de vidéo X sur le post de votre choix");	
		jQuery(".post-link-row label").html("Votre lien de post");	
					jQuery(".user_post_name_field").attr('placeholder', 'https://liendupost');		
		   }			
					
                }

            });
});</script>
<!-- end Simple Custom CSS and JS -->
