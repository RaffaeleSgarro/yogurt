		<footer id="footer">
			<p>
				&copy; <?php echo date("Y") ?>
				<?php bloginfo('name'); ?> - Powered by
				<a href="http://wordpress.org/">WordPress</a> - 
				<a href="<?php bloginfo('rss2_url'); ?>">RSS</a> -
				<a href="<?php echo get_admin_url(); ?>">Admin</a>
			</p>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>

