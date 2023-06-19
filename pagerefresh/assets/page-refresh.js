(function($) {
    $(document).ready(function() {
        // Refresh the .auction-price element every 10 seconds
        setInterval(function() {
            $('.auction-price').load(location.href + ' .auction-bid');
        }, 10000);        
		setInterval(function() {
            $('.woocommerce-notices-wrapper').load(location.href + ' .woocommerce-notices-wrapper');
        }, 10000);
		setInterval(function() {
  			$('.auction_form.cart').load(location.href + ' .auction_form.cart');
        }, 10000);
        
    });
})(jQuery);
