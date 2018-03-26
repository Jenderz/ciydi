<?php
/**
 * Admin View: Displaying all LearnPress's add-ons available but haven't installed.
 *
 * @author  ThimPress
 * @package LearnPress/Views
 * @version 3.0.0
 */

defined( 'ABSPATH' ) or exit();
?>

<?php
// get all free Learnpress plugins
$wp_plugins = LP_Plugins_Helper::get_plugins( 'free' );
// get all premium Learnpress plugins
$tp_plugins = LP_Plugins_Helper::get_plugins( 'premium' );

if ( ! ( $wp_plugins || $tp_plugins ) ) {
	_e( 'There is no available add-ons.', 'learnpress' );

	return;
}

$all_plugins = array(
	array(
		'key'   => 'free',
		'title' => __( 'Free add-ons', 'learnpress' ),
		'items' => $wp_plugins,
	),
	array(
		'key'   => 'premium',
		'title' => __( 'Premium add-ons', 'learnpress' ),
		'items' => $tp_plugins,
	)
);

foreach ( $all_plugins as $plugins ) {
	if ( $plugins['items'] ) { ?>
        <h2>
			<?php echo $plugins['title'] . ' (<span>' . sizeof( $plugins['items'] ) . '</span>)'; ?>
        </h2>
        <ul class="addons-browse widefat">
			<?php foreach ( $plugins['items'] as $file => $add_on ) {
				include learn_press_get_admin_view( 'addons/html-loop-plugin' );
			} ?>
        </ul>
		<?php
	}
}
?>



