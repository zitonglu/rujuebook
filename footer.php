<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/js.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wordbook.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/theme.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/fontsettings.js"></script>
<?php if(is_category()):?>
	<script src="<?php bloginfo('template_directory'); ?>/js/infinitescroll.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/masonry.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/imagesloaded.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/category.js"></script>
<?php endif; ?>

<?php wp_footer();?>
<?php echo get_option('rujuebook_bottom_JQ');?>
</body>
</html>
<!-- 网页打开时间：<?php timer_stop(1); ?>秒 -->
<!-- 调用数据库次数：<?php echo get_num_queries(); ?>次 -->