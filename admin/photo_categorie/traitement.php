<? 
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php";
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo_categorie.php";
	session_start();
	
	$debug = false;
	if ( $debug ) print_pre( $_POST );
	
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
	if ( !empty( $_POST ) ) {
		
		 // ---- Gestion des catégories --------------------------------------- //
		if ( $_POST[ "mon_action" ] == "gerer" ) {
			$categorie = new Photo_categorie();
			
			// ---- Traitement des données ------------------ //
			if ( 1 == 1 ) {
				$id = $categorie->gererDonnees( $_POST, $debug );
			}
			// ---------------------------------------------- //
			
			// ---- Redirection après traitement ------------ //
			if ( 1 == 1 ) {
				$page_redirection = "/admin/photo_categorie/liste.php";
				
				if ( $debug ) echo "Redirection vers " . $page_redirection;
				else header( "Location: " . $page_redirection );
				exit();
			}
			// ---------------------------------------------- //
			
		} 
		// -------------------------------------------------------------------- //
		
	}
	// ------------------------------------------------------------------------- //
	
	
	// ---- GET GET GET -------------------------------------------------------- //
	else if ( $_GET[ "action" ] == 'delete' ) {
		try {
			$categorie = new Photo_categorie();
			$result = $categorie->supprimer( $_GET[ "id" ], $debug );
			
			if ( !$debug ) header( "Location: /admin/photo_categorie/liste.php" );
		} 
		catch (Exception $e) {
			echo 'Erreur contactez votre administrateur <br> :',  $e->getMessage(), "\n";
			$goldbook = null;
			exit();
		}
	}
	// ------------------------------------------------------------------------- //
	
	
	// ---- ERREUR!!! ---------------------------------------------------------- //
	else {
		if ( $debug ) echo "ERREUR!!!";
		else header('Location: /admin/');
	}
	// ------------------------------------------------------------------------- //
?>