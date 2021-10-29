<?php
/**
 * 获取下面页面的URL
 *
 * @since 2021-10-29
 * @version 1.0
 * @package functions.php
 * @author xiexudong@rujue.cn
 * @copyright www.rujue.cn
 * @return url
 */
function get_the_next_posts_link($label = null,$max_page = 0) {
    global $paged,$wp_query;
    if (!$max_page)
        $max_page = $wp_query->max_num_pages;
    if (!$paged)
        $paged = 1;
    $nextpage = intval($paged) + 1;
    if (null === $label)
        $label = __('Next Page »');
   if (!is_single() && ($nextpage <= $max_page)) {
        $attr = apply_filters('next_posts_link_attributes','');
        return next_posts($max_page,false) . "\" $attr";
    }
}
function get_the_previous_posts_link($label = null) {
	global $paged;
	if (null === $label)
		$label = __('&laquo; Previous Page');

	if (!is_single() && $paged > 1) {
		$attr = apply_filters('previous_posts_link_attributes','');
		return previous_posts(false) . "\" $attr";
	}
}
?>