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




$sample_svg_image_just_delete_it_or_whatever = 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTIzNS40OSAxODEuNSI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOnVybCgjR3JhZGllbnRfYmV6X25hend5XzYpO30uY2xzLTJ7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTIpO30uY2xzLTN7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTMpO30uY2xzLTR7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTQpO30uY2xzLTV7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTUpO30uY2xzLTZ7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTYpO30uY2xzLTd7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTcpO30uY2xzLTh7ZmlsbDp1cmwoI0dyYWRpZW50X2Jlel9uYXp3eV82LTgpO308L3N0eWxlPjxsaW5lYXJHcmFkaWVudCBpZD0iR3JhZGllbnRfYmV6X25hend5XzYiIHkxPSI5MC44OCIgeDI9IjEyNi43NSIgeTI9IjkwLjg4IiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjMjMyMzIzIi8+PHN0b3Agb2Zmc2V0PSIwLjcxIi8+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9IkdyYWRpZW50X2Jlel9uYXp3eV82LTIiIHgxPSIxNTMuNzUiIHkxPSI5MC4zOCIgeDI9IjI2MyIgeTI9IjkwLjM4IiB4bGluazpocmVmPSIjR3JhZGllbnRfYmV6X25hend5XzYiLz48bGluZWFyR3JhZGllbnQgaWQ9IkdyYWRpZW50X2Jlel9uYXp3eV82LTMiIHgxPSIyOTAuNSIgeTE9IjkwLjM4IiB4Mj0iNDA3LjI1IiB5Mj0iOTAuMzgiIHhsaW5rOmhyZWY9IiNHcmFkaWVudF9iZXpfbmF6d3lfNiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iR3JhZGllbnRfYmV6X25hend5XzYtNCIgeDE9IjQyMi4yNCIgeTE9IjkwLjc1IiB4Mj0iNTcwLjk5IiB5Mj0iOTAuNzUiIHhsaW5rOmhyZWY9IiNHcmFkaWVudF9iZXpfbmF6d3lfNiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iR3JhZGllbnRfYmV6X25hend5XzYtNSIgeDE9IjU5OS43NCIgeTE9IjkwLjM4IiB4Mj0iNzMxLjk5IiB5Mj0iOTAuMzgiIHhsaW5rOmhyZWY9IiNHcmFkaWVudF9iZXpfbmF6d3lfNiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iR3JhZGllbnRfYmV6X25hend5XzYtNiIgeDE9Ijc1OC4yNCIgeTE9IjkwLjI1IiB4Mj0iODgzLjI0IiB5Mj0iOTAuMjUiIHhsaW5rOmhyZWY9IiNHcmFkaWVudF9iZXpfbmF6d3lfNiIvPjxsaW5lYXJHcmFkaWVudCBpZD0iR3JhZGllbnRfYmV6X25hend5XzYtNyIgeDE9IjkwMC40OSIgeTE9IjkxLjg4IiB4Mj0iMTAzNi4yNCIgeTI9IjkxLjg4IiB4bGluazpocmVmPSIjR3JhZGllbnRfYmV6X25hend5XzYiLz48bGluZWFyR3JhZGllbnQgaWQ9IkdyYWRpZW50X2Jlel9uYXp3eV82LTgiIHgxPSIxMDY0Ljk5IiB5MT0iOTAuMzgiIHgyPSIxMjM1LjQ5IiB5Mj0iOTAuMzgiIHhsaW5rOmhyZWY9IiNHcmFkaWVudF9iZXpfbmF6d3lfNiIvPjwvZGVmcz48dGl0bGU+U3BlY3RydW08L3RpdGxlPjxnIGlkPSJXYXJzdHdhXzIiIGRhdGEtbmFtZT0iV2Fyc3R3YSAyIj48ZyBpZD0iV2Fyc3R3YV8xLTIiIGRhdGEtbmFtZT0iV2Fyc3R3YSAxIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik02MC43NSwxMDMuNzVjLTUuNzUtMS41LTE2LjUtNC4yNS0yNi41LTExQzIwLjI1LDgzLjUsMTIuNSw3MCwxMS43NSw1My4yNSwxMSwzOS4yNSwxNS41LDI3LDI0LjUsMTcuNSwzNy41LDQsNTYuMjUuMjUsNjUuMjUuMjVjMjUuNSwwLDM5Ljc1LDkuMjUsNTIuNSwxNy41bDUuNzUsMy43NUwxMDUuMjUsNTEuMjVsLTYuMjUtNGMtMTEuMjUtNy4yNS0xOC41LTEyLTMzLjc1LTEyLTIuMjUsMC0xMSwxLjc1LTE1LjUsNi41LTEuNSwxLjUtMy4yNSw0LjI1LTMsMTAsLjI1LDksNi41LDE0LDIyLjUsMTgsMiwuNSwzLjUsMSw1LDEuNUM5MSw3NywxMDQsODQuNzUsMTEzLDk0LjVjOSwxMCwxMy43NSwyMS43NSwxMy43NSwzNC4yNSwwLDEyLjI1LTUuMjUsMjUtMTQsMzQuNzVhNTMuMjQsNTMuMjQsMCwwLDEtNDAuMjUsMTgsMTAzLjc1LDEwMy43NSwwLDAsMS0zMC43NS00LjI1QTk2Ljg5LDk2Ljg5LDAsMCwxLDAsMTUwLjc1bDI1LjUtMjRDNDQsMTQ2LjUsNjQuNzUsMTQ2LjUsNzIuNSwxNDYuNWMxNC41LDAsMTkuMjUtMTMuMjUsMTkuMjUtMTcuNzUsMC05LjUtMTAuNzUtMTguMjUtMjktMjQuNUw2MiwxMDRaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMjEwLjUsMi43NWE1Mi42Myw1Mi42MywwLDAsMSwwLDEwNS4yNUgxODguNzV2NzBoLTM1VjIuNzVabTAsNzAuMjVBMTcuNTUsMTcuNTUsMCwwLDAsMjI4LDU1LjVhMTcuNzcsMTcuNzcsMCwwLDAtMTcuNS0xNy43NUgxODguNzVWNzNaIi8+PHBhdGggY2xhc3M9ImNscy0zIiBkPSJNNDA3LjI1LDM3Ljc1SDI5MC41di0zNUg0MDcuMjVaTTI5MC41LDcwLjI1aDk2Ljc1djM1SDI5MC41Wm0wLDcyLjc1aDExNnYzNWgtMTE2WiIvPjxwYXRoIGNsYXNzPSJjbHMtNCIgZD0iTTU0Ni40OSw0NS4yNWMtMzQtMjItODUuMjUtMS41LTg1LjI1LDQ1LjUsMCw0OS4yNSw1NC4yNSw2OSw4Ny4yNSw0NEw1NzEsMTYwLjVBOTAuNzQsOTAuNzQsMCwxLDEsNTEzLDBhOTEuNDIsOTEuNDIsMCwwLDEsNTYsMTkuMjVaIi8+PHBhdGggY2xhc3M9ImNscy01IiBkPSJNNzMyLDIuNzV2MzVoLTQ4LjVWMTc4aC0zNVYzNy43NUg1OTkuNzR2LTM1WiIvPjxwYXRoIGNsYXNzPSJjbHMtNiIgZD0iTTc5My4yNCwzNy41VjE3Ny43NWgtMzVWMi41aDY4LjVBNTIuNjMsNTIuNjMsMCwwLDEsODQ4LjQ5LDEwM2wzNC43NSw3NUg4NDZsLTMyLjc1LTcwLjI1di0zNWgxMy41YTE3LjM5LDE3LjM5LDAsMCwwLDE3LjUtMTcuNSwxNy42MSwxNy42MSwwLDAsMC0xNy41LTE3Ljc1WiIvPjxwYXRoIGNsYXNzPSJjbHMtNyIgZD0iTTEwMzYuMjQsMTEzLjI1YTY3Ljg4LDY3Ljg4LDAsMCwxLTEzNS43NS4yNVYyLjc1aDM1djExMC41YTMyLjg2LDMyLjg2LDAsMCwwLDMzLDMyLjc1LDMxLjkzLDMxLjkzLDAsMCwwLDIzLTkuNSwzMy4yMiwzMy4yMiwwLDAsMCw5Ljc1LTIzSDEwMDFWMi43NWgzNXYxMTAuNVoiLz48cGF0aCBjbGFzcz0iY2xzLTgiIGQ9Ik0xMjAwLjQ5LDE3OFY3MC43NWwtNTAuMjUsNDUuNzVMMTEwMCw3MC43NVYxNzhoLTM1VjIuNzVoMTJsNzMuMjUsNjYuNSw3My02Ni41aDEyLjI1VjE3OFoiLz48L2c+PC9nPjwvc3ZnPg==';


/**
 * Spectrum Engine
 * @version 2.2.1
 * @since WordPress 4.8.1
 *
 * Available function types:
 *     text, textarea, checkbox, url, dropdown, img, color, select, multiselect, page, multipage, html
 */


/* ====================================================================
 * Customizer menu
 * ==================================================================*/
	$customization = [
		/*
			These menu are only representative, you can remove all this
		*/
		'sayhello' => [
			'Spectrum Engine'
		],
		'google_font' => [
			'Google fonts'
		],
		'panel_id' => [
			'Spectrum panel',
			[
				['section_id_1', 'Available input methods'],
				['section_id_2', 'Masło'],
			]
		]
	];

/* ====================================================================
 * Customizer options
 * ==================================================================*/
	$options = [
		/*
			These options are only representative, you can remove all this
		*/
		'sayhello' => [
			['scc_hello', null, 'html', null, null, '<img style="width:200px;max-width:100%;" src="'.$sample_svg_image_just_delete_it_or_whatever.'"/><hr /><p>Spectrum '.__('was created by', 'scc').' Leszek Pomianowski</p><hr /><p>'.__('This tool was created by the creativity of many people. Hundreds of programmers, graphic designers, engineers and other artists who make up WordPress, PHP, MySQL and other technolgies make creation easy as never before. Thank you for using my contribution to facilitating your development', 'scc').'</p><br /><ul><li><a style="text-align: center; width:100%" class="button button-secondary button-spectrum" href="https://rapiddev.pl/" target="_blank">'.__('Visit the creators page','scc').'</a></li><li><a style="text-align: center; width:100%" class="button button-secondary button-spectrum" href="https://rapiddev.pl/license" target="_blank">'.__('License', 'scc').'</a></li><li><input name="save" id="save" style="text-align: center; width:100%" class="button button-primary button-spectrum save" value="'.__('Save changes', 'scc').'" type="submit"></li></ul>']
		],
		'google_font' => [
			['scc_googlefonts_size', '400', 'multiselect', 'Sizes', 'The more fonts you use, the longer they will load.', ['100' => 'Thin', '100i' => 'Thin Italic', '300' => 'Light', '300i' => 'Light Italic', '400' => 'Regular', '400i' => 'Regular Italic', '500' => 'Medium', '500i' => 'Medium Italic', '700' => 'Bold', '700i' => 'Bold Italic', '900' => 'Black', '900i' => 'Black Italic']],
			['scc_googlefonts_font', 'Lato', 'dropdown', 'Font', 'Not all fonts support all sizes.', ['Lato' => 'Lato','Ubuntu' => 'Ubuntu','Libre+Barcode+39+Text' => 'Libre Barcode 39 Text', 'Khula' => 'Khula','Roboto' => 'Roboto','Open+Sans' => 'Open Sans','Slabo+27px' => 'Slabo 27px','Source+Sans+Pro' => 'Source Sans Pro','Raleway' => 'Raleway','Montserrat' => 'Montserrat','Oswald' => 'Oswald','Barrio' => 'Barrio','Quicksand' => 'Quicksand','Cabin' => 'Cabin','VT323' => 'VT323','Inknut+Antiqua' => 'Inknut Antiqua','Droid+Serif' => 'Droid Serif','Playfair+Display' => 'Playfair Display','Oxygen' => 'Oxygen','Inconsolata' => 'Inconsolata','Abel' => 'Abel','Pacifico' => 'Pacifico','Gloria+Hallelujah' => 'Gloria Hallelujah','Exo' => 'Exo','Archivo+Black' => 'Archivo Black','Ropa+Sans' => 'Ropa Sans','Ciznel' => 'Cinzel','Poiret+One' => 'Poiret One','Nunito' => 'Nunito','Nunito+Sans' => 'Nunito Sans']],
			['google_info', null, 'html', null, null, '<hr /><p><i>We believe the best way to bring personality and performance to websites and products is through great design and technology. Our goal is to make that process simple, by offering an intuitive and robust directory of open source designer web fonts. By using our extensive catalog, you can share and integrate typography into any design project seamlessly—no matter where you are in the world.</i> - Google</p><br /><a href="https://developers.google.com/fonts/faq" style="width:100%; text-align:center" target="_blank" class="button button-primary" role="button">FAQ</a><br /><br /><a href="https://developers.google.com/fonts/" style="width:100%; text-align:center" target="_blank" class="button button-secondary" role="button">API documentation</a><a href="https://www.google.com/policies/privacy/" style="width:100%; text-align:center" target="_blank" class="button button-secondary" role="button">Privacy policy</a<br /><br /><a href="https://developers.google.com/terms/" style="width:100%; text-align:center" target="_blank" class="button button-secondary" role="button">Terms of use</a']
		],
		'section_id_1' => [
			['option_id_1', null, 'html', 'HTML', null, '<h1>HTML!</h1>'],
			['option_id_2', true, 'checkbox', 'Checkbox'],
			['option_id_3', 'default value', 'text', 'Text'],
			['option_id_4', 'default value', 'textarea', 'Textarea'],
			['option_id_5', 'https://rapiddev.pl/', 'url', 'URL Address'],
			['option_id_6', '#e6e9ee', 'color', 'Color'],
			['option_id_7', 1, 'select', 'Select', null, [1 => 'First option', 2 => 'Second option']],
			['option_id_8', 1, 'multiselect', 'Multiselect', null, [1 => 'First option', 2 => 'Second option']],
			['option_id_9', 1, 'dropdown', 'Dropdown', null, [1 => 'First option', 2 => 'Second option']],
			['option_id_10', 1, 'page', 'Page select'],
			['option_id_11', 1, 'multipage', 'Multi page select'],
			['option_id_12', null, 'img', 'Image']
		]
	];
?>