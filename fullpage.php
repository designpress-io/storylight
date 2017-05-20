<?php
/*+
* Template Name: Fullpage
* 
* Displaying a full page layout - with no sidebar
*
* @package Storylight
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'components/page/content', 'fullpage' );

			endwhile; // End of the loop.
			?>

		</main>
	</div>
<?php

get_footer();
