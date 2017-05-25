

<!--
AVAILABLE HEADER CLASSES
Default nav height: 96px
.header-md 		= 70px nav height
.header-sm 		= 60px nav height
.noborder 		= remove bottom border (only with transparent use)
.transparent	= transparent header
.translucent	= translucent header
.sticky			= sticky header
.static			= static header
.dark			= dark header
.bottom			= header on bottom
shadow-before-1 = shadow 1 header top
shadow-after-1 	= shadow 1 header bottom
shadow-before-2 = shadow 2 header top
shadow-after-2 	= shadow 2 header bottom
shadow-before-3 = shadow 3 header top
shadow-after-3 	= shadow 3 header bottom
.clearfix		= required for mobile menu, do not remove!
Example Usage:  class="clearfix sticky header-sm transparent noborder"
-->

<div id="header"  class="hidden sticky clearfix "
 <?php
 // if(is_home()):
 //    class="bottom sticky clearfix "
 // else:
 //    class="static clearfix "
 // endif;
 ?>
>
<!-- TOP NAV -->
<header id="topNav">
    <div class="container">

        <!-- Mobile Menu Button -->
        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>

        <!-- BUTTONS -->
        <ul class="pull-right nav nav-pills nav-second-main">

        </ul>
        <!-- Logo -->
        <a class="logo pull-left purple" href="<?=site_url()?>">
            <!-- <img src="<?=get_stylesheet_directory_uri()?>/assets/img/galaxy-crop.png" alt="" /> -->
            <label class="font-jaapokki-sub">IMAGINATION<span>Beyond the limit</span></label>
        </a>
        <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
            <nav class="nav-main">

                <?php
                $_menu = wp_nav_menu(array(
                    'menu' => 'Main menu',
                    'walker' => new xyren_smarty_walker_nav_menu(),
                    'menu_id'=>'topMain',
                    'container' =>'ul',
                    'menu_class' =>'nav nav-pills nav-main has-topBar',
                    'echo' => false
                ));
                echo $_menu;
                ?>
            </nav>
        </div>

    </div>
</header>
</div>
<?php if(!is_home() && !(is_page('services'))): ?>
    <section class="page-header page-header-lg parallax parallax-3" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo/vision-min.jpg'); background-position: 50% 31px;background-size:cover;background-position:top;   margin-top: 67px; ">
        <div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

        <div class="container">
            <?php
            if ( is_search() ):
                ?>
                <h1 class=uppercase>Search Results</h1>
                <?php
            else:
                ?>
                <h1 class=uppercase><?=the_title();?></h1>
                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="<?=site_url();?>">Home</a></li>
                    <li class="active"><?=the_title();?></li>
                </ol><!-- /breadcrumbs -->

                <?php
            endif;
            ?>

        </div>
    </section>
<?php endif; ?>
