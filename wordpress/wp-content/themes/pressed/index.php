<div class="clearfix">
<?php get_header();?>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
			<?php if ( have_posts() ) :while ( have_posts() ) : the posts (); ?>
			<section>
					<a href="<?php the_permalink(); ?>"><h1><?php the_title_artribute(); ?><?h1></a>
					<?php the_content(); ?>
					<!--Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.
					We also make pancakes on the side.-->
			</section>
		</p?php endwhile; else :?>
		<p><?php_e('sorry, no content'); ?></p>
	<?php endif; ?>
		<?php get_sidebar();?>
		</section>
	</div>
<?php get_footer();?>
