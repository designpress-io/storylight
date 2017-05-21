<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storylight
 */

?>

	</div>
	
	<section class="footer-area wrap"><!-- possibilité d'utiliser la variable $container-width pour définir une taille/container --> 
    	<?php get_template_part( 'components/footer/site', 'footer_area' ); ?>     
    </section><!-- footer-widgets-area -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>
</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
<?php wp_footer(); ?>

</body>
</html>
