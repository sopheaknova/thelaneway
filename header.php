<?php
/**
 * The Header
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js lt-ie9> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<?php if ( ot_get_option('responsive') != 'off' ) : ?>
	<aside id="sidemenu-container">
        <div id="sidemenu">
        <nav class="menu-mobile-container">
        <?php echo sp_mobile_navigation(); ?>
        </nav>
        </div>            	
    </aside>
<?php endif; ?>    
    
    <div id="content-container">
        <header id="header" class="clearfix">
        <div class="container clearfix">
            
            <div id="menu-trigger" class="mobile-menu-trigger left icon-menu"></div>

            <nav id="primary-menu-left-container" class="one-third">
                <?php echo sp_main_left_navigation(); ?>
            </nav><!-- .primary-nav .wrap -->

            <div class="brand one-third" role="banner">
                <?php if( !is_singular() ) echo '<h1>'; else echo '<h2>'; ?>
                
                <a  href="<?php echo home_url() ?>/"  title="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>">
                    <?php if(ot_get_option('custom-logo')) : ?>
                    <img src="<?php echo ot_get_option('custom-logo'); ?>" alt="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" />
                    <?php else: ?>
                    <span><?php bloginfo( 'name' ); ?></span>
                    <?php endif; ?>
                </a>
                
                <?php if( !is_singular() ) echo '</h1>'; else echo '</h2>'; ?>
            </div><!-- end .brand -->

            <nav id="primary-menu-right-container" class="one-third last">
                <?php echo sp_main_right_navigation(); ?>
            </nav><!-- .primary-nav .wrap -->
            
		</div><!-- end .container .clearfix -->
        </header><!-- end #header -->
