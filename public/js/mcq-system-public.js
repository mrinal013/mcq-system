(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	var UserAnswers = [];
	$(document).on('click', '.mcq-system-button', function() {

		$('.mcqarea-wrapper').each(function(){
			var MCQId = $(this).attr('id');
			var MCQAnswer = $(this).find('input').val();
			var UserAnswer = {MCQId , MCQAnswer};
			UserAnswers.push(UserAnswer)
		});
		$.ajax({
			url: ajax_var.url,
			method: "POST",
			data: {
				action: 'mcq_user_response',
				nonce: ajax_var.nonce,
				UserAnswers: UserAnswers
			},
			success: function(response){
				console.log(response)
			}
		});
	});
	
})( jQuery );