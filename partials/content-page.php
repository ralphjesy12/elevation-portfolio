<?php
get_header();
?>

	<section>
		<div class="container page-content">
			<div class="col-md-12">
				<header class="margin-bottom-30">
					<h2 class="section-title"><?=the_title()?></h2>
				</header>
				<?php
						// Start the Loop.
				while ( have_posts() ) : the_post();
				?>
					<article id="post-<?php the_ID(); ?>">
						<div class="text-black size-14 entry-content post-<?=get_post_format();?>">

							<!-- article content -->
							<? the_content();?>
							<!-- /article content -->

							<?
							wp_link_pages( array(
								'before' => '<div class="divider"></div><ul class="pagination pagination-md"><h4>Pages</h4>',
								'after' => '</ul>',
								//'pagelink' => '%'
							) );

						?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</section>
<?
get_footer();
