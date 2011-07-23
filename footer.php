</div> 
<div id="footer-container">
	<div id="footer">
		<center>
			<hr />
			<?php if ( is_user_logged_in() ) { ?>
				<p>This page took <?php timer_stop(1); ?> seconds of computer labor, and required <?php echo get_num_queries(); ?> questions to produce.<br /></p>
			<?php } else { ?>
				<p>Site Designed by <a href="http://mattrude.com/">Matt Rude</a>. Proudly powered by <a href="http://wordpress.org/" rel="nofollow">WordPress</a>.</p>
			<?php } ?>
		</center>
	</div>
	<!--footer plugin hook-->
	<?php wp_footer(); ?>
</div>
</div>

<!--Closeing tags-->
</div>
</body>
</html>
