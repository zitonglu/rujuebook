<?php
/**
 * 增加文章侧栏自定义字段
 *
 * @since //www.boke8.net/wordpress-post-type-meta-box.html
 * @version 2.0
 * @package functions.php
 * @author zitonglu/910109610@qq.com
 * @copyright rujue.com.cn
 */
//添加设置区域的函数
function rujuebook_add_source_box(){
    add_meta_box('downURL',__('资源下载','rujuebook'),'rujuebook_add_source','post','side');
};

add_action('add_meta_boxes','rujuebook_add_source_box');//挂上
//显示设置区域的回调函数
function rujuebook_add_source($post,$boxargs){
    // 创建临时隐藏表单，为了安全
    wp_nonce_field('rujuebook_add_source','rujuebook_add_source_nonce');
    // 获取之前存储的值
    $rujuebook_downURL_value = get_post_meta($post->ID,'_rujuebook_downURL',true);
    $rujuebook_downPass_value = get_post_meta($post->ID,'_rujuebook_downPass',true);
    $rujuebook_URL_value = get_post_meta($post->ID,'_rujuebook_URL',true);
    $rujuebook_author_value = get_post_meta($post->ID,'_rujuebook_author',true);
?>
    <label for="rujuebook_downURL"><?php _e('下载网址','rujuebook');?>:</label>
    <input style="width: 100%" type="url" id="rujuebook_downURL" name="rujuebook_downURL" value="<?php echo esc_attr($rujuebook_downURL_value); ?>" placeholder="<?php _e('输入网址，含http','rujuebook');?>">
    <label for="rujuebook_downPass"><?php _e('下载密码','rujuebook');?>:</label>
    <input style="width: 100%" type="text" id="rujuebook_downPass" name="rujuebook_downPass" value="<?php echo esc_attr($rujuebook_downPass_value); ?>" placeholder="<?php _e('下载密码，如果有的话','rujuebook');?>">
    <label for="rujuebook_URL"><?php _e('来源网站','rujuebook');?>:</label>
    <input style="width: 100%" type="url" id="rujuebook_URL" name="rujuebook_URL" value="<?php echo esc_attr($rujuebook_URL_value); ?>" placeholder="<?php _e('输入网址，含http','rujuebook');?>">
    <label for="rujuebook_author"><?php _e('文章作者','rujuebook');?>:</label>
    <input style="width: 100%" type="text" id="rujuebook_author" name="rujuebook_author" value="<?php echo esc_attr($rujuebook_author_value); ?>" placeholder="<?php _e('文章作者','rujuebook');?>">
<?php
}
add_action('save_post','rujuebook_add_source_save_meta_box');//验证保存内容

function rujuebook_add_source_save_meta_box($post_id){
    // 安全检查
    // 检查是否发送了一次性隐藏表单内容（判断是否为第三者模拟提交）
    if(!isset($_POST['rujuebook_add_source_nonce'])){return;}
    // 判断隐藏表单的值与之前是否相同
    if(!wp_verify_nonce($_POST['rujuebook_add_source_nonce'],'rujuebook_add_source')){return;}
    // 判断该用户是否有权限
    if(!current_user_can('edit_post',$post_id)){return;}
    // 判断 Meta Box 是否为空
    if(!isset($_POST['rujuebook_downURL'])){return;}
 
    $rujuebook_downURL_value = sanitize_text_field($_POST['rujuebook_downURL']);
    update_post_meta($post_id,'_rujuebook_downURL',$rujuebook_downURL_value);
    $rujuebook_downPass_value = sanitize_text_field($_POST['rujuebook_downPass']);
    update_post_meta($post_id,'_rujuebook_downPass',$rujuebook_downPass_value);
    $rujuebook_URL_value = sanitize_text_field($_POST['rujuebook_URL']);
    update_post_meta($post_id,'_rujuebook_URL',$rujuebook_URL_value);
    $rujuebook_author_value = sanitize_text_field($_POST['rujuebook_author']);
    update_post_meta($post_id,'_rujuebook_author',$rujuebook_author_value);
}
?>