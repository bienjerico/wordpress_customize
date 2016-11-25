<?php
/*
  Plugin Name: WP Post Grid
  Plugin URI: http://www.codenovo.com
  Description: Using this free portfolio plugin you can showcase your work in a jquery filtered portfolio system.
  Version: 1.1
  Author: codenovo
  Author URI: http://www.codenovo.com/
  License: GPLv2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'CODENOVO_GRID_SYSTEM_PLUGIN_DIR' ) )
    define( 'CODENOVO_GRID_SYSTEM_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

function codenovo_grid_system_get_version(){
	if (!function_exists( 'get_plugins' ) )
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	$plugin_folder = get_plugins( '/' . plugin_basename( dirname( __FILE__ ) ) );
	$plugin_file = basename( ( __FILE__ ) );
	return $plugin_folder[$plugin_file]['Version'];
}

add_action( 'admin_init', 'theme_custom_option_styles' );
function theme_custom_option_styles() {
    if (isset($_GET['page']) && $_GET['page'] == 'cn-post-grid') {
        wp_register_style( 'codenovo-grid-system-admin', plugins_url( '/' . basename(dirname(__FILE__)) . '/css/grid-system-admin.css'), 'codenovo-grid-system' );
        wp_enqueue_style( 'codenovo-grid-system-admin' );
        wp_register_style( 'codenovo-selectivity-full-min-css', plugins_url( '/' . basename(dirname(__FILE__)) . '/css/selectivity-full.min.css'), 'codenovo-grid-system' );
        wp_enqueue_style( 'codenovo-selectivity-full-min-css' );
        wp_register_script( 'codenovo-selectivity-full-min-js', plugins_url( '/' . basename(dirname(__FILE__)) . '/js/selectivity-full.min.js'), array( 'jquery' ), '0.1.0' );
        wp_enqueue_script( 'codenovo-selectivity-full-min-js' );
    }

}

function codenovo_grid_system_css(){
    wp_enqueue_style( 'cd-grid-system-css',  plugins_url( '/' . basename(dirname(__FILE__)) . '/css/codenovo-grid-system-css.css'));
}
add_action('wp_enqueue_scripts', 'codenovo_grid_system_css');

add_action('admin_enqueue_scripts', 'my_admin_scripts');

function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'cn-post-grid') {
        //echo 1;die;
        wp_enqueue_media();
        wp_enqueue_script( 'media-grid' );
        wp_enqueue_script( 'media' );
    }
}

add_action('admin_menu', 'register_grid_system_submenu_page');

function register_grid_system_submenu_page() {
    add_menu_page( 'Post Grid', 'Post Grid', 'edit_published_posts', 'cn-post-grid', 'cn_post_grid_callback', 'dashicons-grid-view', 82 );
}
require_once CODENOVO_GRID_SYSTEM_PLUGIN_DIR . '/post-grid.php';

function all_publish_post(){
    $term = $_GET['term'];
    global $wpdb;
    $sql = "
		SELECT ID, post_title
		FROM {$wpdb->prefix}posts AS posts
		WHERE posts.post_type ='post'
		AND posts.post_status = 'publish'
		AND posts.post_title LIKE '%".$term."%'
		ORDER BY post_date DESC LIMIT 10
	";
    $result = $wpdb->get_results($sql);
    $items = array();
    $i = 0;
    foreach ( $result as $post ) :
        $items[$i]['id'] = $post->ID;
        $items[$i]['name'] = $post->post_title;
        $i++;
    endforeach;
    echo json_encode($items);
    exit;
}

add_action('wp_ajax_all_publish_post', 'all_publish_post');
add_action('wp_ajax_nopriv_all_publish_post', 'all_publish_post');

function grid_frontend_shortcode(){
    ob_start();
    $args = array(
        'numberposts' => intval(get_option('tc_num_grid')),
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args );
    $gridType = get_option('tc_grid_type');

    $gridType = explode("_", $gridType);

    $typeG = $gridType[0];
    $numOfGrid = $gridType[1];
    $recentPostNo = 0;
    ?>

<?php /*<div id="div-grid-<?php echo $typeG ?>" class="div-grid-wrapper"> */ ?>
<div class="grid-wrapper">
    <div class="grid-container grid-<?php echo $typeG ?>">
    <?php
    for($i = 1; $i <= intval($numOfGrid); $i++){
        $data = get_option('tc_grid'.$i);
        $valArray = json_decode($data);
        $type =$valArray->{"type"};
        switch($type){
            case '1':
                $recentID 	= $recent_posts[$recentPostNo]['ID'];
                $image 	= wp_get_attachment_image_src( get_post_thumbnail_id( $recentID ), 'full' );
                $imageUrl = $image[0];
                $title    	= get_the_title($recentID);
                $link		= get_permalink( $recentID );
                $recentPostNo++;
                break;
            case '2':
                $id 		= $valArray->{"id"};
                $image 		= wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
                $imageUrl 	= $image[0];
                $title	  	= get_the_title( $id );
                $link		= get_permalink( $id );
                break;
            case '3':
                $imageUrl 	= $valArray->{"url"};
                $title	  	= $valArray->{"heading"};
                $link		= $valArray->{"link"};
                break;
        }
        $dataImgAlign = get_option('tc_grid'.$i.'_image-align');
        $imgAlignClass = '';
        switch($dataImgAlign){
            case '1':
                $imgAlignClass = 'align-left';
                break;
            case '2':
                $imgAlignClass = 'align-center';
                break;
            case '3':
                $imgAlignClass = 'align-right';
                break;
        }
        ?>
        <div class="grid-box <?php echo $imgAlignClass; ?> div-grid-type div-grid-type-<?php echo $type; ?>">
            <a href="<?php echo $link; ?>">
                <?php if($imageUrl){ ?>
                <img src="<?php echo $imageUrl; ?>" alt="<?php echo $title; ?>">
                <?php } ?>
            </a>
            <div class="title_grid">
                <a href="<?php echo $link; ?>"><?php echo $title; ?></a>
            </div>
        </div>
        <?php

    }
    ?>
</div></div>
<script>
    jQuery(document).ready(function($){
        var gridWrap = jQuery('.grid-wrapper').width();
        jQuery('.grid-wrapper .grid-container').css('height', (gridWrap/2)+20+'px');
        jQuery( window ).resize(function() {
            var gridWrap = jQuery('.grid-wrapper').width();
            jQuery('.grid-wrapper .grid-container').css('height', (gridWrap/2)+20+'px');
        });
    })
</script>
<?php
    $output = ob_get_contents();
    ob_end_clean();
    return $output;
}
add_shortcode( 'cn_post_grid', 'grid_frontend_shortcode' );
