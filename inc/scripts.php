		<script src="/js/vendor/jquery.js"></script>
		<script src="/js/vendor/what-input.js"></script>
		<script src="/js/vendor/foundation.js"></script>
		<script src="/js/vendor/swiper/js/swiper.min.js"></script>
		<script src="/js/vendor/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox.js?v=2.1.5"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox-media.js?v=1.0.6"></script>
		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnN0jDmzON1NGH7piEq_rrDK17xow1_HI&v=3.exp"></script>
<!-- 		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> -->
		<script>
			
			$(document).ready(function(){
				
				
				// ---- FancyBox -------------------------------------------- //
				$( ".fancybox" ).fancybox({
					beforeShow: function() {
						var legende = $(this).attr( "legende" );
						if ( this.legende ) {
							// New line
							this.title += '<br />';							
							// Récupération et ajout de la légende							
							this.title += legende;
						}
					},
					helpers : {
						title : {
							type: 'inside'
						}
					}  
				});
				// ---------------------------------------------------------- //
				
				// ---- Zone Google Map ------------------------------------- //
				if ( "<?=$affichage_google?>" == "affiche" ) {
					var map;
					function initialize() {
					
						var mapOptions = {
							mapTypeId: google.maps.MapTypeId.ROADMAP,
							mapTypeControl: false,
							zoom: 14,
							zoomControl: true,
							panControl: false,
							streetViewControl: false,
							scaleControl: false,
							scrollwheel: false,
							overviewMapControl: false,
							center: new google.maps.LatLng(43.3106626, -0.3655734)
						};
						
						map = new google.maps.Map(document.getElementById('map-canvas'),
							mapOptions);
						
						var mapStyles = [
							{
								"featureType": "landscape",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "water",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "water",
								"elementType": "labels",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "administrative",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "administrative",
								"elementType": "labels",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "poi",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "road",
								"stylers": [
									{ "visibility": "on" }
								]
							},{
								"featureType": "transit",
								"stylers": [
									{ "visibility": "on" }
								]
							}
						];
						
						map.setOptions({styles: mapStyles});
						
						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(43.3106626, -0.3655734),
							map: map,
							icon: 'img/marker.png',
							title: 'Posturalia'
						});
						 marker.addListener('click', function() {
							 //window.location.href = 'http://tinyurl.com/zsf4gqo';
							 window.open('https://tinyurl.com/y3p7skth','_blank');
							 });
						/*var marker2 = new google.maps.Marker({
								position: new google.maps.LatLng(44.845031, -0.555305),
								map: map,
								icon: 'img/marker.png',
								title: 'Posturalia'
							});
							 marker2.addListener('click', function() {
								 //window.location.href = 'http://tinyurl.com/zsf4gqo';
								 window.open('https://tinyurl.com/yby2x7ly','_blank');
								 });*/
					}
					
					google.maps.event.addDomListener( window, 'load', initialize );
				}
				// ---------------------------------------------------------- //
				
				$(document).foundation();

				var swiper = new Swiper('.swiper-container', {
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					spaceBetween: 0
				});
				
				// ---- Validation du formulaire de newsletter -------------- //
				if ( 1 == 1 ) {
					
					$( "#form_news" ).submit(function() {
						//alert( "validation..." );
						var erreur = 0;
						
						$.ajax({
							type: "POST",
							cache: false,
							url: '/ajax/ajax_newsletter.php?task=inscrire',
							data: $( "#form_news" ).serialize(),
							error: function() { alert( "Une erreur s'est produite..." ); },
							success: function( data ){
								var obj = $.parseJSON( data );
								
								// Tout s'est bien passé!
								if ( !obj.error ) {
									$( "#form_news #email_news" ).val( '' );
									alert( "Votre e-mail a été correctement ajouté à notre base de données." );
								}
								else {
									
								}
								
							}
						});
						
						return false;
					});
				}
				// ---------------------------------------------------------- //
				
			});
			
		</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-59487310-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-59487310-6');
</script>

