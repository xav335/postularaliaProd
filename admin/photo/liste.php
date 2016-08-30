<? include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-auth-granted.php" );?>
<? include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );?>
<? 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo_categorie.php";
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
	
	$debug = false;
	$categorie = new Photo_categorie();
	$photo = new Photo();
	
	$id_categorie = ( $_POST[ "id_categorie" ] != '' ) ? $_POST[ "id_categorie" ] : $_GET[ "id_categorie" ];
	
	// ---- Liste des catégories ------------------ //
	if ( 1 == 1 ) {
		unset( $recherche );
		$liste_categorie = $categorie->getListe( $recherche, $debug );
	}
	// -------------------------------------------- //
	
	// ---- Liste des photos pour la catégorie ---- //
	if ( 1 == 1 ) {
		unset( $recherche );
		if ( $id_categorie != '' ) $recherche[ "id_categorie" ] = $id_categorie;
		$liste_photo = $photo->getListe( $recherche, $debug );
	}
	// -------------------------------------------- //

	$message = ( empty( $liste_photo ) ) ? "Aucun enregistrement..." : '';
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<? include_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-meta.php";?>
	</head>
	
	<body>	
		<? require_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/inc-menu.php";?>
	
		<div class="container">
			
			<div class="row">
				<form name="formulaire" class="form-horizontal" method="GET"  action="liste.php" >
				<div class="col-md-2">	
					<label  >&nbsp;Filtrez par catégorie :</label>
				</div>
				<div class="col-md-4">		
					<select name="id_categorie" id="id_categorie">
						<option value="" selected>-- afficher tout --</option>
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
				<div class="col-md-3">		
					<button class="btn btn-success col-sm-3" type="submit" >Filtrer</button>
				</div>
				<br><br>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
	
				<? 
				if ( !empty( $liste_photo ) ) {
					$i=0;
					
					echo "<table class='table table-hover table-bordered table-condensed table-striped' >\n";
					echo "<thead>\n";
					echo "	<tr>\n";
					echo "		<th class='col-md-2'>Titre</th>\n";
					echo "		<th class='col-md-2'>Catégorie</th>\n";
					echo "		<th class='col-md-5'>Légende</th>\n";
					echo "		<th class='col-md-1'>Photo</th>\n";
					echo "		<th class='col-md-1' colspan='2'>Actions</th>\n";
					echo "	</tr>\n";
					echo "</thead>\n";
					echo "<tbody>\n";
					
					foreach ( $liste_photo as $value ) {
						$i++;
						
						// ---- Chargement de la catégorie associée
						$data = $categorie->load( $value[ "id_categorie" ], false );
						
						$classe_affichage = ( $i % 2 != 0 ) ? "info" : "";
						$legende = couper_correctement( $value[ "legende" ], 50 );
						if ( strlen( $value[ "legende" ] ) > 50 ) $legende .= " ...";
						$image_ok = ( $value[ "image" ] != '' ) ? 'check' : 'vide';
						
						echo "<tr class='" . $classe_affichage . "'>\n";
						echo "	<td>" . $value[ "titre" ] . "</td>\n";
						echo "	<td>" . $data[ 0 ][ "titre" ] . "</td>\n";
						echo "	<td>" . $legende . "</td>\n";
						echo "	<td align='center'><img src='../img/" . $image_ok . ".png' width='30' ></td>\n";
						echo "	<td><a href='./edition.php?id=" . $value[ "id" ] . "'><img src='../img/modif.png' width='30' alt='Modifier' ></a></td>\n";
						echo "	<td>\n";
						echo "		<div style='display: none;' class='supp" . $value[ "id" ] . " alert alert-warning alert-dismissible fade in' role='alert'>\n";
						echo "			<button type='button' class='close' aria-label='Close' onclick=\"$('.supp" . $value[ "id" ] . "').css('display', 'none');\"><span aria-hidden='true'>×</span></button>\n";
						echo "			<strong>Voulez vous vraiment supprimer ?</strong>\n";
						echo "			<button type='button' class='btn btn-danger' onclick=\"location.href='./traitement.php?reference=news&action=delete&id=" . $value[ "id" ] . "'\">Oui !</button>\n";
						echo "		</div>\n";
						echo "		<img src='../img/del.png' width='20' alt='Supprimer' onclick=\"$('.supp" . $value[ "id" ] . "').css('display', 'block');\">\n";
						echo "	</td>\n";
						echo "</tr>\n";
					}
					
					echo "</tbody>\n";
					echo "</table>\n";
				}
				else echo "<h3>" . $message . "</h3>\n";
				?>

				</div>
			</div>
		</div>
	</body>
</html>


