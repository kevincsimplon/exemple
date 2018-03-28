<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage boekiBio
 * @since boekiBio 1.0
 */

get_header(); ?>
<center>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'boekiBio' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content error-block">
					<h2><?php _e( ' 404 Error ', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'On dirait que rien n a été trouvé à cet endroit. Peut-être essayer une recherche? ', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->
</center>
