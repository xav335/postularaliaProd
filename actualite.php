<?php
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/News.php";
	
	$debug = false;
	$news = new News();
	
	// ---- Liste des actualités en ligne ---- //
	$liste_actualite = $news->newsValidGet( $debug );
?>

<!doctype html>
<html class="no-js" lang="fr" dir="ltr">
	
	<head>
		<title>L'actualité de Posturalia</title>
		<?php include('inc/meta.php'); ?>
	</head>
	
	<body>
		
		<main class="page-actualite">
			
			<?php include('inc/header.php'); ?>
			
			<section id="top-of-page">
				<div class="row">
					<div class="large-12 columns">
						<h2>L'actualité<br/>de Posturalia</h2>
						<p>
						  Retrouvez ici toute l'actualité et les évènements du club.
						</p>
					</div>
				</div>
			</section>
			
			<section id="types-de-cours">
				
				<?php
				// ---- Affichage des actualités ---------------------------------- //
				if ( !empty( $liste_actualite ) ) {
					$cpt = 1;
					echo "<div class='row' data-equalizer>\n";
					
					foreach( $liste_actualite as $_actualite ) {
						$id_news = $_actualite[ "id_news" ];
						$image_vignette = ( $_actualite[ "image1" ] != '' )
							? "/photos/news/thumbs" . $_actualite[ "image1" ]
							: "/img/bg-yoga.jpg";
						
						$image_normale = ( $_actualite[ "image1" ] != '' )
							? "/photos/news/normale" . $_actualite[ "image1" ]
							: "/img/bg-yoga.jpg";
						$date_news = traitement_datetime_affiche( $_actualite[ "date_news" ] );
						
						echo "<div class='large-4 medium-4 small-12 columns' data-equalizer-watch>\n";
						echo "	<div class='image-radius'>\n";
						echo "		<a class='fancybox' href='" . $image_normale . "' title=\"" . $_actualite[ "titre" ] . "\" data-fancybox-legende=\"" . $legende . "\"><img src='" . $image_vignette . "'></a>\n";
						echo "	</div>\n";
						echo "	<h3>" . $_actualite[ "titre" ] . "</h3>\n";
						echo "	<h4>" . $date_news . "</h4>\n";
						echo "	<p>" . $_actualite[ "contenu" ] . "</p>\n";
						echo "</div>\n";
						
						$cpt++;
						if ( $cpt >= 4 ) {
							$cpt = 1;
							echo "</div>\n";
							echo "<div class='row' data-equalizer>\n";
						}
					}
					
					echo "</div>\n";
				}
				// ---------------------------------------------------------------- //
				?>
				
			</section>
			
			<?php include('inc/footer.php'); ?>
			
		</main>
		
		<?php include('inc/scripts.php'); ?>
		
		<script>
			$(document).ready(function(){
				$('nav li:nth-child(4)').addClass('active');
			});
		</script>
	</body>
</html>
