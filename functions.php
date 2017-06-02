<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

function unhook_thematic_functions() {
    remove_action( 'template_redirect', 'xyren_smarty_search_url_redirect' );
    if (function_exists('w3tc_pgcache_flush')) {
        w3tc_pgcache_flush();
    }
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action( 'init', 'unhook_thematic_functions' );

function backstage_smarty_setup() {

    add_image_size( 'main-image', 600, 400, true ); // Hard Crop Mode
    add_image_size( 'mid-image', 450, 300, true ); // Hard Crop Mode
    add_image_size( 'thumb-image', 150, 99, true ); // Hard Crop Mode
    add_image_size( 'horizontal-image',500,200, true ); // Hard Crop Mode
    add_image_size( 'ratio-image',400,400, false ); // Hard Crop False

}
add_action( 'after_setup_theme', 'backstage_smarty_setup' );

// Overriding Default Wordpress Gallery
function my_gallery_shortcode( $output = '', $atts, $content = false, $tag = false ) {
    $return = $output; // fallback

    // retrieve content of your own gallery function
    $my_result = get_my_gallery_content( $atts );

    // boolean false = empty, see http://php.net/empty
    if( !empty( $my_result ) ) {
        $return = $my_result;
    }

    return $return;
}

add_filter( 'post_gallery', 'my_gallery_shortcode', 10, 4 );



function get_my_gallery_content ( $attr ) {

    global $post;
    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
        unset( $attr['orderby'] );
    }

    $html5 = current_theme_supports( 'html5', 'gallery' );
    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post ? $post->ID : 0,
        'itemtag'    => $html5 ? 'figure'     : 'dl',
        'icontag'    => $html5 ? 'div'        : 'dt',
        'captiontag' => $html5 ? 'figcaption' : 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => '',
        'link'       => '',
    ), $attr, 'gallery'));

    $id = intval($id);
    if ( 'RAND' == $order )
    $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
    return '';

    ob_start();
    ?>
    <div class="masonry-gallery columns-4 margin-bottom-60 clearfix lightbox" data-img-big="1" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
        <?php
        foreach ( $attachments as $id => $attachment ) {
            switch ($attachment->post_mime_type) {
                case 'image/jpeg':
                case 'image/png':
                case 'image/gif':
                    ?>
                    <a class="image-hover" href="<?=(wp_get_attachment_image_src($id,'full')[0])?>">
                        <img src="<?=(wp_get_attachment_image_src($id,'main-image')[0])?>" alt="...">
                    </a>
                    <?php
                    break;

                }

            }
            ?>
        </div>

        <?php

        return ob_get_clean();
    }


    // Adding Github Language Frequency on Projects
    add_action( 'init_gitprojects_stats', function($args){
        if(is_single() && in_category('projects')):
            $owner = $args['owner'];
            $repo = $args['repo'];
            ?>
            <script>
            loadScript('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js', function() {

                var serviceUri = 'https://api.github.com/repos/<?=$owner?>/<?=$repo?>/languages';
                $.ajax({
                    url: serviceUri,
                    method: 'GET',
                    dataType: 'json',
                    success: function (d) {

                        var labels = [];
                        var dataset = [];
                        var bg = [];
                        var colors = [
                            '#f22400',
                            '#e54800',
                            '#d86d00',
                            "#cc9100",
                            "#bfb600",
                            "#b2da00",
                            "#a6ff00",
                        ];

                        if (d.hasOwnProperty('ApacheConf')) {
                            delete d['ApacheConf'];
                        }

                        for (var lang in d) {
                            if (d.hasOwnProperty(lang)) {
                                labels.push(lang);
                                colorhere = colors.shift();
                                dataset.push(d[lang]);
                                bg.push(colorhere);
                                colors.push(colorhere);
                            }
                        }

                        var chart = new Chart(document.getElementById("doughnutChartCanvas"),{
                            type : "doughnut",
                            data : {
                                labels: labels,
                                datasets:[{
                                    label:"Language Statistics",
                                    data:dataset,
                                    backgroundColor: bg
                                }]
                            },
                        });

                    }
                });
            });
            </script>
            <?php
        endif;
    } ,11);


    add_action( 'pre_get_posts', 'projects_no_limit_page' );

    function projects_no_limit_page( $query ) {

        if( $query->is_main_query() && !is_admin() && is_category('projects') ) {
            $query->set( 'posts_per_page', '-1' );
        }

    }
