<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/News.php";
	
	$debug = false;
	$news = new News();
	
	// ---- Liste des actualités en ligne ---- //
	$liste_actualite = $news->newsValidGet( $debug );
	
	$tab_mois = Array( "", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre" );
	$affichage_google = "affiche";
?>

<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
	
	<head>
		<title>Posturalia</title>
		<?php include('inc/meta.php'); ?>
	</head>
	
	<body>
		
		<main>
			
			<?php include('inc/header.php'); ?>
			
			<section id="actualite">
				<div class="row">
					<div class="large-6 medium-6 small-12 columns">
						
					</div>
					
					<?
					// ---- Affichage des actualités ---------------------------------- //
					if ( !empty( $liste_actualite ) ) {
						$cpt = 1;
						echo "<div class='large-6 medium-6 small-12 columns'>\n";
						echo "	<div class='actualites'>\n";
						echo "		<h2>Actualité</h2>\n";
						echo "		<div class='swiper-container'>\n";
						echo "			<div class='swiper-wrapper'>\n";
						
						foreach( $liste_actualite as $_actualite ) {
							$id_news = $_actualite[ "id_news" ];
							$contenu = $_actualite[ "contenu" ];
							$mktime_news = getMktime( $_actualite[ "date_news" ] );
							$date_news = date( "d", $mktime_news ) . " " . $tab_mois[ date( "n", $mktime_news ) ] . " " . date( "Y", $mktime_news );
							
							echo "<div class='swiper-slide'>\n";
							echo "	<h3>" . $date_news . "</h3>\n";
							echo "	<p>" . $contenu . "</p>\n";
							echo "</div>\n";
						}
						
						echo "			</div>\n";
						echo "			<div class='swiper-button-next'></div>\n";
						echo "			<div class='swiper-button-prev'></div>\n";
						echo "		</div>\n";
						echo "	</div>\n";
						echo "</div>\n";
					}
					// ---------------------------------------------------------------- //
					?>
					
				</div>
			</section>
			
			<section id="disciplines">
				<h2>
					3<br/>
					disciplines<br/>
					<span>(pilates, stretching postural, yoga)</span>
				</h2>
				<div class="disciplines">
					<div class="row">
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>Pilates</h3>
									<p>
										Cette méthode a pour objectif le développement des muscles profonds, l'amélioration de la posture, l'équilibrage musculaire et l'assouplissement articulaire, pour un entretien, une amélioration ou une restauration des fonctions physiques.
									</p>
								</span>
							</div>
						</div>
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>
										Stretching<br/>
										postural
									</h3>
									<p>
										Cette méthode a pour objectif le développement des muscles profonds, l'amélioration de la posture, l'équilibrage musculaire et l'assouplissement articulaire, pour un entretien, une amélioration ou une restauration des fonctions physiques.
									</p>
								</span>
							</div>
						</div>
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>Yoga</h3>
									<p>
										Cette méthode a pour objectif le développement des muscles profonds, l'amélioration de la posture, l'équilibrage musculaire et l'assouplissement articulaire, pour un entretien, une amélioration ou une restauration des fonctions physiques.
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="types-de-cours">
				<h2>
					2<br/>
					types de cours<br/>
					<span>(classique, séminaire)</span>
				</h2>
				<div class="types-de-cours">
					<div class="row">
						<div class="large-6 medium-6 small-12 columns">
							<div class="cours">
								<span>
									<h3>Classique</h3>
									<p>
										Cette méthode a pour objectif le développement des muscles profonds, l'amélioration de la posture, l'équilibrage musculaire et l'assouplissement articulaire, pour un entretien, une amélioration ou une restauration des fonctions physiques.
									</p>
								</span>
							</div>
						</div>
						<div class="large-6 medium-6 small-12 columns">
							<div class="cours">
								<span>
									<h3>
										Séminaire
									</h3>
									<p>
										Cette méthode a pour objectif le développement des muscles profonds, l'amélioration de la posture, l'équilibrage musculaire et l'assouplissement articulaire, pour un entretien, une amélioration ou une restauration des fonctions physiques.
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section id="contact">
				<h2>
					1<br/>
					nouveau souffle<br/>
					<span>(posturalia)</span>
				</h2>
				<div class="row" data-equalizer>
					<div class="large-6 medium-6 small-12 columns" data-equalizer-watch>
						<div class="telephone">05 57 57 57 00</div>
						<div class="horaires">
							<p>
								Lundi - Vendredi - 9h00 à 21h00<br/>
								Samedi - 10h00 à 17h00<br/>
								Dimanche - 10h00 à 14h00
							</p>
						</div>
					</div>
					<div class="large-6 medium-6 small-12 columns" data-equalizer-watch>
						<img src="img/posture.png" alt="" />
					</div>
				</div>
				<div id="map-canvas"></div>
			</section>
			
			<?php include('inc/footer.php'); ?>
			
		</main>
		
		<?php include('inc/scripts.php'); ?>		
		<script>
			$(document).ready(function(){
				$('nav li:nth-child(1)').addClass('active');
			});
		</script>
	</body>
</html>
