<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rebecca_Foster_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rebecca-foster-portfolio' ); ?></a>

	<header id="masthead" class="site-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="site-branding">
                            <?php the_custom_logo(); ?>
                        </div><!-- .site-branding -->
                    </div> <!-- 3 cols -->

                    <div class="col-md-9">
                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rebecca-foster-portfolio' ); ?></button>
                            <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'menu-1',
                                                    'menu_id'        => 'primary-menu',
                                                )
                                            );
                                            ?>
                        </nav><!-- #site-navigation -->
                    </div> <!--9 cols -->
                </div>
                <!--row-->
            </div>
            <!--container -->
        </header><!-- #masthead -->
