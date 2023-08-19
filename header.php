<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'mobile-tyre-team' ); ?></a>

<div id="wrapper">
	<header>

		<div class="call-banner d-none" id="callBanner">
			<span><b>Call Us Now:</b> 020 8016 2026</span>
		</div>

		<nav id="header" class="navbar main-header <?php echo esc_attr( "" ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				

				<div class="header-button-holders">
					<a class="btn btn-primary cta">Call Us</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mttMenu" aria-controls="mttMenu" aria-label="<?php esc_attr_e( 'Toggle navigation', 'mobile-tyre-team' ); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M3 6H21M3 12H21M3 18H21" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
				</div>

				<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="mttMenu" aria-labelledby="mttMenuLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="mttMenuLabel">Menu</h5>
						<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
					</div>
					<div class="offcanvas-body">
						<div>

							<?php
								// Loading WordPress Custom Menu (theme_location).
								wp_nav_menu(
									array(
										'menu_class'     => 'navbar-nav me-auto',
										'container'      => '',
										'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
										'walker'         => new WP_Bootstrap_Navwalker(),
										'theme_location' => 'main-menu',
									)
								);

								if ( '1' === $search_enabled ) :
							?>
									<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<div class="input-group">
											<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'mobile-tyre-team' ); ?>" title="<?php esc_attr_e( 'Search', 'mobile-tyre-team' ); ?>" />
											<button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'mobile-tyre-team' ); ?></button>
										</div>
									</form>
							<?php
								endif;
							?>	

							<div class="assistance">
								<h5>Need immediate assistance?</h5>
								<span>Call us now for quotes and callouts.</span>

								<a class="btn btn-primary cta">Call Us</a>
							</div>

						</div>
					</div>
				</div>

			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class=""<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style=""'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
