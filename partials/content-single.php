<section>
	<div class="container page-content">
		<div class="col-md-6 col-sm-12">

			<div class="heading-title heading-border">
				<h1 class="text-uppercase"><?=the_title()?> <span><?=get_the_date('F Y')?></span></h1>

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
	<div class="col-md-6">
		<?php

		if(is_single() && in_category('projects')):
			$owner = get_post_meta(get_the_ID(),'repo_owner',true);
			$repo = get_post_meta(get_the_ID(),'repo_name',true);
			$site = get_post_meta(get_the_ID(),'repo_site',true);
			if($owner!== FALSE && $repo!== FALSE):
				?>
				<div class="heading-title heading-dotted text-right">
					<h4 class="text-uppercase">Repository <span>Statistics</span></h4>
				</div>
				<!-- HTML -->
				<canvas class="chartjs" id="doughnutChartCanvas" width="547" height="300"></canvas>
				<br>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<a href="https://github.com/<?=$owner?>/<?=$repo?>" class="btn btn-block btn-social btn-github" target="_blank">
							<i class="fa fa-github"></i> View on GitHub
						</a>
						<a href="<?=($site ?: 'https://github.com/' . $owner . '/' . $repo)?>" class="btn btn-block btn-social btn-soundcloud" target="_blank">
							<i class="fa fa-globe"></i> Visit Website
						</a>
					</div>
				</div>
				<?php
			endif;
		endif;
		?>
	</div>
</div>
</section>
<?
get_footer();
