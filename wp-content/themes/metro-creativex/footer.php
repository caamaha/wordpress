		<div class="left-sidebar sidebar-mobile">			<?php get_sidebar("mobile"); ?>		</div>		<div class="clearfix"></div>		<footer>			<span class="alignleft">&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></span><br\>			<span class="alignright"><a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"><?php echo get_option( 'zh_cn_l10n_icp_num' );?></a></span>			</footer>	<?php wp_footer(); ?>	</body></html>