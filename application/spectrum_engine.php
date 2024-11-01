<?php defined( 'ABSPATH' ) && defined( 'SPECTRUM_ENGINE' ) or die( 'No script kiddies please!' );
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
 * Start customization
 * ==================================================================*/
	function spectrum_engine($wp_customize){

/* ====================================================================
 * Load functions file
 * ==================================================================*/
	if (file_exists(SPECTRUM_ENGINE.'/application/spectrum_functions.php')) {
		include(SPECTRUM_ENGINE.'/application/spectrum_functions.php');
	}

/* ====================================================================
 * Load options
 * ==================================================================*/
	if (file_exists(SPECTRUM_ENGINE.'/_options.php')) {
		include(SPECTRUM_ENGINE.'/_options.php');
	}

/* ====================================================================
 * Create customization menu
 * ==================================================================*/
		$counter = 1;
		foreach ($customization as $id => $value) {
			if (!isset($value[0])) {
				//error panel must have title
			}
			if (isset($value[1])) {
				if (!isset($value[2])) {
					$value[2] = [];
					$value[2] = $value[1];
					$value[1] = null;
				}
			}else{
				$value[1] = null;
			}

			if (!isset($value[2])) {
				scc_add_section($wp_customize, [$id, $value[0], $value[1], $counter]);
			}else{
				scc_add_panel($wp_customize, [$id, $value[0], $value[1], $counter]);
				foreach ($value[2] as $key => $section) {
					if (!isset($section[0])) {
						//error section must have id
					}
					if (!isset($section[1])) {
						//error section must have title
					}
					if (!isset($section[2])) {
						$section[2] = null;
					}
					scc_add_section($wp_customize, [$section[0], $section[1], $section[2], $key+1, $id]);
				}
			}
			$counter++;
		}

/* ====================================================================
 * Register customization settings
 * ==================================================================*/
		foreach ($options as $section => $options_table){
			foreach ($options_table as $_key => $single_option) {
				if (isset($single_option[2])){
					if (!isset($single_option[3])) {
						$single_option[3] = null;
					}
					if (!isset($single_option[4])) {
						$single_option[4] = null;
					}
					if (!isset($single_option[5])) {
						$single_option[5] = null;
					}
					$single_option[6] = $section;
					$single_option[7] = $_key+1;

					/**
					* @package Spectrum Settings Engine
					* @subpackage DEBUG CUSTOMIZATION SETTINGS
					* @uses highlight_string(), var_export()
					
						highlight_string("<?php\nSpectrum Engine v.2.2.1 =\n" . var_export($single_option, true) . ";\n?>\n");
					
					*/

					if ($single_option[2] == 'checkbox') {
						scc_wp_check($wp_customize, $single_option);
					}else if ($single_option[2] == 'text') {
						scc_wp_text($wp_customize, $single_option);
					}else if ($single_option[2] == 'textarea') {
						scc_wp_textarea($wp_customize, $single_option);
					}else if ($single_option[2] == 'color') {
						scc_wp_color($wp_customize, $single_option);
					}else if ($single_option[2] == 'url') {
						scc_wp_url($wp_customize, $single_option);
					}else if ($single_option[2] == 'img') {
						scc_wp_img($wp_customize, $single_option);
					}else if ($single_option[2] == 'select') {
						scc_wp_select($wp_customize, $single_option);
					}else if ($single_option[2] == 'multiselect') {
						scc_wp_multi($wp_customize, $single_option);
					}else if ($single_option[2] == 'multipage') {
						scc_wp_pages($wp_customize, $single_option);
					}else if ($single_option[2] == 'page') {
						scc_wp_page($wp_customize, $single_option);
					}else if ($single_option[2] == 'html') {
						scc_wp_html($wp_customize, $single_option);
					}else if ($single_option[2] == 'dropdown') {
						scc_wp_dropdown($wp_customize, $single_option);
					}else{
						//error option type does not exist
					}
				}else{
					//error option type was not declared
				}
			}
		}
	}
	add_action( 'customize_register', 'spectrum_engine' );

/* ====================================================================
 * Customization styles
 * ==================================================================*/
	if (is_customize_preview()) {
		function scc_customization_styles(){
			?>
			<style>
				.button-spectrum {width: 100%;text-align: center;}
				@keyframes fadeInfadeOut {0%{opacity: 1;}50%{opacity: 0.3;}100%{opacity: 1;}}
				#accordion-section-error > h3 {color: #c33400 !important;animation-name: fadeInfadeOut;animation-duration: 1.5s;animation-iteration-count: infinite;}
			</style>
			<?php
		}
		add_action('customize_controls_print_styles', 'scc_customization_styles');
	}