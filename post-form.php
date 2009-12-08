<div id="postbox">
<h2>No Luck?</h2>
	<form id="new_post" name="new_post" method="post" action="<?php echo site_url(); ?>/">
		<input type="hidden" name="action" value="post" />
		<?php wp_nonce_field( 'new-post' ); ?>
		<div class="inputarea">
			<div>
				<textarea name="posttext" id="posttext" tabindex="3" rows="3" cols="20"></textarea>
			</div>
			<label class="post-error" for="posttext" id="posttext_error"></label>  
			<div class="postrow">
				<input id="submit" type="submit" tabindex="4" value="Ask" />
			</div>
		</div>
		<div class="clear"></div>
	</form>
</div> <!-- // postbox -->
