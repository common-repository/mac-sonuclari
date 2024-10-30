<?php 
    /*
    Plugin Name: Maç Sonuçları
    Plugin URI: https://www.macsonuclarim.com
    Description: Canlı Skorları ve Maç Sonuçlarını Sitenizde reklamsız olarak yayınlayın.
    Author: macsonuclari.com
    Version: 1.4
    Author URI: https://www.macsonuclarim.com
    */

add_shortcode('macsonuclari', 'canliskor');


function macsonuclari_eklenti(){
    	add_options_page('Canlı Skor Ayarları', 'Maç Sonuçları', 'manage_options', 'macsonuclari-eklenti', 'ms_plugin_options');
}

add_action('admin_menu','macsonuclari_eklenti');


function ms_plugin_options(){
    	include('infot.php');
}


function canliskor(){
?>
<script type="text/javascript" src="https://www.macsonuclarim.com/mobile/scripts/frame.js"></script>
<?php echo '<div style="z-index:999999;text-align:right;font-size:12px;"><a title="Maç Sonuçları" href="https://www.macsonuclarim.com">Maç Sonuçları</a> & <a title="canlı skor mobil" href="https://itunes.apple.com/app/id1084521855">Canlı Skor</a> ortaklığıyla sunulmaktadır.</div>' . "\n"; ?>

<?php
}


register_activation_hook( __FILE__,'msplugin_activate');
register_deactivation_hook( __FILE__,'msplugin_deactivate');
add_action('admin_init', 'msredirect_redirect');

function msredirect_redirect() {
if (get_option('msredirect_do_activation_redirect', false)) { 
delete_option('msredirect_do_activation_redirect'); 
wp_redirect('../wp-admin/options-general.php?page=macsonuclari-eklenti');
}
}

// Include Files
$files = array(
    '/classes/ms-module',
    '/classes/ms-main',
    '/classes/ms-show',
    '/classes/ms-setting',
    '/includes/admin-notice-helper/admin-notice-helper'
);

foreach ($files as $file) {
    require_once plugin_dir_path( __FILE__ ).$file.'.php';
}
if ( class_exists( 'ms_Main' ) ) {
    ms_Main::get_instance();
 }

?>