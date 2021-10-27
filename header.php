<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<?php include('seo.php'); ?>
<link href="<?php bloginfo('template_directory'); ?>/style.css?v=0.1" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/website.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon"/>

<?php echo get_option('rujuebook_top_JQ');?>
<?php wp_head(); ?>
</head>
<body>
<div class="book">
<div class="book-summary">
	<div id="book-search-input">
		<form action="<?php bloginfo('url');?>" method="get">
			<input type="text" name="s" placeholder="<?php _e('搜索您的户型','rujuebook')?>">
		</form>
	</div>
	<?php if (get_option('header_logo_image') != ''):?>
		<style>
	      .sa-logo{
	        background:url('<?php echo get_option('header_logo_image'); ?>') no-repeat;
	        background-size: contain;
	        background-position: 16px center;
	        height: 48px;
	        display: block;
	      }
	    </style>
		<div class="logo">
			<a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>" class="sa-logo"></a>
		</div>
	<?php endif ?>
	<?php 
		wp_nav_menu(array('theme_location'=>'primary','container'=>'nav','container_class'=>'navbox','menu_class'=>'summary',));
	?>
</div>