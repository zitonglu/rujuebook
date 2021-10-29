<?php
/**
 * rujuebook主题基础函数
 *
 * @since 2021-10-27
 * @version 1.0
 * @author zitonglu/910109610@qq.com
 * @copyright rujue.com.cn
 */
// 去除WordPress相关鸡肋
require_once get_parent_theme_file_path('/functions/functions-clearWP.php');
// 给每个RSSfeed里面增加最新文章列表和版权说明
require_once get_parent_theme_file_path('/functions/functions-addFeedText.php');
// 让主题增加识别webp格式图片
require_once get_parent_theme_file_path('/functions/functions-addWebp.php');
// 增加备案号到常规字段里
require_once get_parent_theme_file_path('/functions/functions-addICP.php');
// CDN加速直接输出返回CDN的URL地址
require_once get_parent_theme_file_path('/functions/functions-CDN.php');
// 网站主题相关设置函数
require_once get_parent_theme_file_path('/functions/functions-option.php');
// 增加文章侧栏自定义字段
require_once get_parent_theme_file_path('/functions/functions-addSideInput.php');
// 获取文章下页页面的URL
require_once get_parent_theme_file_path('/functions/functions-getpostslink.php');

//开启缩略图
if(function_exists('add_theme_support')){add_theme_support('post-thumbnails');};

// 开启主题的导航
if(function_exists('register_sidebar')){
    register_nav_menus(array(
    'primary' => __('导航','rujuebook'),
   ));
}
?>