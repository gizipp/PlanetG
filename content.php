<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package PlanetG
 * @since PlanetG 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_single() ) { ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php }
			else { ?>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'planetg' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h1>
			<?php } // is_single() ?>
			<?php planetg_posted_on(); ?>
			<?php if ( has_post_thumbnail() && !is_search() ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'planetg' ), the_title_attribute( 'echo=0' ) ) ); ?>">
					<?php the_post_thumbnail( 'post_feature_full_width' ); ?>
				</a>
			<?php } ?>
		</header> <!-- /.entry-header -->

		<?php if ( is_search() ) { // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div> <!-- /.entry-summary -->
		<?php }
		else { ?>
			<div class="entry-content">
				<?php the_content( wp_kses( __( 'Baca Partikel <span class="meta-nav">&rarr;</span>', 'planetg' ), array( 'span' => array( 
					'class' => array() ) ) )
					); ?>
				<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'planetg' ),
					'after' => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after' => '</span>'
				) ); ?>
			</div> <!-- /.entry-content -->
		<?php } ?>

		<footer class="entry-meta">
			<?php if ( is_singular() ) {
				// Only show the tags on the Single Post page
				planetg_entry_meta();
			} ?>
			<?php edit_post_link( esc_html__( 'Edit', 'planetg' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) {
				// If a user has filled out their description and this is a multi-author blog, show their bio
				get_template_part( 'author-bio' );
			} ?>
		</footer> <!-- /.entry-meta -->
	</article> <!-- /#post -->
