<?
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-auth-granted.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo_categorie.php";
	include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
	
	$debug = false;
	$categorie = new Photo_categorie();
	$produit = new Photo();
	
	// ---- Modification ---------------------------- //
	if ( !empty( $_GET ) ) {
		$action = 'modif';
		$result = $produit->load( $_GET[ "id" ] );

		if ( !empty( $result ) ) {
			$titre_page = 	'Catégorie "'. $result[ 0 ][ "titre" ] . '"';
			$id =			$_GET[ "id" ];
			$id_categorie = $result[ 0 ][ "id_categorie" ];
			$titre = 		$result[ 0 ][ "titre" ];
			$legende = 		$result[ 0 ][ "legende" ];
			$img[ 1 ] = 	"/photos/photo/thumbs" . $result[ 0 ][ "image" ];
			$imgval[ 1 ] = 	"/photos/photo/thumbs" . $result[ 0 ][ "image" ];
		}
		else $message = 'Aucun enregistrement';
	} 

	// ---- Ajout d'une rubrique -------------------- //
	else {
		$action = 'add';
		$titre_page = 	'Nouvelle photo';
		$id	=			null;
		$titre = 			null;
		$legende =	null;
		$img[ 1 ] = 	"/img/favicon.png";
		$imgval[ 1 ] = 	"/img/favicon.png";
	}
	
	// ---- Liste des catégories -------------------- //
	if ( 1 == 1 ) {
		unset( $recherche );
		$liste_categorie = $categorie->getListe( $recherche, $debug );
	}
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<? include_once "../inc-meta.php" ; ?>
	</head>
	
	<body>	
		<? require_once "../inc-menu.php" ; ?>
	
		<div class="container">
	
			<div class="row">
				<h3><?=$titre_page?></h3><br>
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<form name="formulaire" id="formulaire" class="form-horizontal" method="POST" action="traitement.php">
						<input type="hidden" name="mon_action" id="mon_action" value="gerer">
						<input type="hidden" name="id" id="id" value="<?=$id?>">
						<input type="hidden" name="num_image" id="num_image" value="">
						
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Catégorie :</label>
							<select name="id_categorie" required>
								<option value="" selected></option>
								<?
								if ( !empty( $liste_categorie ) ) {
									foreach( $liste_categorie as $_categorie ) {
										$selected = ( $id_categorie == $_categorie[ "id" ] ) ? "selected" : "";
										
										echo "<option value='" . $_categorie[ "id" ] . "' " . $selected . ">" . $_categorie[ "titre" ] . "</option>\n";
										
									}
								}
								?>
							</select>
						</div>
						
						<div class="form-group" >
							<label class="col-sm-2" for="titre">Titre :</label>
							<input type="text" class="col-sm-10" name="titre" required value="<?=$titre?>">
						</div>
						
						<div class="form-group">
							<label class="col-sm-2" for="legende">Légende :</label>
							<input type="text" class="col-sm-10" name="legende" value="<?=$legende?>">
						</div>
						<div style="clear:both;"></div>
						
						<div class="form-group"><br>
							<label for="titre">Choisissez la photos </label>
							<input type="hidden" name="idImage" id="idImage" value="">
						</div>	
						
						<?
						for ( $i=1; $i<2; $i++ ) {
							?>
							<div class="col-md-4" style="margin-bottom:20px;">
								<input type="hidden" name="url<?=$i?>" id="url<?=$i?>" value="<?=$imgval[ $i ]?>"><br>
								<a href="javascript:openCustomRoxy('<?=$i?>')"><img src="<?=$img[ $i ]?>" id="customRoxyImage<?=$i?>" style="max-width:200px;"></a>
								<img src="img/del.png" width="20" alt="Supprimer" onclick="clearImage(<?=$i?>)"/>
							</div>	
							<?
						}
						?>
						
			            <div id="roxyCustomPanel" style="display:none;">
							<iframe src="/admin/fileman2/index.html?integration=custom" style="width:100%;height:100%" frameborder="0"></iframe>
						</div>
						
						<div style="clear:both;"></div>
						<a href="./liste.php" class="btn btn-success col-sm-6" class="btn btn-default annuler"> Annuler </a>	
						<button type="submit" class="btn btn-success col-sm-6" class="btn btn-default"> Valider </button>
				  </form>
				  
				</div>
			</div>
		</div>
		
		
		<script type="text/javascript">
			
			tinymce.init({
				selector: "textarea.editme",
				// ===========================================
				// INCLUDE THE PLUGIN
				// ===========================================
				plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen textcolor",
				"insertdatetime media table contextmenu paste jbimages"
				],
									
				// ===========================================
				// PUT PLUGIN'S BUTTON on the toolbar
				// ===========================================
				toolbar: "insertfile undo redo | styleselect | forecolor backcolor | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
				// ===========================================
				// SET RELATIVE_URLS to FALSE (This is required for images to display properly)
				// ===========================================
				// AJOUTE LES URL EN ENTIER decommenter les 2 lignes suivantes
				//document_base_url: "http://dev.bsport.fr",
				//remove_script_host : false,
				relative_urls: false,
				file_browser_callback: RoxyFileBrowser
			});

			function RoxyFileBrowser(field_name, url, type, win) {
				var roxyFileman = '/admin/fileman/index.html';
				if (roxyFileman.indexOf("?") < 0) {   
					roxyFileman += "?type=" + type;  
				}
				else {
					roxyFileman += "&type=" + type;
				}
				roxyFileman += '&input=' + field_name + '&value=' + document.getElementById(field_name).value;
				if(tinyMCE.activeEditor.settings.language){
					roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;
				}
				tinyMCE.activeEditor.windowManager.open({
					file: roxyFileman,
					title: 'Gestionnaire de fichiers',
					width: 850, 
					height: 650,
					resizable: "yes",
					plugins: "media",
					inline: "yes",
					close_previous: "no" 
				}, {   
					window: win,
					input: field_name
				});
				return false; 
			}
			
			function openCustomRoxy(idImage){
				$('#idImage').val(idImage);
			 	$('#roxyCustomPanel').dialog({modal:true, width:875,height:600});
			}
			function closeCustomRoxy(){
			 	$('#roxyCustomPanel').dialog('close');
			}
			
			function clearImage(idImage){
				$( '#customRoxyImage' + idImage ).attr( "src", "/img/favicon.png" );
				$( '#url' + idImage ).val( '' );
			}
			
			$( ".annuler" ).click(function() {
				window.location.href = "./liste.php";
			});
			
			$( ".valider" ).click(function() {
				//alert( "On poste..." );
				
				// ---- Tout va bien --> On poste ---------------------- //
				if ( 1 == 1 ) {
					//$( "#formulaire" ).submit();
					alert( "On poste..." );
				}
				
				return false;
			});
			
		</script>
		
	</body>
</html>


