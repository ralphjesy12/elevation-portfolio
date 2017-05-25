<?php
global $wp_query;
get_header();
?>
<section class="">
    <div class="container">
        <div class="left-content align-left">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <h4><?=number_format($wp_query->found_posts)?> result/s found for: "<?=get_search_query()?>"</h4>
                    <?php
                    if(have_posts()):
                        while ( have_posts() ) : the_post();
                        if(!empty($post->ID)){
                            if(!strcasecmp(get_post_type($post->ID),'post')){
                                ?>
                                <div class="margin-bottom-20 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-md-9 col-sm-9 col-xs-12 cont-episode-details">
                                        <a href="<?=get_the_permalink()?>" title="<?=$post->post_title; ?>" class="size-17"><strong><?=$post->post_title; ?></strong></a>
                                        <p><?=trim_text(strip_tags($post->post_content), 230)?></p>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12" >
                                        <a href="<?=get_the_permalink()?>">
                                            <figure style="background-image: url('<?=the_post_thumbnail_url()?>');background-size: cover;background-repeat: no-repeat;height: 150px;"></figure>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    endwhile;
                else:
                    ?>
                    <div class="col-md-12"><h3>No results found</h3></div>
                    <?php
                endif;
                ?>
                <div class="pagination"><?=posts_pagination()?></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">

            </div>
        </div>
    </div>
    <br class="clear"/>
</div>
</section>


<?php get_footer();
