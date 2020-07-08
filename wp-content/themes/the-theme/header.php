<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/8f7e53bb75.js"></script>
    <script>
        var ajax_url = "<?php echo admin_url( 'admin-ajax.php' ); ?>"
    </script>

</head>

<body <?php body_class(); ?>>


    <?php if(is_front_page()){ ?>



    <?php } ?>

    <div class="headerSpacer">
        <!-- Spacer for the header to push elements below the area given. -->
    </div>
    
    <header class="<?php if(is_front_page()){ echo 'homePage'; }; ?> dtopHeader">        
        <div class="container">
            <div class="row"> 
                <div class="col-sm-12">
                    <div class="brandCont">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Screen Point">    
                    </div>
                           
                    <nav class="mainMenu">                    
                        <!-- Menu -->                   
                        <div class="navCont">
                            <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_id' => 'mainMenu', 'menu_class' => 'mainMenu' ) ); ?>   
                        </div>

                    </nav> 
                </div>  
            </div>

        </div>
    </header>
   
    
    <!-- Mobile Menu Toggler -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="brandCont">
                    <div class="mobMenuToggle">
                        <span id="hamburger" class="mm-sticky" style="">
                            <a class="mburger mburger--spin" href="#mobMenu">
                                <b></b>
                                <b></b>
                                <b></b>
                            </a> 
                        </span>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
      
    <header class="mobHeader">
        <!-- Mobile Navigation -->                
        <nav id="mobMenu" class="mobMenu">                   
            <?php wp_nav_menu( array( 'theme_location' => 'mob_menu', 'menu_id' => 'mobMenu', 'menu_class' => 'mobMenu' ) ); ?>
        </nav>
    </header>