<script src="<?php _echo_CDN_URL('jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php _echo_CDN_URL('js.js')?>"></script>
<script src="<?php _echo_CDN_URL('wordbook.js')?>"></script>
<script src="<?php _echo_CDN_URL('theme.js')?>"></script>
<script src="<?php _echo_CDN_URL('bootstrap.min.js')?>"></script>
<script src="<?php _echo_CDN_URL('fontsettings.js')?>"></script>
<?php if(is_category() || is_archive() || is_search()):?>
	<script src="<?php _echo_CDN_URL('infinitescroll.min.js')?>"></script>
	<script src="<?php _echo_CDN_URL('masonry.min.js')?>"></script>
	<script src="<?php _echo_CDN_URL('imagesloaded.min.js')?>"></script>
	<script src="<?php _echo_CDN_URL('category.js')?>"></script>
<?php endif; ?>

<?php wp_footer();?>
<?php echo get_option('rujuebook_bottom_JQ');?>
</body>
</html>
<!-- 网页打开时间：<?php timer_stop(1); ?>秒 -->
<!-- 调用数据库次数：<?php echo get_num_queries(); ?>次 -->