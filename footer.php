<?php

?>
<?php if(!is_home()): ?>
    <footer id="footer">
        <div class="copyright">
            <div class="container">
                <ul class="pull-right nomargin list-inline mobile-block">
                    <?php
                    if(!empty(wp_get_nav_menu_items('Footer Menu'))){
                        $footer_menu = [];
                        foreach (wp_get_nav_menu_items('Footer Menu') as $f) {
                            array_push($footer_menu , '<li><a href="'.$f->url.'">'.$f->title.'</a></li>');
                        }
                        print_r(implode('<li>&middot;</li>', $footer_menu));
                    }
                    ?>
                </ul>
                &copy; 2016 Imagination PH. All rights reserved
            </div>
        </div>
    </footer>
<?php endif; ?>
</div>

<div id="ensigna-preloader" >
    <div class="ensigna">
        <span>0</span>
    </div>
</div>

<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>
<?php
wp_footer();
global $_footers;
echo $_footers;
?>
<script>var assets = "<?=get_stylesheet_directory_uri();?>";</script>
<script type="text/javascript" src="<?=get_template_directory_uri();?>/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri();?>/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri();?>/assets/js/view/demo.revolution_slider.js"></script>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/fullPage.js/jquery.fullpage.min.js"></script>
<!-- <script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/fullPage.js/fullpage.scrollHorizontally.limited.min.js"></script> -->
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/fullPage.js/jquery.fullpage.extensions.min.js"></script>
<script src="https://use.fontawesome.com/ff24225d4b.js"></script>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/jquery.preload.min.js"></script>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/main.js"></script>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/js/script.js"></script>
<?php if(!is_user_logged_in()): ?>
    <script>
    $(function(){
        // $('a[href$="accounts"],a[href$="glossary"]').click(function(e){
        // 	e.preventDefault();
        // 	$('#modal-restrict').modal('show');
        // 	return false;
        // });
    });
    </script>
<?php endif;?>
</body>
</html>
