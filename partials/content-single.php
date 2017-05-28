<?php
get_header();
?>

<section>
	<div class="container page-content">
		<div class="col-md-9 col-sm-12">

			<div class="heading-title heading-border">
				<h2 class="size-25"><?=the_title()?> <span><?=get_the_date('F Y')?></span></h2>

				<ul class="list-inline categories nomargin">
					<?php
					$posttags = get_the_tags();
					if ($posttags) {
						foreach($posttags as $tag) {
							?>
							<li><a href="#"><?=$tag->name?></a></li>
							<?php
						}
					}
					?>
				</ul>
			</div>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?php the_ID(); ?>">
				<div class="text-black size-14 entry-content post-<?=get_post_format();?>">
					<div class="dropcop">
						<?php the_content();?>
					</div>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		<?php endwhile; // end of the loop. ?>
	</div>
</div>
</section>
<?
get_footer();
