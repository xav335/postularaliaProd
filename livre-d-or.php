<?php 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Contact.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Goldbook.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	session_start();
	
	$debug = false;
	
	$contact = new Contact();
	$goldbook = new Goldbook();
	
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
			$val[ "adresse"] = '';
			$val[ "cp"] = '';
			$val[ "ville"] = '';
			$val[ "email"] = $_POST[ "email" ];
			$val[ "tel"] = '';
			$val[ "message"] = $_POST[ "message" ];
			$val[ "newsletter"] = $_POST[ "newsletter" ];
			$val[ "fromgoldbook"] = "on";
			if ( $num_contact <= 0 ) $contact->contactAdd( $val, $debug );
			else $contact->contactModify( $val, $debug );
		}
		// ------------------------------------------- //
		
		// ---- Enregistrement du témoignage --------- //
		if ( 1 == 1 ) {
			unset( $val );
			$val[ "datepicker"] = date( "d/m/Y" );
			$val[ "name"] = ucfirst( $_POST[ "prenom" ] ) . " " . ucfirst( substr( $_POST[ "nom" ], 0, 1 ) );
			$val[ "email"] = $_POST[ "email" ];
			$val[ "tel"] = '';
			$val[ "online"] = 'off';
			$val[ "message"] = $_POST[ "message" ];
			$goldbook->goldbookAdd( $val, $debug );
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
			$message .= "La personne suivante vient de déposer un témoignage de votre site :<br>";
			$message .= "Nom : <b>" . $_POST[ "nom" ] . " " . $_POST[ "prenom" ] . "</b><br>";
			$message .= "E-mail : <b>" . $_POST[ "email" ] . "</b><br>";
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
	
	// ---- Liste des témoignages en ligne ------------------- //
	$liste = $goldbook->goldbookValidGet( $debug );
?>

<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
	
	<head>
		<title>Livre d'or Posturalia</title>
		<?php include('inc/meta.php'); ?>
	</head>
	
	<body>
		
		<main class="page-livre-d-or">
			
			<?php include('inc/header.php'); ?>
			
			<section id="top-of-page">
				<div class="row">
					<div class="large-6 medium-6 small-12 columns">
						
					</div>
					<div class="large-6 medium-6 small-12 columns">
						<h2>Livre d'Or<br/>Posturalia</h2>
						<p>
						  Retrouvez ici les témoignages de nos adhérents et n'hésitez à laissez le votre.
						</p>
						<div id="div_success" class="large-12 medium-12 small-12 columns <?=$affichage_success?>">
							<h3>Merci!</h3>
							<p>Votre témoignage a été enregitré avec succès!</p>
						</div>
						
						<div id="div_erreur" class="large-12 medium-12 small-12 columns <?=$affichage_erreur?>">
							<h3>Erreur!</h3>
							<p>
								Une erreur s'est produite lors de l'enregistrement de votre témoignage.<br>
								Veuillez essayer ultérieurement.
							</p>
						</div>
						
						<!-- Inscription Témoignage -->
						<div class="row">
							<form id="formulaire" method="post" action="livre-d-or.php">
								<input type="hidden" name="mon_action" id="mon_action" value="" />
								<input type="hidden" name="as" value="" />
							
								<div class="large-6 medium-6 small-12 columns">
									<input type="text" name="nom" id="nom" placeholder="Votre nom" />
									<input type="text" name="prenom" id="prenom" placeholder="Votre prénom" />
									<input type="email" name="email" id="email" placeholder="Votre e-mail" />
								</div>
								<div class="large-6 medium-6 small-12 columns">
									<textarea name="message" id="message" placeholder="Votre témoignage ici"></textarea>
								</div>
								<div class="large-12 columns">
									<input type="checkbox" name="newsletter" checked />&nbsp;Je souhaite m'inscrire sur la newsletter.
								</div>
								<div class="large-12 columns">
									<button>Ajoutez votre témoignage</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			
			<?php
			// ---- Affichage des témoignages --------------------------------- //
			if ( !empty( $liste ) ) {
				$cpt = 1;
				echo "<section id='middle-of-page'>\n";
				echo "	<div class='row' data-equalizer>\n";
				
				foreach( $liste as $_temoignage ) {
					$nom = $_temoignage[ "nom" ];
					$message = nl2br( $_temoignage[ "message" ] );
					
					echo "<div class='large-4 medium-4 small-12 columns' style='float:left;' data-equalizer-watch>\n";
					echo "	<h4>" . $nom . "</h4>\n";
					echo "	<p>" . $message . "</p>\n";
					echo "</div>\n";
				}
				
				echo "	</div>\n";
				echo "</div>\n";
			}
			// ---------------------------------------------------------------- //
			?>
			
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
