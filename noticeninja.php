<?php
/*
 * Plugin Name:       Notice Ninja
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Showing information to visitors as a notice
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mohammad Sabuj Khan
 * Author URI:        https://sabuj.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       noticeninja
 * Domain Path:       /languages
 */


 function noja_admin_notice_add(){

    global $pagenow;

    if( !(isset($_COOKIE['nn-close'] ) && $_COOKIE['nn-close'] == 1) ){
        if( $pagenow == 'plugins.php'){ 
    ?>
        <div id="noticeninja" class="notice notice-success is-dismissible">
            <h3>This is our heading</h3>
            <p>Hey, here some information for you</p>
            <img src="https://cdn.pixabay.com/photo/2018/06/01/10/40/wordpress-3446166_640.jpg" width="300" alt="">
        </div>

    <?php
        }
    }
 }
 add_action('admin_notices', 'noja_admin_notice_add');

 function noja_scripts_add(){
    wp_enqueue_script('notice-js', plugin_dir_url(__FILE__).'/assets/js/notice-ninja.js', array('jquery'), '', true);
    wp_enqueue_style('notice-css', plugin_dir_url(__FILE__).'/assets/css/custom.css', null, '1.0.0');
 }
 add_action('admin_enqueue_scripts', 'noja_scripts_add');