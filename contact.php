<?
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require 'admin/classes/Contact.php';
	require 'admin/classes/utils.php';
	session_start();
	
	$debug = false;
	
	$contact = new Contact();
	
	$mon_action = $_POST[ "mon_action" ];
	$anti_spam = $_POST[ "as" ];
	//print_pre( $_POST );
	
	$affichage_success = "wait";
	$affichage_erreur = "wait";
	
	// ---- Post du formulaire ------------------------------- //
	if ( $mon_action == "poster" && $anti_spam == '' ) {
		if ( $debug ) echo "On poste...<br>";
		
		// ---- Enregistrement dans "contact" -------- //
		if ( 1 == 1 ) {
			$num_contact = $contact->isContact( $_POST[ "email" ], $debug );
			
			unset( $val );
			$val[ "id"] = $num_contact;
			$val[ "firstname"] = $_POST[ "prenom" ];
			$val[ "name"] = $_POST[ "nom" ];
			$val[ "adresse"] = $_POST[ "adresse" ];
			$val[ "cp"] = $_POST[ "cp" ];
			$val[ "ville"] = $_POST[ "ville" ];
			$val[ "email"] = $_POST[ "email" ];
			$val[ "tel"] = $_POST[ "tel" ];
			$val[ "message"] = $_POST[ "message" ];
			$val[ "newsletter"] = $_POST[ "newsletter" ];
			$val[ "fromcontact"] = "on";
			if ( $num_contact <= 0 ) $contact->contactAdd( $val, $debug );
			else $contact->contactModify( $val, $debug );
		}
		// ------------------------------------------- //
		
		// ---- Envoi du mail à l'admin -------------- //
		if ( 1 == 1 ) {
			$entete = "From:" . MAILNAMECUSTOMER . " <" . MAILCUSTOMER . ">\n";
			$entete .= "MIME-version: 1.0\n";
			$entete .= "Content-type: text/html; charset= iso-8859-1\n";
			$entete .= "Bcc:" . MAIL_BCC . "\n";
			//echo "Entete :<br>" . $entete . "<br><br>";
			
			$sujet = utf8_decode( "Prise de contact" );
			
			//$_to = "franck_langleron@hotmail.com";
			$_to = ( MAIL_TEST != '' )
		    	? MAIL_TEST
		    	: MAIL_CONTACT;
			//echo "Envoi du message à : " . $_to . "<br><br>";
			
			$message = "Bonjour,<br><br>";
			$message .= "La personne suivante a rempli le formulaire de contact de votre site :<br>";
			$message .= "Nom : <b>" . $_POST[ "nom" ] . " " . $_POST[ "prenom" ] . "</b><br>";
			$message .= "E-mail / Téléphone : <b>" . $_POST[ "email" ] . " / " . $_POST[ "tel" ] . "</b><br>";
			$message .= "Adresse postale : <b>" . $_POST[ "adresse" ] . ", " . $_POST[ "cp" ] . " " . $_POST[ "ville" ] . "</b><br>";
			$message .= "Message : <br><i>" . nl2br( $_POST[ "message" ] ) . "</i><br><br>";
			$message .= "Cordialement.";
			$message = utf8_decode( $message );
			if ( $debug ) echo $message;
			
			if ( !$debug ) $retour = mail( $_to, $sujet, stripslashes( $message ), $entete );
			//exit();
			
			$affichage_success = ( $retour ) ? "" : "wait";
			$affichage_erreur = ( $retour ) ? "wait" : "";
		}
		// ------------------------------------------- //
		//exit();
		
	}
	// ------------------------------------------------------- //
	
	$affichage_google = "affiche";
?>

<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
	
	<head>
		<title>Contactez Posturalia</title>
		<?php include('inc/meta.php'); ?>
	</head>
	
	<body>
		
		<main class="page-contact">
			
			<?php include('inc/header.php'); ?>
			
			<section id="top-of-page">
				
				<div class="row">
					<div class="large-6 medium-6 small-12 columns">
						
					</div>
					<div class="large-6 medium-6 small-12 columns">
						<h2>Contactez<br/>Posturalia</h2>
						
						<div id="div_success" class="large-12 medium-12 small-12 columns <?=$affichage_success?>">
							<h3>Félicitations!</h3>
							<p>Votre message a été envoyé avec succès!</p>
						</div>
						
						<div id="div_erreur" class="large-12 medium-12 small-12 columns <?=$affichage_erreur?>">
							<h3>Erreur!</h3>
							<p>
								Une erreur s'est produite lors de l'envoi de votre message.<br>
								Veuillez essayer ultérieurement.
							</p>
						</div>
						
						<form id="formulaire" method="post" action="contact.php">
							<input type="hidden" name="mon_action" id="mon_action" value="" />
							<input type="hidden" name="as" value="" />
							
							<div class="row">
								<div class="columns large-6 medium-6 small-12"><label><input type="text" name="nom" id="nom" placeholder="Nom"></label></div>
								<div class="columns large-6 medium-6 small-12"><label><input type="text" name="prenom" id="prenom" placeholder="Prénom"></label></div>
								<div class="columns large-12"><label><input type="text" name="adresse" id="adresse" placeholder="Adresse"></label></div>
								<div class="columns large-4 medium-5 small-12"><label><input type="tel" name="cp" id="cp" placeholder="Code postal"></label></div>
								<div class="columns large-8 medium-7 small-12"><label><input type="text" name="ville" id="ville" placeholder="Ville"></label></div>
								<div class="columns large-6 medium-6 small-12"><label><input type="tel" name="tel" id="tel" placeholder="Téléphone"></label></div>
								<div class="columns large-6 medium-6 small-12"><label><input type="email" name="email" id="email" placeholder="e-mail"></label></div>
								<div class="columns large-12"><label><textarea name="message" id="message" placeholder="Votre message"></textarea></label></div>
								<div class="columns large-12"><label><input type="checkbox" name="newsletter" checked />&nbsp;Je souhaite m'inscrire sur la newsletter.</label></div>
								
								<div class="columns large-12"><button>Envoyer votre message</button></div>
							</div>
						</form>
					</div>
				</div>
			</section>
			
			<section id="contact">
				<div class="row">
					<div class="large-12 columns">
						<div class="telephone">05 57 57 57 00</div>
						<div class="horaires">
							<p>
								Lundi - Vendredi - 9h00 à 21h00<br/>
								Samedi - 10h00 à 17h00<br/>
								Dimanche - 10h00 à 14h00
							</p>
						</div>
					</div>
				</div>
				<div id="map-canvas"></div>
			</section>
			
			<?php include('inc/footer.php'); ?>
			
		</main>
		
		<?php include('inc/scripts.php'); ?>
		<script>
			
			$(document).ready(function(){
				
				$('nav li:nth-child(6)').addClass('active');
				
				// ---- Validation du formulaire ---------------------------- //
				if ( 1 == 1 ) {
					
					function initialiser() {
						$( "#nom" ).removeClass( "erreur" );
						$( "#prenom" ).removeClass( "erreur" );
						$( "#email" ).removeClass( "erreur" );
						$( "#tel" ).removeClass( "erreur" );
						$( "#message" ).removeClass( "erreur" );
					}
					
					function checkEmail( adr ) {
						if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(adr)) {
								return (true);
						}
						return (false);
					}
					
					$( "#formulaire" ).submit(function() {
						//alert( "validation..." );
						var erreur = 0;
						initialiser();
						
						if ( $.trim( $( "#nom" ).val() ) == '' ) {
							erreur = 1;
							$( "#nom" ).addClass( "erreur" );
						}
						
						if ( $.trim( $( "#prenom" ).val() ) == '' ) {
							erreur = 1;
							$( "#prenom" ).addClass( "erreur" );
						}
						
						if ( $.trim( $( "#email" ).val() ) == '' ) {
							erreur = 1;
							$( "#email" ).addClass( "erreur" );
						}
						else if ( !checkEmail( $.trim( $( "#email" ).val() ) ) ) {
							erreur = 1;
							$( "#email" ).addClass( "erreur" );
						}
						
						if ( $.trim( $( "#tel" ).val() ) == '' ) {
							erreur = 1;
							$( "#tel" ).addClass( "erreur" );
						}
						
						if ( $.trim( $( "#message" ).val() ) == '' ) {
							erreur = 1;
							$( "#message" ).addClass( "erreur" );
						}
						
						if ( erreur == 0 ) $( "#mon_action" ).val( "poster" );
						return ( erreur == 0 ) ? true : false;
					});
				}
				// ---------------------------------------------------------- //
				
			});
			
		</script>
	</body>
</html>
