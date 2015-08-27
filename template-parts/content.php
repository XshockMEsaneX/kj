<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kj
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_home() && ! is_front_page() ) : ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php kj_posted_on(); ?>
		</div><!-- .entry-meta -->
		<div class="post-header-image">
			<?php echo the_post_thumbnail('post-header-image'); ?>
		</div><!-- .post-header-image -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kj' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kj' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<?php if ( is_home() && ! is_front_page() ) : ?>
	<footer class="entry-footer">
		<?php kj_entry_footer(); ?>
	</footer><!-- .entry-footer -->
<?php endif; ?>
</article><!-- #post-## -->
