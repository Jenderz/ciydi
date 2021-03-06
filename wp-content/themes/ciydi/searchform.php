<?php
/**
 *
 *  The template for the search form
 *
 *  @package WordPress
 *  @subpackage Materialize
 *  @since Materialize 1.0
 */
?>

<!-- search form -->
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform">
    <fieldset>
        <div id="searchbox">

        	<!-- search input -->
            <input type="text" name="s"  id="keywords" value="<?php _e( 'Buscar' , 'materialize' ); ?>" onfocus="if (this.value == '<?php _e( 'Buscar' , 'materialize' ); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'Buscar' , 'materialize' ); ?>';}">

            <!-- search button -->
            <button type="submit" class="waves-effect waves-light btn orange-ciydi">

            	<!-- button search icon -->
            	<i class="materialize-icon-search-5"></i></button>
        </div>
    </fieldset>
</form>