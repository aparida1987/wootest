<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->
<script type="text/javascript">
(function ($) {

	var getemail2 =  localStorage.getItem("email");

	$('.fcs_input').val(getemail2);
	
	var email = $('.fcs_input').val();

	if(email != ""){
		$('.fcs_form_wrap').css('display','none');
	}else{
		$('.fcs_form_wrap').css('display','block');
	}

	$( document ).on( 'click', '.single_add_to_cart_button', function(e) {
		
		
		var email = $('.fcs_input').val();
		if(email == ""){
			$(".fcs_input").attr("required", "true");
			$("#error_message").html('Please enter email to Get 50% discount now !');
			return false;
		}else{
			
			if (typeof(Storage) !== "undefined") {
			  // Store
			  localStorage.setItem("email", email);
			  //var getemail1 =  localStorage.getItem("email");
			  //alert(getemail);
			  //$('.fcs_input').val(getemail1);
			  
			} else {
				$("#error_message").html('Sorry, your browser does not support Web Storage...');
			  
			}
			$("#error_message").html('');
			return true;
		}

		e.preventDefault();
		
	});
})(jQuery);
</script>
<?php wp_footer(); ?>

</body>
</html>
