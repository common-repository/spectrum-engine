<?php
/*
Plugin Name: Spectrum Engine
Plugin URI: http://wordpress.org/plugins/spectrum_engine/
Description: Developer tool, allowing you to create an extensive customizer menu and global options from a simple tables
Author: Leszek Pomianowski
Author URI: https://rapiddev.pl/
License: RapidDev License
License URI: https://rapiddev.pl/license
Version: 2.2.4
Text Domain: scc
Domain Path: /languages
*/
/**
 * @package WordPress
 * @subpackage Spectrum
 *
 * @author Leszek Pomianowski
 * @copyright Copyright (c) 2017, RapidDev
 * @link https://www.rapiddev.pl/spectrum
 * @license https://www.rapiddev.pl/license
 */

/* ====================================================================
 * Constant
 * ==================================================================*/
	define('SPECTRUM_VERSION', '2.2.4');
	define('SPECTRUM_ENGINE', plugin_dir_path( __FILE__ ));

/* ====================================================================
 * Define language files
 * ==================================================================*/
	function spectrum_languages(){
		load_theme_textdomain('scc', plugin_dir_path( __FILE__ ).'languages');
	}
	add_action('plugins_loaded', 'spectrum_languages');

/* ====================================================================
 * PHP Version verification
 * ==================================================================*/
	if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
		//5.4.0 for [] type arrays
		//5.6.0 for constant contains arrays
		//7.0.0 for constant contains arrays defined by DEFINE function

/* ====================================================================
 * Load engine file
 * ==================================================================*/
	if (file_exists(plugin_dir_path( __FILE__ ).'application/spectrum_engine.php')) {
		require(plugin_dir_path( __FILE__ ).'application/spectrum_engine.php');
	}else{
		if ( !function_exists('scc_error_engine') ) {
			function scc_error_engine(){
				?>
				<div class="notice notice-error">
					<p>
						<strong><?php _e('CRITICAL ERROR', 'scc') ?>!</strong>
						<br />
						<?php _e('The', 'scc'); ?> <i>Spectrum Engine</i> <?php _e('failed to load the', 'scc') ?> <code>spectrum_engine.php</code> <?php _e('file', 'scc'); ?>
						<br />
						<?php _e('The entire functionality of the plugin was discontinued', 'scc'); ?>
						<br />
						<small><i><?php _e('ERROR ID', 'scc') ?>: 1</i></small>
					</p>
				</div>
				<?php
			}
			add_action( 'admin_notices', 'scc_error_engine' );
		}
	}

/* ====================================================================
 * Create admin page
 * ==================================================================*/
	function spectrum_menu(){
		$spectrum_panel = array(
			'name' => 'Spectrum Engine',
			'version' => ' v.2.1.1',
			'access'=> 'read',
			'slug' => 'spectrum_panel',
		);
		add_submenu_page(
			'options-general.php',
			$spectrum_panel['name'],
			$spectrum_panel['name'],
			$spectrum_panel['access'],
			$spectrum_panel['slug'],
			$spectrum_panel['slug']
		);
	}
	add_action('admin_menu', 'spectrum_menu');
	function spectrum_panel(){
		if (file_exists(plugin_dir_path( __FILE__ ).'application/spectrum_panel.php')) {
			require(plugin_dir_path( __FILE__ ).'application/spectrum_panel.php');
		}else{
			if ( !function_exists('scc_error_engine') ) {
				function scc_error_engine(){
					?>
					<div class="notice notice-error">
						<p>
							<strong><?php _e('CRITICAL ERROR', 'scc') ?>!</strong>
							<br />
							<?php _e('The', 'scc'); ?> <i>Spectrum Engine</i> <?php _e('failed to load the', 'scc') ?> <code>spectrum_panel.php</code> <?php _e('file', 'scc'); ?>
							<br />
							<?php _e('The entire functionality of the plugin was discontinued', 'scc'); ?>
							<br />
							<small><i><?php _e('ERROR ID', 'scc') ?>: 2</i></small>
						</p>
					</div>
					<?php
				}
				add_action( 'admin_notices', 'scc_error_engine' );
			}
		}
	}

/* ====================================================================
 * Admin page styles
 * ==================================================================*/
	global $pagenow;
	if($pagenow == 'options-general.php' && $_GET['page'] == 'spectrum_panel'){
		function spectrum_panel_style(){
			wp_enqueue_style('spectrum-theme', plugins_url('application/wp-admin.css', __FILE__));
		}
		add_action('admin_enqueue_scripts', 'spectrum_panel_style');
	}

/* ====================================================================
 * Plugin links
 * ==================================================================*/
	function spectrum_links($links){
		$links[] = '<a href="'.esc_url(get_admin_url(null,'options-general.php?page=spectrum_panel')).'">'.__('Dashboard').'</a>';
		$links[] = '<a href="'.esc_url(get_admin_url(null,'plugin-editor.php?file=spectrum_engine%2F_options.php&plugin=spectrum_engine%2Fspectrum_engine.php')).'">'.__('Your options', 'scc').'</a>';
		return $links;
	}
	add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'spectrum_links');

/* ====================================================================
 * Define spectrum options
 * ==================================================================*/
	function create_spectrum_options() {
		if (file_exists(plugin_dir_path( __FILE__ ).'_options.php')) {
			include(plugin_dir_path( __FILE__ ).'_options.php');
		}
		function scc_googlefont_size($sizes){
			if (is_array($sizes)) {
				foreach ($sizes as $_k => $size) {
					$return;
					if ($_k < 1) {
						$return .= $size;
					}else{
						$return .= ','.$size;
					}
				}
			}else{
				$return = $sizes;
			}
			return $return;
		}
		$t_o = get_theme_mods();
		foreach ($options as $_s => $o_t) {
			foreach ($o_t as $_k => $s_o) {
				if($s_o[0] == 'scc_googlefonts_size'){
					if(isset($t_o[$s_o[0]])){
						$scc_o[$s_o[0]] = scc_googlefont_size($t_o[$s_o[0]]);
					}else{
						$scc_o[$s_o[0]] = scc_googlefont_size($s_o[1]);
					}
				}else if ($s_o[2] != 'html') {
					if(isset($t_o[$s_o[0]])){
						$scc_o[$s_o[0]] = $t_o[$s_o[0]];
					}else{
						$scc_o[$s_o[0]] = $s_o[1];
					}
				}
			}
		}
		DEFINE('SPECTRUM_OPTIONS', $scc_o);
	}

/* ====================================================================
 * Options functions
 * ==================================================================*/
	function spectrum($id = null){
		if (!defined('SPECTRUM_OPTIONS')) {
			create_spectrum_options();
		}
		if ($id === null) {
			return SPECTRUM_OPTIONS;
		}else{
			if (!is_customize_preview()) {
				return SPECTRUM_OPTIONS[$id];
			}else{
				if ($id == 'scc_googlefonts_size') {
					return scc_googlefont_size(get_theme_mod($id, SPECTRUM_OPTIONS[$id]));
				}else{
					return get_theme_mod($id, SPECTRUM_OPTIONS[$id]);
				}
			}
		}
	}

/* ====================================================================
 * Shortcode
 * ==================================================================*/
	function spectrum_shortcode( $atts, $content = null ){$scc = shortcode_atts(array('id' =>  null,), $atts);
		return spectrum($scc['id']);
	}
	add_shortcode('spectrum', 'spectrum_shortcode');

/* ====================================================================
 * Your google font
 * ==================================================================*/
	function spectrum_googlefont(){
		return 'https://fonts.googleapis.com/css?family='.spectrum('scc_googlefonts_font').':'.spectrum('scc_googlefonts_size');
	}

/* ====================================================================
 * PHP <5.4.0 error
 * ==================================================================*/
	}else{
		if (!function_exists('spectrum_error_php')) {
			function spectrum_error_php(){
				?>
				<div class="notice notice-error">
					<p>
						<strong><?php _e('CRITICAL ERROR', 'scc') ?>!</strong>
						<br />
						<?php _e('The', 'scc'); ?> <i>Spectrum Engine</i> <?php _e('requires at least', 'scc') ?> PHP 5.6.0
						<br />
						<?php _e('You need to update your server', 'scc') ?>.
						<br />
						<small><i><?php _e('ERROR ID', 'scc') ?>: 3</i></small>
					</p>
				</div>
				<?php
			}
			add_action('admin_notices', 'spectrum_error_php');
		}
	}
?>