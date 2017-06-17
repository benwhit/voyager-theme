<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voyager_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h4 class="subtitle">
			<?php the_field('subheader'); ?>
		</h4>
		<h1 class="title">
			<?php the_field('title') ?>
		</h1>
		<hr>
		<p class="topic">
			<?php the_field('subtitle'); ?>
		</p>
	</header>

	<div class="entry-content">
		<?php
			the_field('content');

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'voyager-theme' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
