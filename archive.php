<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<header class="page-header">
	<h1 class="page-title">
		<?php
			if ( is_day() ) :
				printf( esc_html__( 'Daily Archives: %s', 'mobile-tyre-team' ), get_the_date() );
			elseif ( is_month() ) :
				printf( esc_html__( 'Monthly Archives: %s', 'mobile-tyre-team' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'mobile-tyre-team' ) ) );
			elseif ( is_year() ) :
				printf( esc_html__( 'Yearly Archives: %s', 'mobile-tyre-team' ), get_the_date( _x( 'Y', 'yearly archives date format', 'mobile-tyre-team' ) ) );
			else :
				esc_html_e( 'Blog Archives', 'mobile-tyre-team' );
			endif;
		?>
	</h1>
</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
	// 404.
	get_template_part( 'content', 'none' );
endif;

wp_reset_postdata(); // End of the loop.

get_footer();
