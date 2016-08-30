<? 
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/ImageManager.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
	session_start();
	
	$debug = false;
	if ( $debug ) print_pre( $_POST );
	
	$photo = new Photo();
	$imageManager = New ImageManager();
	
	// ---- Security ---------------------------------------------------------- //
	if ( !isset( $_SESSION[ "accessGranted" ] ) || !$_SESSION[ "accessGranted" ] ) {
		$result = $storageManager->grantAccess($_POST[ "login" ], $_POST[ "mdp" ]);
		if (!$result){
			header('Location: /admin/?action=error');
		} else {
			$_SESSION[ "accessGranted" ] = true;
		}
	}
	// ------------------------------------------------------------------------ //
	
	
	// ---- Forms processing -------------------------------------------------- //
	if ( $_POST[ "mon_action" ] != '' ) {
		
		// ---- Gestion des photos -------------------------------------------- //
		if ( $_POST[ "mon_action" ] == "gerer" ) {
			if ( $debug ) echo "Traitement des photos...<br>";
			
			// ---- Traitement de la photo ------------------ //
			for ( $i=1; $i<2; $i++ ) {
				$source = $_SERVER[ "DOCUMENT_ROOT" ] . $_POST[ 'url' . $i ];
				if ( $debug ) echo "Source : " . $source . "<br>";
				
				if( strstr( $source, 'uploads' ) ) {
					$source = $_SERVER[ "DOCUMENT_ROOT" ] . $_POST[ 'url' . $i ];
					$filenameDest = $imageManager->fileDestManagement( $source, $_POST[ "id" ] );
					
					// ---- Image NORMALE
					$destination = $_SERVER[ "DOCUMENT_ROOT" ] . '/photos/photo/normale' . $filenameDest;
					if ( $debug ) echo "Destination : " . $destination . "<br>";
					$imageManager->imageResize( $source, $destination, 960, 960, ZEBRA_IMAGE_CROP_CENTER );
					
					// ---- Image VIGNETTE
					$destination = $_SERVER[ "DOCUMENT_ROOT" ] . '/photos/photo/thumbs' . $filenameDest;
					if ( $debug ) echo "Destination : " . $destination . "<br>";
					$imageManager->imageResize( $source, $destination, 192, 145, ZEBRA_IMAGE_CROP_CENTER );
					
					$_POST[ "image" ] = $filenameDest;
				}
			}
			$imageManager =null;
			// ---------------------------------------------- //
			
			// ---- Traitement des données ------------------ //
			if ( 1 == 1 ) {
				$id = $photo->gererDonnees( $_POST, $debug );
			}
			// ---------------------------------------------- //
			
			// ---- Redirection après traitement ------------ //
			if ( 1 == 1 ) {
				
				// ---- Modification... ---- //
				if ( $_POST[ "id" ] != '' ) $page_redirection = "/admin/photo/edition.php?id=" . $id;
				
				// ---- Ajout... ----------- //
				else $page_redirection = "/admin/photo/liste.php";
				
				if ( $debug ) echo "Redirection vers " . $page_redirection;
				else header( "Location: " . $page_redirection );
				exit();
			}
			// ---------------------------------------------- //
			
		} 
		// ------------------------------------------------------------------------ //
		
	}
	// ------------------------------------------------------------------------ //
	
	
	// ---- GET GET GET ------------------------------------------------------- //
	elseif ( $_GET[ "action" ] == 'delete' ) {
		try {
			$photo = new Photo();
			$result = $photo->supprimer( $_GET[ "id" ], $debug );
			
			if ( !$debug ) header( "Location: /admin/photo/liste.php" );
		} 
		catch (Exception $e) {
			echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
			$goldbook = null;
			exit();
		}
	}
	// ------------------------------------------------------------------------ //
	
	
	// ---- ERREUR!!! --------------------------------------------------------- //
	else {
		header('Location: /admin/');
	}
	// ------------------------------------------------------------------------ //
?>