<?php
/**
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$email = LP_Emails::instance()->get_current();

if ( ! $email ) {
	return;
}

$order = $email->get_order();
$items = $email->get_order_items_table();

if ( ! $items ) {
	return;
}
?>

<h3 class="order-table-items-heading">
	<?php _e( 'Order summary', 'learnpress' ); ?>
</h3>

<table class="order-details">
    <tr>
        <th><?php _e( 'Order Number', 'learnpress' ); ?></th>
        <td><?php echo $order->get_order_number(); ?></td>
    </tr>
    <tr>
        <th><?php _e( 'Purchase Date', 'learnpress' ); ?></th>
        <td><?php echo $order->get_order_date(); ?></td>
    </tr>
    <tr>
        <th><?php _e( 'Payment Method', 'learnpress' ); ?></th>
        <td><?php echo $order->get_payment_method_title(); ?></td>
    </tr>
    <tr>
        <th><?php _e( 'Status', 'learnpress' ); ?></th>
        <td><?php echo $order->get_order_status_html(); ?></td>
    </tr>
    <tr>
        <th><?php _e( 'User Email', 'learnpress' ); ?></th>
        <td><?php echo $order->get_user_email(); ?></td>
    </tr>
</table>

<table class="order-table-items" cellspacing="0" cellpadding="5">
    <thead>
    <tr>
		<?php do_action( 'learn-press/before-email-order-item-heading', $email, $order ); ?>
        <th class="column-name"><?php _e( 'Course', 'learnpress' ); ?></th>
        <th class="column-quantity"><?php _e( 'Quantity', 'learnpress' ); ?></th>
        <th class="column-number"><?php _e( 'Price', 'learnpress' ); ?></th>
		<?php do_action( 'learn-press/after-email-order-item-heading', $email, $order ); ?>
    </tr>
    </thead>
    <tbody>
	<?php
	foreach ( $items as $item_id => $item ):
		$course = apply_filters( 'learn-press/email-order-item-course', learn_press_get_course( $item['course_id'] ), $item );

		?>
        <tr>
			<?php do_action( 'learn-press/before-email-order-item', $item_id, $item, $email, $order ); ?>
            <td class="column-name">
				<?php echo apply_filters( 'learn-press/email-order-item-name', $item['name'], $item ); ?>
            </td>
            <td class="column-quantity">
				<?php echo apply_filters( 'learn-press/email-order-item-quantity', $item['quantity'], $item ); ?>
            </td>
            <td class="column-number">
				<?php echo apply_filters( 'learn-press/email-order-item-cost', learn_press_format_price( $item['total'], learn_press_get_currency_symbol( $order->get_currency() ) ), $item ); ?>
            </td>
			<?php do_action( 'learn-press/after-email-order-item', $item_id, $item, $email, $order ); ?>
        </tr>

	<?php endforeach; ?>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2" class="column-number"><?php _e( 'Total', 'learnpress' ); ?></td>
        <td class="column-number">
			<?php
			echo $email->get_order_total();
			?>
        </td>
    </tr>
    </tfoot>
</table>