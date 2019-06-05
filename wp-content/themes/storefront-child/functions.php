<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


add_action( 'woocommerce_before_add_to_cart_button', 'action_before_add_to_cart_button' );
function action_before_add_to_cart_button() { ?>

	<div class="fcs_form_wrap" style="">
    <p>Get 50% discount now! Just enter the email</p>
	<input type="text" class="fcs_input" id="fcs_input" value="" placeholder="Your email address" style="border: 1px solid #eee;border-radius: 5px;padding: 5px 6px;display: block;max-width: 250px;margin-bottom: 10px;">
	<span id="error_message" style="color: red;"></span>
    <div class="fcs_btn" style="padding:8px 15px;font-size:16px;background: #222;color: #fff;border-radius: 5px;display: inline-block;margin-bottom: 20px;">Get the discount</div>
</div>

<?php }

add_action('woocommerce_cart_calculate_fees' , 'add_user_discounts');

function add_user_discounts( WC_Cart $cart ){
    
    $discount = $cart->get_subtotal() * 0.5;

    $cart->add_fee( 'Discount 50%', -$discount);
}