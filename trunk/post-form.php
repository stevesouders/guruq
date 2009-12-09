<div id="postbox">
<h2>No Luck?</h2>
	<form id="new_post" name="new_post" method="post" action="<?php echo site_url(); ?>/">
		<input type="hidden" name="action" id="action" value="post" />
		<?php wp_nonce_field( 'new-post' ); ?>
		<div class="inputarea">
			<label class="hidden" style="display:none;">Question</label><textarea class="required1" name="posttext" id="posttext" tabindex="3" rows="3" cols="20"></textarea>
			<input class="button" name="ask-submit" id="ask-submit" type="submit" tabindex="4" value="Ask" />

			<div id="guruq-email">
				<p>Would you like to be notified when the Guru answers your question?</p>
				<label>Name</label> <input class="required2" type="text" name="notify-name" id="notify-name" value="" tabindex="5" />
				<label>E-mail</label> <input class="required2" type="text" name="notify-email" id="notify-email" value="" tabindex="6" />
				<label>Website</label> <input type="text" name="notify-website" id="notify-website" value="" tabindex="6" />
				<input type="hidden" name="guruq_key" id="guruq_key" value="" /> 
				<input id="email-submit" name="email-submit" type="submit" value="Notify me" tabindex="7" />
			</div>
		</div>
		<div class="clear"></div>
	</form>
</div> <!-- // postbox -->
