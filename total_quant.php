<?php
/**
 * Plugin Name:       Conta total de itens do Woo Commerce
 * Plugin URI:        https://www.selega.com.br
 * Description:       Conta total de itens do Woo Commerce
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Allan Seleguim
 * Author URI:        https://www.selega.com.br
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
?>
<?php
function action_woocommerce_admin_order_totals_after_discount($order_id ) { 
      global $woocommerce;
      $order = wc_get_order( $order_id );
      /* Grab current total number of products */
      //$number_products = $woocommerce->cart->cart_contents_count;
      $number_products =  $order->get_item_count();
      ?>
            <td class="label">Quantidade</td>
            <td width="1%"></td>
            <td class="total">
            <?php echo $number_products;  ?>
            </td>
 <?php };  ?>
<?php
// add the action 
  add_action( 'woocommerce_admin_order_totals_after_discount', 'action_woocommerce_admin_order_totals_after_discount');
?>
