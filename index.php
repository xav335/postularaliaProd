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
		<title>Posturalia - Votre Salle De Sport à Pau</title>
		<?php include('inc/meta.php'); ?>
		<?php include('inc/slideshow2.php'); ?>
	</head>
	
	<body>
		<script src="https://apipro.masalledesport.com/widget/11818/js?configFrom=11818"></script>
		<main>
			
			<?php include('inc/header.php'); ?>
			
			<section id="actualite">
				<div class="row">
					<div class="large-6 medium-6 small-12 columns" style="text-align: center;">
						<h3>Salle de Sport à Pau</h3>
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
<!-- 				<h2> -->
<!-- 					3<br/><br/><br/> -->
<!-- 					disciplines<br/> -->
<!-- 					<span>(Activation cardio-vasculaire, Equilibre posturale, Musculation)</span> -->
<!-- 				</h2> -->
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
										Equilibre<br/>
										posturale
									</h3>
									<p>
									   Des conseils et une prise en charge spécifique pour le "mal&nbsp;au&nbsp;dos" ; les déséquilibres posturaux ; 
									   les <a href="https://www.ameli.fr/assure/sante/themes/tms/comprendre-troubles-musculosquelettiques" target ="blank">T.M.S.</a> et 
									   autres troubles dus à la sédentarité ou à l'hyperactivité. 
									</p>
								</span>
							</div>
						</div>
						<div class="large-4 medium-4 small-12 columns">
							<div class="discipline">
								<span>
									<h3>Musculation</h3>
									<p>
									   Un matériel équipé du système isocontrol technogym, qui permet de commencer la musculation dans les meilleures conditions. 
									   Les plus avertis bénéficient d’une sélection de poste pour aller à l’essentiel. Haltères, bancs, tirages, tractions. 	
									</p>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>
<div class="row">
	<div class="large-12 medium-12 small-12 columns">
        <div  id="demo-1" data-zs-src='["img/post1.jpg", "img/post2.jpg", "img/post3.jpg"]' data-zs-overlay="false" data-zs-bullets="false" data-zs-speed="8000" data-zs-interval="5000" data-zs-switchSpeed="800">
		  <div class="demo-inner-content">
		  </div>
	   </div>
    </div>
 </div>
			
			<section id="contact">	
				<div class="row" data-equalizer>
					<div class="large-6 medium-6 small-12 columns" data-equalizer-watch>
					   <div class="club">PAU</div>
						<div class="telephone"><a href="tel:+33684911950"><b> 06 84 91 19 50</b></a></div>
						<div class="horaires">
							<p><br>
							<strong>horaires adhérents 6h/23h 365j/an</strong><br><br>
							    Accueil visite et inscription:<br><br>
								Du Lundi au Vendredi : 9h30-13h et 15h-20h<br><br>
                                Samedi: 10h-12h<br> 
							</p>
						</div>
					</div>
					<div class="large-6 medium-6 small-12 columns" data-equalizer-watch>
						<img src="img/posture.png" alt="" />
					</div>
					
				<div >
				 <a href="https://tinyurl.com/yy82np4z" target="blank"><img alt="" src="/img/map.jpg"></a>
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
