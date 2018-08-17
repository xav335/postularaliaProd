<?php
	//ini_set( 'display_errors', 1 );
	//error_reporting( E_ALL | ~E_DEPRECATED | E_STRICT );
	
	// ---- Définition des constantes du site ------------------------ //
	//echo $_SERVER[ "DOCUMENT_ROOT" ] . "<br>";
	switch( $_SERVER[ "DOCUMENT_ROOT" ] ) {
		
		// ---- Serveur local Franck -------- //
		case "/var/www/posturalia" :
			$localhost = "localhost";
			$dbname = "posturalia";
			$user = "posturalia";
			$mdp = "posturalia";
			break;
		
		// ---- Serveur PRE-PROD ------------ //
		case "/home/web/posturalia" :
			$localhost = "localhost";
			$dbname = "posturalia";
			$user = "posturalia";
			$mdp = "posturalia33";
			break;
		
		default:
		    $localhost = "localhost";
			$dbname = "posturalia";
			$user = "posturalia";
			$mdp = "posturalia33";
		    break;
	}
		
	define( "DBHOST",	$localhost );
	define( "DBNAME",	$dbname );
	define( "DBUSER",	$user );
	define( "DBPASSWD", $mdp );
	
	define( "MAILCUSTOMER", 	"xxx" );
	define( "MAILNAMECUSTOMER", "Posturalia" );
	define( "URLSITEDEFAULT", 	"http://www.posturalia.com/" );
	define( "FACEBOOK_LINK", 	"https://www.facebook.com/PosturaliaBordeaux" );
	define( "DAILYMOTION_LINK", "#" );
	
	// ---- Mail d'envoi
	define( "MAIL_TEST", 	"" ); 	// Si rempli alors cette valeur sera utilisée pour les différents envois de mails
	//define( "MAIL_TEST", 	"web-yBQzxd@mail-tester.com" ); // Tester la qualité du mail (https://www.mail-tester.com)
	define( "MAIL_CONTACT", "contact@posturalia.com" );
	define( "MAIL_CONTACT_BX", "bordeaux@posturalia.com" );
	define( "MAIL_BCC", 	"xav335@hotmail.com,xavier.gonzalez@laposte.net,jav_gonz@yahoo.com" );
?>
