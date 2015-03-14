<?php

/**
 * This filter is used to change the Customizer Options
 * You can also copy this function inside your functions.php
 * file but DO NOT FORGET TO CHANGE ITS NAME
 *
 * @param $config array This holds required keys for the plugin config like 'opt-name', 'panels', 'settings'
 * @return $config
 */

if ( ! function_exists('add_customify_base_options') ) {

	function add_customify_base_options( $config ) {

		$config['opt-name'] = 'customify_defaults';

		$config['sections'] = array(
			/**
			 * Presets - This section will handle other options
			 */
			'presets_section' => array(
				'title'    => __( 'Style Presets', 'customify_txtd' ),
				'options' => array(
					'theme_style'   => array(
						'type'      => 'preset',
						'label'     => __( 'Select a style:', 'customify_txtd' ),
						'desc' => __( 'Conveniently change the design of your site with built-in style presets. Easy as pie.', 'customify_txtd' ),
						'default'   => 'silk',
						'choices_type' => 'awesome',
						'choices'  => array(
							'hibiscus' => array(
								'label' => __( 'Hibiscus', 'customify_txtd' ),
								'preview' => array(
									'color-text' => '#fbedec',
									'background-card' => '#54323c',
									'background-label' => '#cd8085',
									'font-main' => 'Cinzel Decorative',
									'font-alt' => 'Gentium Basic',
								),
								'options' => array(
									'links_color' => '#ffffff',
									'headings_color' => '#ffffff',
									'body_color' => '#ffffff',
									'page_background' => '#000000',
									'headings_font' => 'Pinyon Script',
									'body_font' => 'Pinyon Script',
								)
							),
							'secret' => array(
								'label' => __( 'Secret', 'customify_txtd' ),
								'preview' => array(
									// 'color-text' => '#68f3c8',
									'background-card' => '#282828',
									'background-label' => '#000000',
									'font-main' => 'Pinyon Script',
									'font-alt' => 'Josefin Sans',
								),
								'options' => array(
									'links_color' => '#000000',
									'headings_color' => '#000000',
									'body_color' => '#000000',
									'page_background' => '#000000',
									'headings_font' => 'Pinyon Script',
									'body_font' => 'Josefin Sans',
								)
							),

							'adler' => array(
								'label' => __( 'Adler', 'customify_txtd' ),
								'preview' => array(
									'color-text' => '#68f3c8',
									'background-card' => '#0e364f',
									'background-label' => '#000000',
									'font-main' => 'Permanent Marker',
									'font-alt' => 'Droid Sans Mono',
								),
								'options' => array(
									'links_color' => '#68f3c8',
									'headings_color' => '#0e364f',
									'body_color' => '#45525a',
									'page_background' => '#ffffff',
									'headings_font' => 'Permanent Marker',
									'body_font' => 'Droid Sans Mono'
								)
							),
							'silk' => array(
								'label' => __( 'Silk', 'customify_txtd' ),
								'preview' => array(
									// 'color-text' => 'white',
									'background-card' => '#A84469',
									'background-label' => '#FAC2A8',
									'font-main' => 'Playfair Display',
									'font-alt' => 'Merriweather',
								),
								'options' => array(
									'links_color' => '#FAC2A8', //second
									'headings_color' => '#A84469', //main
									'body_color' => '#ffffff', // 
									'page_background' => '#ffffff',
									'headings_font' => 'Playfair Display', //main
									'body_font' => 'Merriweather'
								)
							),
							'red' => array(
								'label' => __( 'Urban', 'customify_txtd' ),
								'preview' => array(
									'color-text' => 'FFF',
									'background-card' => '#0EB0BF',
									'background-label' => '#390303',
									'font-main' => 'Merriweather',
									'font-alt' => 'Source Code Pro',
								),
								'options' => array(
									'links_color' => '#0EB0BF',
									'headings_color' => '#0EB0BF',
									'body_color' => '#3a0303',
									'page_background' => '#ffffff',
									'headings_font' => 'Merriweather',
									'body_font' => 'Source Code Pro'
								)
							),
							'black' => array(
								'label' => __( 'Black', 'customify_txtd' ),
								'options' => array(
									'links_color' => '#ebebeb',
									'headings_color' => '#333',
									'body_color' => '#989898',
									'headings_font' => 'Arvo',
									'body_font' => 'Lora'
								)
							),
						)
					),
				)
			),

			/**
			 * COLORS - This section will handle different elements colors (eg. links, headings)
			 */
			'colors_section' => array(
				'title'    => __( 'Colors', 'customify_txtd' ),
				'options' => array(
					'links_color'   => array(
						'type'      => 'color',
						'label'     => __( 'Links Color', 'customify_txtd' ),
						'live' => true,
						'default'   => '#6c6e70',
						'css'  => array(
							array(
								'property'     => 'color',
								'selector' => 'a, .entry-meta a',
							),
						)
					),
					'headings_color' => array(
						'type'      => 'color',
						'label'     => __( 'Headings Color', 'customify_txtd' ),
						'live' => true,
						'default'   => '#0aa0d9',
						'css'  => array(
							array(
								'property'     => 'color',
								'selector' => '.site-title a, h1, h2, h3, h4, h5, h6,
												h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
												.widget-title,
												a:hover, .entry-meta a:hover'
							)
						)
					),
					'body_color'     => array(
						'type'      => 'color',
						'label'     => __( 'Body Color', 'customify_txtd' ),
						'live' => true,
						'default'   => '#2d3033',
						'css'  => array(
							array(
								'selector' => 'body',
								'property'     => 'color'
							)
						)
					)
				)
			),

			/**
			 * FONTS - This section will handle different elements fonts (eg. headings, body)
			 */
			'typography_section' => array(
				'title'    => __( 'Fonts', 'customify_txtd' ),
				'options' => array(
					'headings_font' => array(
						'type'     => 'typography',
						'label'    => __( 'Headings', 'customify_txtd' ),
						'default'  => 'Playfair Display',
						'selector' => '.site-title a, h1, h2, h3, h4, h5, h6,
										h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
										.widget-title',
						'font_weight' => true,
						'subsets' => true,
						'recommended' => array(
							'Playfair Display',
							'Oswald',
							'Lato',
							'Open Sans',
							'Exo',
							'PT Sans',
							'Ubuntu',
							'Vollkorn',
							'Lora',
							'Arvo',
							'Josefin Slab',
							'Crete Round',
							'Kreon',
							'Bubblegum Sans',
							'The Girl Next Door',
							'Pacifico',
							'Handlee',
							'Satify',
							'Pompiere'
						)
					),
					'body_font'     => array(
						'type'    => 'typography',
						'label'   => __( 'Body Text', 'customify_txtd' ),
						'default' => 'Lato',
						'selector' => 'html body',
						'load_all_weights' => true,
						'recommended' => array(
							'Lato',
							'Open Sans',
							'PT Sans',
							'Cabin',
							'Gentium Book Basic',
							'PT Serif',
							'Droid Serif'
						)
					)
				)
			),

			/**
			 * BACKGROUNDS - This section will handle different elements colors (eg. links, headings)
			 */
			'backgrounds_section' => array(
				'title'    => __( 'Backgrounds', 'customify_txtd' ),
				'options' => array(
					'page_background'   => array(
						'type'      => 'color',
						'label'     => __( 'Page Background', 'customify_txtd' ),
						'live' => true,
						'default'   => '#ffffff',
						'css'  => array(
							array(
								'property'     => 'background',
								'selector' => 'body, .site',
							)
						)
					),
				)
			),
			/**
			 * LAYOUTS - This section will handle different elements colors (eg. links, headings)
			 */
			'layout_options' => array(
				'title'    => __( 'Layout', 'customify_txtd' ),
				'options' => array(
					'site_title_size' => array(
						'type'  => 'range',
						'label' => 'Site Title Size',
						'live' => true,
						'input_attrs' => array(
							'min'   => 24,
							'max'   => 100,
							'step'  => 1,
							'data-preview' => true
						),
						'default' => 24,
						'css' => array(
							array(
								'property' => 'font-size',
								'selector' => '.site-title',
								'media' => 'screen and (min-width: 1000px)',
								'unit' => 'px',
							)
						)
					),
					'page_content_spacing' => array(
						'type'  => 'range',
						'label' => 'Page Content Spacing',
						'live' => true,
						'input_attrs' => array(
							'min'   => 0,
							'max'   => 100,
							'step'  => 1,
						),
						'default' => 18,
						'css' => array(
							array(
								'property' => 'padding',
								'selector' => '.site-content',
								'media' => 'screen and (min-width: 1000px)',
								'unit' => 'px',
							)
						)
					)
				)
			)
		);

		/**
		 * A self explanatory example of panels *
		$config['panels'] = array(
			'panel_id' => array(
				'title'    => __( 'Panel Title', 'customify_txtd' ),
				'sections' => array(
					'title'    => __( 'Section Title', 'customify_txtd' ),
					'options' => array(
						'setting_id'   => array(
							'type'      => 'color',
							'label'     => __( 'Label', 'customify_txtd' ),
							'live' => true, // or false
							'default'   => '#6c6e70',
							'css'  => array(
								array(
									'property'     => 'color',
									'selector' => 'a, .entry-meta a',
								),
							)
						),
					)
				)
			)
		);
		 *
		 **/

		return $config;
	}
}


add_filter( 'customify_filter_fields', 'add_customify_base_options', 10, 1 );
