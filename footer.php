<div class="callout callout-dark font-proximanova-reg">
    <div class="container">

        <div class="row">

            <div class="col-md-6"><!-- title + shortdesc -->
                <h3>You can also contact me via Social Media</h3>
                <p>If it's you, I'll respond very very very quickly.</p>

            </div>

            <div class="col-md-6"><!-- button -->
                <p class="text-right">
                    <a href="https://facebook.com/ralphj12" class="social-icon social-icon-dark social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ralphjohngalindo/" class="social-icon social-icon-dark social-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn" target="_blank">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                    <a href="#" class="social-icon social-icon-dark social-skype" data-target="#skype_contact" data-toggle="modal" data-backdrop="false">
                        <i class="icon-skype"></i>
                        <i class="icon-skype"></i>
                    </a>


                    <a href="mailto:ask.ralphjohngalindo@gmail.com" class="social-icon social-icon-dark social-email3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email" target="_blank">
                        <i class="icon-email3"></i>
                        <i class="icon-email3"></i>
                    </a>
                    <a href="https://github.com/ralphjesy12" class="social-icon social-icon-dark social-github" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github" target="_blank">
                        <i class="icon-github-circled"></i>
                        <i class="icon-github-circled"></i>
                    </a>
                    <a href="https://www.instagram.com/ralphjesy12/" class="social-icon social-icon-dark social-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram" target="_blank">
                        <i class="icon-instagram"></i>
                        <i class="icon-instagram"></i>
                    </a>
                </p>
            </div>
            <div class="modal fade" id="skype_contact" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>


                        <div class="modal-body">
                            <div class="text-center">
                                <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
                                <div id="SkypeButton_Call_ralphjohngalindo12_1">
                                    <script type="text/javascript">
                                    Skype.ui({
                                        "name": "chat",
                                        "element": "SkypeButton_Call_ralphjohngalindo12_1",
                                        "participants": ["ralphjohngalindo12"],
                                        "imageColor": "blue",
                                        "imageSize": 32
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<footer>
    <div class="container text-center padding-top-50 font-proximanova-reg">
        <h4>&copy; 2017 Ralph John Galindo. All rights reserved </h4>
        <div class="divider divider-border divider-center"><!-- divider -->
            <a class="scrollTo" href="#top">
                <i class="fa fa-chevron-up"></i>
            </a>

        </div>
        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/me-lookup.png" />
    </div>
</footer>
</div>

<div id="mobile-caution" class="font-jaapokki-reg" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/background-9.jpg)">
    Hey, I am Ralph John Galindo.
    And I'm a Web Developer.
    <br>
    <br>
    <small>I hope you don't mind opening this page on a desktop. Rest assured, you'll experience a better view. </small>See ya!
</div>

<?php if(is_home()):?>
    <div id="ensigna-preloader" >
        <div class="ensigna">
            <span>0</span>
        </div>
    </div>
<?php endif; ?>

<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>
<?php
wp_footer();
global $_footers;
echo $_footers;
?>
<script>var assets = "<?=get_stylesheet_directory_uri();?>";</script>
<script>var themeassets = "<?=get_template_directory_uri();?>";</script>
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
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript" src="<?=get_template_directory_uri();?>/assets/js/contact.js"></script>
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
<?php
if(is_single() && in_category('projects')):
    $owner = get_post_meta(get_the_ID(),'repo_owner',true);
    $repo = get_post_meta(get_the_ID(),'repo_name',true);

    if($owner!== FALSE && $repo!== FALSE):
        do_action('init_gitprojects_stats',[
            'owner' => $owner,
            'repo' => $repo
        ]);
    endif;
endif;
?>
</body>
</html>
