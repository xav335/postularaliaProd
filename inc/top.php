	<header>
		<a href="<?=FACEBOOK_LINK?>" target="_blank" class="facebook" title="Suivez-nous sur Facebook">0</a>
		<div class="logo"><img src="img/logo-madison-piercing.png" alt="logo Madison Piercing" title="Madison Piercing" /></div>
	</header>
	
	<?
	require_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo_categorie.php";
	
	$debug = false;
	$__categorie = new Photo_categorie();
	
	// ---- Liste des catégories ------------------ //
	if ( 1 == 1 ) {
		unset( $recherche );
		$__liste_categorie = $__categorie->getListe( $recherche, $debug );
	}
	// -------------------------------------------- //
	
	?>
	
	<nav>
		<div class="bt-close"></div>
		<ul>
			<li><a href="index.php" title="Accueil">Accueil</a></li>
			<li><a href="le-salon-la-boutique.php" title="Le Salon / La Boutique">Le Salon/La Boutique</a></li>
			<li><a href="l-hygiene.php" title="L'Hygiène">L'Hygiène</a></li>
			<?
			// ---- Affichage de la liste des catégories disponibles ------------------------ //
			if ( !empty( $__liste_categorie ) ) {
				echo "<li>\n";
				echo "	<a title='Galerie Photo'>Galerie Photo</a>\n";
				echo "	<ul>\n";
				
				foreach( $__liste_categorie as $_categorie ) {
					$id = $_categorie[ "id" ];
					$titre = $_categorie[ "titre" ];
					
					echo "		<li id='cat_" . $id . "'><a href='galerie.php?id=" . $id . "' title='Galerie Photo'>" . $titre . "</a></li>\n";
				}
						
				echo "	</ul>\n";
				echo "</li>\n";
			}
			// ------------------------------------------------------------------------------ //
			?>
			<li><a href="nos-tarifs.php" title="Nos Tarifs">Nos Tarifs</a></li>
			<li><a href="faq.php" title="FAQ">FAQ</a></li>
			<li><a href="liens.php" title="Liens">Liens</a></li>
			<li><a href="plan-acces.php" title="Plan d'Accès">Plan d'Accès</a></li>
			<li><a href="contact.php" title="Contact">Contact</a></li>
		</ul>
	</nav>