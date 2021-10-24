<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<?php include( 'seo.php' ); ?>
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/website.css" rel="stylesheet">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>
<body>
<div class="book">
<div class="book-summary">
	<div id="book-search-input">
		<form action="<?php bloginfo('url'); ?>" method="get">
			<input type="text" name="s" placeholder="搜索">
		</form>
	</div>
	<?php if (get_option('header_logo_image') != '') { ?>
		<style>
	      .sa-logo {
	        background: url('<?php echo get_option('header_logo_image'); ?>') no-repeat;
	        background-size: contain;
	        background-position: 16px center;
	        height: 48px;
	        width: 100%;
	        display: block;
	      }
	    </style>
		<div class="logo">
			<a href="<?php echo get_option('logourl'); ?>" title="" class="sa-logo"></a>
		</div>
	<?php } else { } ?>
	<?php 
		wp_nav_menu( array( 'theme_location'=>'main','container'=>'nav','container_class'=>'navbox','menu_class'=>'summary',  ) );
	?>
	<div class="f_bq"><?php echo '<a class="gitbook-link" target="_blank" href="http://www.2zzt.com/wordbook">本书使用 WordBook 发布</a>'; ?></div>
</div>