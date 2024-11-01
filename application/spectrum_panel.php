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
	if (file_exists(SPECTRUM_ENGINE.'/_options.php')) {
		require_once(SPECTRUM_ENGINE.'/_options.php');
	}
?>
<div class="wrap">
	<h1>Spectrum Engine <small style="font-size: 0.7rem;">v.<?php echo SPECTRUM_VERSION; ?></small></h1>
	<hr>
<?php if (is_admin()): ?>
	<p>
		<a target="_blank" class="button button-primary" href="<?php echo admin_url('plugin-editor.php?file=spectrum_engine%2F_options.php&plugin=spectrum_engine%2Fspectrum_engine.php'); ?>">
			<?php _e('Edit your options and customization menu', 'scc') ?>
		</a>
	</p>
	<hr>
<?php endif; ?>
	<p>
		<h2><?php _e('How to use the options', 'scc') ?>?</h2>
		<p><?php _e('You can use your own features wherever you want', 'scc') ?>!</p>
		<p>
			<?php _e('If you want to use the option somewhere in your files, use the function', 'scc') ?>: <code>&lt;&#63;php spectrum('<i><?php _e('option_id', 'scc') ?></i>'); &#63;&gt;</code>
			<br>
			<small><i><?php _e("It supports auto-refresh if you're in customizer", 'scc') ?>.</i></small></p>
		</p>
		<p>
			<?php _e('If you want to use the option in your post or pages use the shortcode', 'scc') ?>: <code>[spectrum id="<i><?php _e('option_id', 'scc') ?></i>"]</code>
			<br>
			<small><i><?php _e('This feature also supports automatic refresh of content after changes in customizer', 'scc') ?>!</i></small>
		</p>
		<h2><?php _e('Google Fonts', 'scc') ?></h2>
		<p>
			<?php _e('Currently, Google fonts are implemented in Spectrum, you can remove this option, but if you want it, just use it', 'scc') ?> :)
			<br />
			<?php _e('Your Google font address looks like this', 'scc') ?>: <i><?php echo spectrum_googlefont(); ?></i>
			<br />
			<?php _e('To take this address use the function', 'scc') ?>: <code>&lt;&#63;php echo spectrum_googlefont(); &#63;&gt;</code>
		</p>
	<hr>
	<p>
		<h2><?php _e('Your customization menu', 'scc') ?></h2>
		<table class="table table-striped">
			<tr>
				<th><?php _e('Panel', 'scc'); ?></th>
				<th><?php _e('Section', 'scc'); ?></th>
			</tr>
		<?php
			foreach ($customization as $id => $value) {
				if (!isset($value[2])) {
					$value[2] = $value[1];
					$value[1] = null;
				}

				if (!isset($value[2])) {
					echo '<tr><th></th><th>'.$value[0].' <i><small>(#'.$id.')</small></i></th></tr>';
				}else{
					foreach ($value[2] as $key => $section) {
						if (!isset($section[0])) {
							$section[0] = null;
						}
						if (!isset($section[1])) {
							$section[1] = null;
						}
						echo '<tr><th><strong>'.$value[0].' <i><small>(#'.$id.')</small></i></strong></th>';
						echo '<th>'.$section[1].' <i><small>(#'.$section[0].')</small></i><th>';
						echo '</tr>';
					}
				}
				$counter++;
			}
		?>
		</table>
		<?php /* highlight_string("<?php\nSpectrum Engine v.2.2.1 =\n" . var_export(SCC, true) . ";\n?>\n"); */ ?>
	</p>
	<hr>
	<p>
		<h2><?php _e('Your options', 'scc') ?></h2>
		<table class="table table-striped">
			<tr>
				<th><?php _e('Section', 'scc'); ?></th>
				<th>ID</th>
				<th><?php _e('Type', 'scc'); ?></th>
				<th><?php _e('Default value', 'scc'); ?></th>
			</tr>
			<?php 
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
						echo '<tr><td>#'.$single_option[6].'</td><td>'.$single_option[0].'</td><td style="text-transform: uppercase;">'.$single_option[2].'</td><td><i>'.$single_option[1].'</i></td></tr>';
					}else{
					}
				}
			}
			?>
		</table>
		<p style="text-align: right"><i><?php _e('Created by', 'scc') ?> <a target="_blank" href="https://rapiddev.pl/">Leszek Pomianowski</a><br /><?php _e('Styles powered by', 'scc') ?> <a target="_blank" href="http://getbootstrap.com/">Bootstrap v.4.0.0</a></i></p>
	</p>
</div>