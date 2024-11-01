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
 * Add panel
 * ==================================================================*/
	function scc_add_panel($wp_customize, $panel){
		$wp_customize->add_panel(
			$panel[0], array(
				'priority' => $panel[3],
				'capability' => 'edit_theme_options',
				'theme_supports' => '',
				'title' => $panel[1],
				'description' => $panel[2]
			)
		);
	}

/* ====================================================================
 * Add section
 * ==================================================================*/
	function scc_add_section($wp_customize, $section){
		if(!isset($section[4])){
			$section[4] = null;
		}
		$wp_customize->add_section(
			$section[0], array(
				'priority' => $section[3],
				'capability' => 'edit_theme_options',
				'title' => $section[1],
				'description' => $section[2],
				'panel' => $section[4]
			)
		);
	}

/* ====================================================================
 * Text
 * ==================================================================*/
	function scc_wp_text($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => 'refresh'
			)
		);
		$wp_customize->add_control(
			$a[0],
			array(
				'type' => 'text',
				'priority' => $a[7],
				'section' => $a[6],
				'label' => __($a[3],'scc'),
				'description' => __($a[4],'scc')
			)
		);
	}

/* ====================================================================
 * Text area
 * ==================================================================*/
	function scc_wp_textarea($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => 'refresh'
			)
		);
		$wp_customize->add_control(
			$a[0],
			array(
				'type' => 'textarea',
				'priority' => $a[7],
				'section' => $a[6],
				'label' => __( $a[3],'scc'),
				'description' => __($a[4],'scc')
			)
		);
	}
	
/* ====================================================================
 * URL Address
 * ==================================================================*/
	function scc_wp_url($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => 'refresh',
				'sanitize_callback' => 'esc_url'
			)
		);
		$wp_customize->add_control(
			$a[0],
			array(
				'type' => 'url',
				'priority' => $a[7],
				'section' => $a[6],
				'label' => __($a[3],'scc'),
				'description' => __($a[4],'scc')
			)
		);
	}
	
/* ====================================================================
 * Checkbox
 * ==================================================================*/
	function scc_wp_check($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport'  =>  'refresh'
			)
		);
		$wp_customize->add_control(
			$a[0],
			array(
				'priority' => $a[7],
				'section' => $a[6],
				'label' => __($a[3],'scc'),
				'description' => __($a[4],'scc'),
				'type' => 'checkbox'
			)
		);
	}
	
/* ====================================================================
 * Single select
 * ==================================================================*/
	function scc_wp_select($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport'  =>  'refresh'
			)
		);
		$wp_customize->add_control(
			$a[0],
			array(
				'section' => $a[6],
				'priority' => $a[7],
				'settings' => $a[0],
				'type' => 'radio',
				'choices' => $a[5],
				'label'  => __($a[3],'scc'),
				'description' => __($a[4],'scc')
			)
		);
	}

/* ====================================================================
 * Image select
 * ==================================================================*/
	function scc_wp_img($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'type' => 'theme_mod',
				'capability' => 'edit_theme_options',
				'transport' => 'refresh'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$a[0],
				array(
					'section' => $a[6],
					'priority' => $a[7],
					'settings'=> $a[0],
					'label' => __($a[3],'scc'),
					'description' => __($a[4],'scc')
				)
			)
		);
	}

/* ====================================================================
 * Color
 * ==================================================================*/
	function scc_wp_color($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport' => 'refresh'
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$a[0],
				array(
					'label' => __($a[3],'scc'),
					'section' => $a[6],
					'settings' => $a[0],
					'priority' => $a[7],
					'description' => __($a[4],'scc')
				)
			)
		);
	}

/* ====================================================================
 * Multiple select
 * ==================================================================*/
	if(class_exists('WP_Customize_Control') && ! class_exists('scc_multiselect')){
		class scc_multiselect extends WP_Customize_Control {
			public $type = 'multiple-select';
			public function render_content(){
				if(empty($this->choices)) return; ?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select autocomplete="off" <?php $this->link(); ?> multiple="multiple" style="width: 100%;">
						<?php
						foreach($this->choices as $value => $label){
							$selected = (in_array($value, $this->value())) ? selected( 1, 1, false ) : '';echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}
	function scc_wp_multi($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport'  =>  'refresh'
			)
		);
		$wp_customize->add_control(
			new scc_multiselect(
				$wp_customize,
				$a[0],
				array(
					'section' => $a[6],
					'type' => 'multiple-select',
					'priority' => $a[7],
					'choices'  => $a[5],
					'settings' => $a[0],
					'label' => __($a[3],'scc'),
					'description' => __($a[4],'scc')
				)
			)
		);
	}
	
	
/* ====================================================================
 * Multiple page select
 * ==================================================================*/
	if(class_exists('WP_Customize_Control') && ! class_exists('scc_pageselect')){
		class scc_pageselect extends WP_Customize_Control {
			public $type = 'pages-select';
			public function render_content(){
				global $post;
				$args = array('post_type'=>'page','post_status'=>'publish', 'posts_per_page' => 999);
				$myposts = get_posts($args);
				foreach($myposts as $post):
					setup_postdata( $post );
					$cc_post[get_the_ID()] = get_the_title();
				endforeach;
				wp_reset_postdata();
				$this->choices = $cc_post;
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select autocomplete="off" <?php $this->link(); ?> multiple="multiple" style="width: 100%;">
						<?php
						foreach($this->choices as $value => $label ){
							$selected = ( in_array( $value, $this->value() ) ) ? selected( 1, 1, false ) : '';echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}
	function scc_wp_pages($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport'  =>  'refresh'
			)
		);
		$wp_customize->add_control(
			new scc_pageselect(
				$wp_customize,
				$a[0],
				array(
					'settings' => $a[0],
					'label' => __($a[3],'scc'),
					'description' => __($a[4],'scc'),
					'section' => $a[6],
					'type' => 'pages-select',
					'priority' => $a[7],
					'choices'  => $a[5]
				)
			)
		);
	}
	
/* ====================================================================
 * Single page select
 * ==================================================================*/
	if(class_exists('WP_Customize_Control') && ! class_exists('scc_singlepageselect')){
		class scc_singlepageselect extends WP_Customize_Control {
			public $type = 'page-select';
			public function render_content(){
				global $post;
				$args = array('post_type'=>'page','post_status'=>'publish', 'posts_per_page' => 999);
				$myposts = get_posts( $args );
				foreach ($myposts as $post):
					setup_postdata( $post );
					$cc_post[get_the_ID()] = get_the_title();
				endforeach;
				wp_reset_postdata();
				$this->choices = $cc_post;
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select autocomplete="off" <?php $this->link(); ?> style="width: 100%;">
						<?php
						foreach($this->choices as $value => $label){
							$selected = ($value == $this->value()) ? selected( 1, 1, false ): '';if($selected != 0){$selected = ' selected ';}echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}
	function scc_wp_page($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport'  =>  'refresh'
			)
		);
		$wp_customize->add_control(
			new scc_singlepageselect(
				$wp_customize,
				$a[0],
				array(
					'settings' => $a[0],
					'label' => __($a[3],'scc'),
					'description' => __($a[4],'scc'),
					'section' => $a[6],
					'type' => 'page-select',
					'priority' => $a[7],
					'choices'  => $a[5]
				)
			)
		);
	}

/* ====================================================================
 * Dropdown
 * ==================================================================*/
	if(class_exists('WP_Customize_Control') && ! class_exists('scc_dropddown')){
		class scc_dropddown extends WP_Customize_Control {
			public $type = 'dropdown-select';
			public function render_content(){
				if(empty($this->choices)) return; ?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select autocomplete="off" <?php $this->link(); ?> style="width: 100%;">
						<?php
						foreach($this->choices as $value => $label){
							$selected = ($value == $this->value()) ? selected( 1, 1, false ): '';if($selected != 0){$selected = ' selected ';}echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}
	function scc_wp_dropdown($wp_customize, $a){
		$wp_customize->add_setting(
			$a[0],
			array(
				'default' => $a[1],
				'transport'  =>  'refresh'
			)
		);
		$wp_customize->add_control(
			new scc_dropddown(
				$wp_customize,
				$a[0],
				array(
					'settings' => $a[0],
					'label' => __($a[3],'scc'),
					'description' => __($a[4],'scc'),
					'section' => $a[6],
					'type' => 'dropdown-select',
					'priority' => $a[7],
					'choices'  => $a[5]
				)
			)
		);
	}

/* ====================================================================
 * HTML
 * ==================================================================*/
	if(class_exists('WP_Customize_Control') && ! class_exists('scc_html')){
		class scc_html extends WP_Customize_Control {
			public $content = '';
			public function render_content(){
				if (isset($this->label)){
					echo '<span class="customize-control-title">'.$this->label.'</span>';
				}
				if(isset($this->description)){
					echo '<span class="description customize-control-description">'.$this->description.'</span>';
				}
				if(isset($this->content)){
					echo $this->content;
				}
			}
		}
	}
	function scc_wp_html($wp_customize, $a){
		$wp_customize->add_setting(
			'html_'.$a[0],
			array(
				'transport' => 'refresh'
			)
		);
		$wp_customize->add_control(
			new scc_html(
				$wp_customize,
				'html_'.$a[0],
				array(
					'section' => $a[6],
					'priority' => $a[7],
					'content' => $a[5],
					'label' => __($a[3], 'scc'),
					'description' => __($a[4], 'scc')
				)
			)
		);
	}
?>