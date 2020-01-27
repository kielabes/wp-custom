<!doctype html>
<html lang="en">
  <head>
    <title>Custom Theme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head();?>
  
  </head>
<body <?php body_class();?>>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation" id="navbar-main">
			<div class="navbar navbar-inverse">
				<div class="container">
					<!-- .navbar-toggle is used as the toggle for collapsed navbar content
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> -->
						<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>	
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

					<div class="navbar-collapse collapse" id="navbarsExample05">
						<?php
						$args = array(
							'theme_location' => 'main-menu',
							'depth'      => 2,
							'container'  => false,
							'menu_class'     => 'nav navbar-nav',
							'walker'     => new Bootstrap_Walker_Nav_Menu()
							);
						if (has_nav_menu('main-menu')) {
							wp_nav_menu($args);
						}
						?>

					</div>
				</div>
			</div>           
		</nav>

</header>