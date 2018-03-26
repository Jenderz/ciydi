<?php
/**
 *
 *  The template for displaying 404 pages (not found)
 *
 *  @package WordPress
 *  @subpackage Materialize
 *  @since Materialize 1.0
 */

get_header(); ?>


<?php
    if( (bool)get_theme_mod( 'mythemes-show-breadcrumbs', true ) ){
?>
        <!-- the breadcrumbs content -->
        <div class="mythemes-page-header">

            <!-- the breadcrumbs container ( align to center ) -->
            <div class="container">
                <div class="row">

                    <div class="col s12">

                        <!-- the breadcrumbs navigation path -->
                        <nav class="mythemes-nav-inline">
                            <ul class="mythemes-menu">

                                <!-- the home link -->
                                <?php echo mythemes_breadcrumbs::home(); ?>

                                <!-- the last arrow from path -->
                                <li></li>
                            </ul>
                        </nav>

                        <!-- the headline -->
                        <h1><?php printf( __( 'Error %s' , 'materialize' ) , number_format_i18n( 404 ) ); ?></h1>
                    </div>

                </div>
            </div>
        </div>
<?php
    }
?>


    <!-- the content -->
    <div class="content">

        <!-- the container ( align to center ) -->
        <div class="container">
            <div class="row">

                <!-- the page content length ( 12 columns )  -->
                <section class="col s12">

                    <!-- the page content -->
                    <div>
                        <h1 class="error-404"><?php echo number_format_i18n( 404 ); ?></h1>
                        <big class="error-404-message"><?php echo materialize_not_found_message(); ?></big>
                        <p class="error-404-description"><?php echo materialize_not_found_description(); ?></p>

                        <!-- the search form -->
                        <div class="error-404-search">
                            <?php get_search_form(); ?>
                        </div>
                    <div>

                </section>

            </div>
        </div><!-- .container -->
    </div><!-- .content -->


<?php get_footer(); ?>
