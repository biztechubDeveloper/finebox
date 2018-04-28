<?php get_header(); 

?>


		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container zerogrid">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="single.html">Archive</a></li>
					</ul>
				</div>
				<div id="main-content" class="col-2-3">
					<div class="wrap-content">
						<?php if(have_posts() ) : ?>
					       <?php while(have_posts()) : the_post(); ?>
                             <?php get_template_part('templats-parts/content', get_post_format()); ?>
					       <?php endwhile; ?>
						<?php endif; ?>
						
						
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<?php get_footer(); ?>