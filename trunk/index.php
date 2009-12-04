<?php 
guruq_new_post();
get_header();
?>

	<div id="container">
		<div id="content">

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

<?php require_once dirname( __FILE__ ) . '/post-form.php'; ?>
<?php query_posts( 'category_name=' . GURUQ_CAT . '&posts_per_page=20' ); ?>

<script type="text/javascript">
var $j = jQuery.noConflict();
jQuery(document).ready(function(){
	$j(function() {
		$j("#accordion").accordion({ 
			header: 'h3', 
			autoHeight: false, 
			collapsible: true, 
			active: false 
		});
		
	});
});
</script>

<div id="accordion">
<?php while ( have_posts() ) : the_post() ?>

<h3 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
<div>
	<a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark">Permalink</a>
	<div class="entry-date"><?php unset($previousday); printf( __( '%1$s &#8211; %2$s', 'sandbox' ), the_date( '', '', '', false ), get_the_time() ) ?></div>
	<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>
</div>


<?php endwhile; ?>
</div>
			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php //get_sidebar() ?>
<?php get_footer() ?>