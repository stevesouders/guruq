//<![CDATA[
var $j = jQuery.noConflict();
jQuery(document).ready(function(){
	$j(function() {
		$j("#accordion1").accordion({ 
			header: 'h3', 
			autoHeight: false, 
			collapsible: true, 
			active: false 
		});
		
		$j("#accordion2").accordion({ 
			header: 'h3', 
			autoHeight: false, 
			collapsible: true, 
			active: false 
		});
	});

	$j("#ask-submit").click(function() { 
		$j('form#new_post .error').remove();
		var hasError = false;

		$j('.required1').each(function() {
			if(jQuery.trim($j(this).val()) == '') {
				var labelText = $j(this).prev('label').text();
				$j(this).parent().append('<span class="error">You forgot to enter your '+labelText+'.</span>');
				hasError = true;
			} else if($j(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($j(this).val()))) {
					var labelText = $j(this).prev('label').text();
					$j(this).parent().append('<span class="error">You entered an invalid '+labelText+'.</span>');
					hasError = true;
				}
			}
		});

		if( !hasError ) {
			var dataString = $j("#new_post").serialize();
			//alert (dataString);return false;

			$j('#ask-submit').fadeOut('fast');
			$j('#posttext').fadeOut('fast');
			$j('#postbox h2').fadeOut('fast');

			$j.ajax({
				type: "POST",
				url: "?action=post",
				data: dataString,
				success: function( data, status ) {
					var guruq_key = data;
					$j("#guruq_key").val(data);

					$j('#guruq-email').fadeIn('fast');
				}
			  });

			return false;
		} else {
			return false;
		}
	});


	$j("#email-submit").click(function() { 
		$j('form#new_post .error').remove();
		var hasError = false;

		$j('.required2').each(function() {
			if(jQuery.trim($j(this).val()) == '') {
				var labelText = $j(this).prev('label').text();
				$j(this).parent().append('<span class="error">You forgot to enter your '+labelText+'.</span>');
				hasError = true;
			} else if($j(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($j(this).val()))) {
					var labelText = $j(this).prev('label').text();
					$j(this).parent().append('<span class="error">You entered an invalid '+labelText+'.</span>');
					hasError = true;
				}
			}
		});

		if( !hasError ) {
			var dataString = $j("#new_post").serialize();
			//alert (dataString);return false;

			$j.ajax({
				type: "POST",
				url: "?action=notify",
				data: dataString,
				success: function() {
					$j('#guruq-email').html("<div id='message'></div>");
					$j('#notify-name').fadeOut('fast');
					$j('#notify-email').fadeOut('fast');
					$j('#email-submit').fadeOut('fast');
					
					$j('#ask-submit').fadeIn('fast');
					$j('#posttext').val('');
					$j('#posttext').fadeIn('fast');
					$j('#postbox h2').fadeIn('fast');

				}
			  });

			return false;
		} else {
			return false;
		}
	});

});
//]]>
