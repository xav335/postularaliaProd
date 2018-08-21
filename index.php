<?php
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
					
					<?php
					// ---- Affichage des actualités ---------------------------------- //
					if ( !empty( $liste_actualite ) ) {
						$cpt = 1;
						echo "<div class='large-6 medium-6 small-12 columns'>\n";
						echo "	<div class='actualites'>\n";
						echo "		<h2>Actualité</h2>\n";
						echo "		<div class='swiper-container' onclick=\"location.href='actualite.php'\">\n";
						echo "			<div class='swiper-wrapper'>\n";
						
						foreach( $liste_actualite as $_actualite ) {
							$id_news = $_actualite[ "id_news" ];
							$contenu = $_actualite[ "contenu" ];
							$mktime_news = getMktime( $_actualite[ "date_news" ] );
							$date_news = date( "d", $mktime_news ) . " " . $tab_mois[ date( "n", $mktime_news ) ] . " " . date( "Y", $mktime_news );
							
							echo "<div class='swiper-slide'>\n";
							echo "	<h3>" . $_actualite["titre"] . "</h3>\n";
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
					3<br/><br/><br/>
					disciplines<br/>
					<span>(Activation cardio-vasculaire, Restructuration posturale, Tonification musculaire)</span>
				</h2>
				<div class="disciplines">
					<div class="row">
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>Cardio Training</h3>
									<p>
										Reprendre son souffle grâce à une ambiance décontractée sans complexe. Courir, marcher, pédaler, ramer… oui mais à son rythme.
									</p>
								</span>
							</div>
						</div>
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>
										Restructuration<br/>
										posturale
									</h3>
									<p>
									   Des cours virtuels variés et choisis : Pilates – stretching – yoga, sont les activités de restructuration posturale. Les démonstrations sont virtuelles mais le coach est là.	
									</p>
								</span>
							</div>
						</div>
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>Tonification</br> Musculaire</h3>
									<p>
									   Un matériel équipé du système isocontrol technogym, qui permet de commencer la musculation dans les meilleures conditions. Les plus avertis bénéficient d’une sélection de poste pour aller à l’essentiel. 	
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<section id="contact">
				
				<div class="row" data-equalizer>
					<div class="large-4 medium-4 small-12 columns" data-equalizer-watch>
					   <div class="club">PAU</div>
						<div class="telephone">09 54 11 17 21</div>
						<div class="horaires">
							<p>
							    <strong>horaires adhérents 6h/23h 365j/an</strong><br><br>
							    
                                Accueil visite et inscription: <br>
								lundi 15h/20h<br>  
                                mardi/jeudi 9h30/13h et 15h/20h<br>
                                vendredi 9h30/13h et 15h/19h<br>
                                samedi 9h30/13h
							</p>
						</div>
					</div>
					<div class="large-3 medium-3 small-12 columns" data-equalizer-watch>
						<img src="img/posture.png" alt="" />
					</div>
					<div class="large-4 medium-4 small-12 columns" data-equalizer-watch>
					   <div class="club">BORDEAUX</div>
						<div class="telephone">05 56 32 62 10</div>
						<div class="horaires">
							<p>
							 <br>
							    
                                Accueil, inscription, coaching: <br>
								Lundi-Mardi-Mercredi :<br> 9h30-13h30 / 15h-20h<br>
                                Jeudi : 9h30-13h30 / 16h-20h<br>
                                Vendredi : 9h30-12h30 / 16h-20h<br>
                                Samedi : 9h30-12h30
							</p>
						</div>
				    </div>
				   <div class="large-1 medium-1 small-12 columns" data-equalizer-watch>
				        <a href="<?php echo FACEBOOK_LINK?>" target="_BLANK" ><img src="img/fb.png" alt="" /></a>
				    </div>
				<div id="map-canvas">
				
				</div>
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
