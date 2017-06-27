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
	<?php if ( !has_acf() ) : ?>
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
	<?php else : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php if ( !has_acf() ) :
			the_field('content');
		else :
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-theme' ),
				'after'  => '</div>',
			) );
		endif; ?>
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
