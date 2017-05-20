<?php
/*+
* Template Name: Homepage Layout
* 
* Displaying Homepage
*
* @package Storylight
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'components/page/content', 'homepage' );

			endwhile; // End of the loop.
			?>

		</main>
	</div>
<?php

get_footer();
