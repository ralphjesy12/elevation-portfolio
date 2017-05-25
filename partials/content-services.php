
<!-- PARALLAX -->
<section class="parallax parallax-2 padding-top-150" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/img/web-serives.jpg');">
    <div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

    <div class="container text-center">

        <h2 class="font-raleway margin-bottom-10">
            <span class="countTo" data-speed="4000">1377</span> clients
        </h2>

        <h3 class="size-25">They're <span>satisfied</span>. We're <span>happy</span>!</h3>

    </div>

</section>
<!-- /PARALLAX -->

<?php
$services = get_posts([
    'category_name' => 'our-services',
    'posts_per_page' => 6,
]);
$c = 0;
$servicons = [
    'multimedia-production' => 'fa-medium',
    'mobile-app-development' => 'fa-mobile',
    'branding' => 'fa-braille',
    'seo-services-and-social-media-management' => 'fa-language',
    'digital-marketing' => 'fa-handshake-o',
    'website-design-and-development' => 'fa-globe',
];
foreach ($services as $key => $service):
    $c++;
    ?>
    <div class="service-item nopadding hidden">
        <div class="service-box padding-20 text-left text-yellow padding-top-50 padding-bottom-50">
            <i class="fa <?=$servicons[$service->post_name]?> size-25"></i>
            <label class="uppercase text-white size-25 margin-top-20 font-jaapokki-reg height-100"><?=$service->post_title?></label>
            <div class="text-white height-75 text-left"><?=apply_filters( "the_excerpt", get_the_excerpt($service->ID) ? get_the_excerpt($service->ID) : trim_text($service->post_content,100))?></div>
            <a href="<?=get_the_permalink($service->ID)?>" class="text-yellow uppercase font-proximanova">Read more</a>
        </div>
    </div>

    <!-- -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 <?=($c%2==0 ? '' : 'col-md-push-6')?>">
                    <header class="margin-bottom-60">
                        <h2 class="nomargin"><?=$service->post_title?></h2>
                        <p class="font-lato size-20 nomargin">We truly care about our customers</p>
                    </header>
                    <p><?=apply_filters( "the_excerpt", get_the_excerpt($service->ID) ? get_the_excerpt($service->ID) : trim_text($service->post_content,600))?></p>
                    <a href="<?=get_the_permalink($service->ID)?>" class="hidden">
                        Read
                        <!-- /word rotator -->
                        <span class="word-rotator" data-delay="2000">
                            <span class="items">
                                <span>more</span>
                                <span>now</span>
                            </span>
                        </span><!-- /word rotator -->
                        <i class="glyphicon glyphicon-menu-right size-12"></i>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 <?=($c%2==0 ? '' : 'col-md-pull-6')?>">
                    <div class="masonry-gallery columns-3 margin-bottom-60 clearfix lightbox" data-img-big="2" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>

                        <?php
                        $arrayPic = [4,15,6,7,8,9];
                        shuffle($arrayPic);

                        foreach ($arrayPic as $key => $pic) {
                            ?>
                            <a class="image-hover" href="<?=get_template_directory_uri()?>/assets/images/demo/mockups/1200x800/<?=$pic?>-min.jpg">
                                <img src="<?=get_template_directory_uri()?>/assets/images/demo/mockups/600x399/<?=$pic?>-min.jpg" alt="...">
                            </a>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / -->
    <?php
endforeach;
?>
<div id="order-now" class="container-fluid bg-red">
    <div class="container">
        <div class="callout callout-transparent">
            <div class=""><!-- add here .container if needed for fullwidth -->
                <div class="row">

                    <div class="col-md-9 text-white"><!-- title + shortdesc -->
                        <h3 class="text-white">Order Now and <strong>Get 20% OFF</strong></h3>
                        <p class="text-white">Raecenas lacus magna, pretium in congue a, pharetra at lacus imperdiet luctus libero</p>
                    </div>

                    <div class="col-md-3 text-right"><!-- button -->
                        <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-default btn-lg uppercase size-14 bold">Calculate and Order</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
