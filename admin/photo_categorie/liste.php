<? include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-auth-granted.php" );?>
<? include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );?>
<? 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo_categorie.php";
	
	$debug = false;
	$categorie = new Photo_categorie();
	
	$id = $_GET[ "id" ];
	
	$btn_creation_categorie = "Créer la catégorie";
	
	// ---- Liste des catégories ------------------ //
	if ( 1 == 1 ) {
		unset( $recherche );
		$liste_categorie = $categorie->getListe( $recherche, $debug );
	}
	// -------------------------------------------- //

	// ---- Chargement d'une catégorie ------------ //
	if ( $_GET[ "id" ] != '' ) {
		$datas = $categorie->load( $id );
		
		if ( !empty( $datas[ 0 ] ) ) {
			$titre = $datas[ 0 ][ "titre" ];
			$btn_creation_categorie = "Modifier la catégorie";
		}
	}
	// -------------------------------------------- //

	if ( empty( $liste_categorie ) ) {
		$message = "Aucun enregistrement...";
	} 
	else {
		$message = '';
	}

?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<? include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-meta.php"; ?>
		
		<style>
			.erreur{
				border:2px solid #CC3300;
			}
		</style>
		
	</head>
	
	<body>	
		<? include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-menu.php"; ?>
		
		<div class="container">
			
			<div class="row">
				
				<!-- Nouvelle catégorie -->
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Choisissez le nom de la catégorie</h3>
						</div>
						<div class="panel-body">
							<form name="formulaire" id="formulaire" class="form-horizontal" method="POST" action="/admin/photo_categorie/traitement.php" >
								<input type="hidden" name="mon_action" id="mon_action" value="gerer">
								<input type="hidden" name="id" id="id" value="<?=$id?>">
								
								<div class="row">
									<div class="row">
										<label class="col-md-3">&nbsp;Nom catégorie :</label>
					      				<input type="text" class="col-md-5" name="titre" id="titre" value="<?=$titre?>">
					      			</div>
								</div>	
								
						      	<div class="row ">	
						      		<div class="col-md-3">&nbsp;</div>	
									<div class="col-md-8">
										<br>
										<a href="#" class="btn btn-info col-sm-3 annuler" >Annuler</a>
										<button class="btn btn-success col-sm-4 submit"><?=$btn_creation_categorie?></button>
									</div>		
								</div>	
							</form>
						</div>
					</div>
				</div>
				
				<form name="form_liste" id="form_liste" class="form-horizontal" method="POST" action="/admin/photo_categorie/traitement.php" >
					<input type="hidden" name="mon_action" id="mon_action" value="">
					<input type="hidden" name="id_categorie" id="id_categorie" value="">
					<input type="hidden" name="ordre_affichage" id="ordre_affichage" value="">
				</form>
				
				<? 
				if ( !empty( $liste_categorie ) ) {
					
					echo "<table class='table table-hover table-bordered table-condensed table-striped' >\n";
					echo "<thead>\n";
					echo "	<tr>\n";
					echo "		<th class='col-md-10'>Liste des catégories</th>\n";
					echo "		<th class='col-md-1' align='center'>Produits</th>\n";
					echo "		<th class='col-md-1' align='center' colspan='2'>Actions</th>\n";
					echo "	</tr>\n";
					echo "</thead>\n";
					echo "<tbody>\n";
					
					foreach ( $liste_categorie as $_categorie ) {
						echo "<tr>\n";
						echo "	<td>" . $_categorie[ "titre" ] . "</td>\n";
						echo "	<td align='center'><a href='/admin/photo/liste.php?id_categorie=" . $_categorie[ "id" ] . "'><img src='/admin/img/eye.png' width='30' title='Voir tous les produits de cette catégorie' ></a></td>\n";
						echo "	<td><a href='/admin/photo_categorie/liste.php?id=" . $_categorie[ "id" ] . "'><img src='/admin/img/modif.png' width='30' alt='Modifier' ></a></td>\n";
						echo "	<td>\n";
						echo "		<div style='display: none;' class='supp" . $_categorie[ "id" ] . " alert alert-warning alert-dismissible fade in' role='alert'>\n";
						echo "			<button type='button' class='close' aria-label='Close' onclick=\"$('.supp" . $_categorie[ "id" ] . "').css('display', 'none');\"><span aria-hidden='true'>×</span></button>\n";
						echo "			<strong>Voulez vous vraiment supprimer ?</strong>\n";
						echo "			<button type='button' class='btn btn-danger' onclick=\"location.href='/admin/photo_categorie/traitement.php?action=delete&id=" . $_categorie[ "id" ] . "'\">Oui !</button>\n";
						echo "	 	</div>\n";
						echo "		<img src='/admin/img/del.png' width='20' alt='Supprimer' onclick=\"$('.supp" . $_categorie[ "id" ] . "').css('display', 'block');\"> \n";
						echo "	</td>\n";
						echo "</tr>\n";
					}
					
					echo "</tbody>\n";
					echo "</table>\n";
				}
				else echo "<div class='col-md-6'><br>" . $message . "</div>\n";
				?>
				
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
		
		<script>
			
			// DOM Ready
			$(function() {
				
				function initialiser() {
					$( "#titre" ).removeClass( "erreur" );
				}
				
				$( ".annuler" ).click(function() {
					//alert( "Annulation..." );
					initialiser();
					
					$( "#mon_action" ).val( 'gerer' );
					$( "#id" ).val( '' );
					$( "#titre" ).val( '' );
					
					return false;
				});
				
				$( ".submit" ).click(function() {
					initialiser();
					
					if ( $.trim( $( "#titre" ).val() ) == '' ) {
						$( "#titre" ).addClass( "erreur" );
					}
					else $( "#formulaire" ).submit();
					
					return false;
				});
				
			});
			
		</script>
		
	</body>
</html>


