<?
/**
 * The template used for displaying page content in page.
 *
 * @package Biasa
 */
?>

<article id="post-<? the_ID(); ?>" <? post_class(); ?>>
	<header class="entry-header">
	  <? the_post_thumbnail(); ?>
		<h1 class="entry-title"><? the_title(); ?></h1>
	</header>

	<div class="entry-content">
	  <? the_content(); ?>
	  <?
	  wp_link_pages(
		  array(
			  'before' => '<div class="page-links">'.__('Pages:', 'biasa'),
			  'after' => '</div>',
		  )
	  );
	  ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
	  <? edit_post_link(__('Edit', 'biasa'), '<span class="edit-link">', '</span>'); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->