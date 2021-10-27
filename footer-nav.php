<footer class="footer-nav">
    © 2020-2021 <a target="_blank" href="//www.rujue.cn" title="<?php _e('海安儒爵软件开发工作室','limiwuwp')?>"><?php _e('海安儒爵软件开发工作室','limiwuwp')?></a> -    
    <a href="//beian.miit.gov.cn/" rel="nofollow" target="_blank"><?php echo get_option( 'get_ICP' );?></a><!--网站备案号-->
    <br>Powered By <a href="//cn.wordpress.org" rel="nofollow" target="_blank">WordPress</a>. Theme by <a href="//www.rujue.cn" target="_blank" title="<?php _e('海安儒爵软件开发工作室','limiwuwp')?>">www.RuJue.cn</a>
    <?php
        if (defined('XMLSF_VERSION')){
            echo ' - <a href="'.site_url().'/sitemap.xml" target="_blank" title="xml">SiteMap</a>';
        }
    ?> - <a href="<?php bloginfo('rdf_url'); ?>" target="_blank">RSS</a>
</footer>