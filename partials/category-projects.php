<section id="projects">
    <div class="container">
        <div class="heading-title heading-border">
            <h1 class="text-uppercase">Projects</h1>
        </div>
        <ul id="portfolio_filter" class="nav nav-pills margin-bottom-60">
            <li class="filter active"><a data-filter="*" href="#">All</a></li>
            <?php
            $posttags = get_terms('post_tag',[
                'hide_empty' => false,
            ]);

            if ($posttags) {
                foreach($posttags as $tag) {
                    ?>
                    <li class="filter"><a data-filter=".<?=$tag->slug?>" href="#"><?=$tag->name?></a></li>
                    <?php
                }
            }
            ?>
        </ul>

        <div id="portfolio" class="clearfix portfolio-isotope portfolio-isotope-4">
            <?php
            if(have_posts()):
                while(have_posts()): the_post();

                $tagclass = implode(' ',array_map(function($tag){
                    return $tag->slug;
                },wp_get_post_tags(get_the_ID())));
                ?>
                <div class="portfolio-item <?=$tagclass?>"><!-- item -->

                    <div class="item-box">
                        <figure>
                            <span class="item-hover">
                                <span class="overlay dark-5"></span>
                                <span class="inner">

                                    <!-- lightbox -->
                                    <a class="ico-rounded lightbox" href="<?=get_the_post_thumbnail_url(null,'full')?>" data-plugin-options='{"type":"image"}'>
                                        <span class="fa fa-plus size-20"></span>
                                    </a>

                                    <!-- details -->
                                    <a class="ico-rounded" href="<?=get_permalink()?>">
                                        <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                    </a>

                                </span>
                            </span>

                            <?php the_post_thumbnail('mid-image',[
                                'class' => 'img-responsive'
                            ]); ?>
                        </figure>

                        <div class="item-box-desc">
                            <h3><a href="<?=get_permalink()?>"><?=xyr_smarty_limit_chars(get_the_title(),80)?></a></h3>
                            <ul class="list-inline categories nomargin">
                                <?php
                                $tags = wp_get_post_tags(get_the_ID());
                                foreach ($tags as $tag){
                                    ?>
                                    <li><a href="#"><?=$tag->name?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->
                <?php
            endwhile;
        endif;
        ?>

    </div>
</div>
</section>
