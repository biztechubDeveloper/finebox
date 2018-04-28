<?php 
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fun
 */


?>
	<article>
	  <div class="art-header">
		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		 <div class="info">Posted on <?php the_time(); ?> in: <a href="<?php the_permalink(); ?>"><?php the_category(); ?></a>
		 </div>
	    </div>
		<div class="art-content">
	<?php the_post_thumbnail(); ?>
<p><?php echo wp_trim_words( get_the_content(), 50, '' ); ?></p>
</div>
<a class="button button02" href="<?php the_permalink(); ?>">MORE</a>
</article>