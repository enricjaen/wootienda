<div id="footer">
	<center>
		<div id="switch">
			<?php _e( 'Mobile Theme', 'wptouch' ); ?>
			<div>
			<?php wptouch_core_footer_switch_link(); ?>
			</div>
		</div>
	</center>
	
	<p><?php $str = wptouch_custom_footer_msg(); echo stripslashes($str); ?></p>
	<?php if ( bnc_wptouch_can_show_powered_by() ) { ?>
		<p>
			<?php echo sprintf( __( 'Powered by %sWPtouch Mobile WordPress Theme%s', 'wptouch' ), '<a href="http://www.bravenewcode.com/wptouch/">', '</a>' ); ?>
		</p>
	<?php } ?>
	<?php if ( !bnc_wptouch_is_exclusive() ) { wp_footer(); } ?>
</div>

<?php wptouch_get_stats(); 
// WPtouch theme designed and developed by Dale Mugford and Duane Storey @ BraveNewCode.com
// If you modify it for yourself, please keep the link credit *visible* in the footer (and keep the WordPress credit, too!) that's all we ask.
?>
</body>
</html>