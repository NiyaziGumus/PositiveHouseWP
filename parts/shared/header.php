	<nav class="navbar navbar-expand-lg navbar-light bg-secondary sticky-top" id="mainNavbar">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-long-transparent.png" alt="Logo">
			</a>

			<div class="offcanvas offcanvas-start" tabindex="-1" id="primaryNav">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title text-primary" id="offcanvasNavbarLabel">WPBootstrapTheme</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<?php
					wp_nav_menu( [
						'menu'          	=> 'primary',
						'theme_location'	=> 'primary',
						'depth'         	=> 2,
						'container'			=> false,
						'menu_class'    	=> 'navbar-nav justify-content-center pt-3 pe-5 flex-grow-1 fw-semibold',
						'fallback_cb'   	=> '__return_false',
						'walker'         	=> new bootstrap_5_wp_nav_menu_walker()
					] ); 
					?>
					<button id="angebot" type="submit" class="btn btn-primary pb-2 pt-2">
                                    Angebot anfordern
                                </button>
					<!-- <?php get_search_form(); ?> -->
				</div>
			</div>
		</div>
	</nav>
	<header class="video-container">
    <video autoplay loop muted playsinline id="bg-video">
        <source src="<?php echo get_template_directory_uri(); ?>/images/videos/header-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay-content">
        <div class="content-wrapper">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center full-height">
                    <div class="col-md-8">
                        <!-- <h1 class="display-4">Banner</h1> -->
                        <p class="lead fs-1 fw-bold">Die Zukunft der Energie?<br> Gestalten wir gemeinsam.</p>
                        <a href="#your-link" class="btn btn-primary btn-lg fw-bold">Mehr entdecken <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
