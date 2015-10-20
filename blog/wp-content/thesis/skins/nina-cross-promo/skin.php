<?php
/*
Name: Promo
Author: Nina Cross
Description: A responsive, content-focused Skin with unlimited color schemes, a promo bar for catching visitors&#8217; attention, a tabbed posts widget, social media profile icon links, and more!
Version: 1.1
Requires: 2.1.2
Class: nina_cross_promo
License: DIYthemes Software Extensions License Agreement
License URI: http://diythemes.com/thesis/rtfm/software-extensions-license-agreement/

Copyright 2013 DIYthemes, LLC and Nina Cross Design. All rights reserved.
DIYthemes, Thesis, and the Thesis Theme are registered trademarks of DIYthemes, LLC.
*/
class nina_cross_promo extends thesis_skin {
	protected $filters = array(
		'css_preprocessor' => 'scss');
	private $d = false;
	private $f = false;

	private $elements = array(
		'post' => array(
			'author' => 'thesis_post_author_post',
			'avatar' => 'thesis_post_author_avatar_post',
			'description' => 'thesis_post_author_description_post',
			'twitter' => 'thesis_twitter_profile_post',
			'date' => 'thesis_post_date_post',
			'cats' => 'thesis_post_categories_post',
			'tags' => 'thesis_post_tags_post',
			'wp_featured_image_home' => 'thesis_wp_featured_image_home',
			'wp_featured_image' => 'thesis_wp_featured_image_post',
			'image' => 'thesis_post_image_post',
			'thumbnail' => 'thesis_post_thumbnail_post',
			'num_comments' => 'thesis_post_num_comments_post',
			'comments' => 'thesis_html_container_comments_post'),
		'page' => array(
			'author' => 'thesis_post_author_page',
			'avatar' => 'thesis_post_author_avatar_page',
			'description' => 'thesis_post_author_description_page',
			'twitter' => 'thesis_twitter_profile_page',
			'wp_featured_image' => 'thesis_wp_featured_image_page',
			'image' => 'thesis_post_image_page',
			'num_comments' => 'thesis_post_num_comments_page',
			'comments' => 'thesis_html_container_comments_page'),
		'comments' => array(
			'date' => 'thesis_comment_date_comments',
			'avatar' => 'thesis_comment_avatar_comments'),
		'promo' => array(
			'promo_bar' => 'thesis_html_container_promo_bar',
			'promo' => 'thesis_text_box_promo'),
		'widgets' => array(
			'sidebar' => 'thesis_wp_widgets_sidebar',
			'post' => 'thesis_wp_widgets_post',
			'page' => 'thesis_wp_widgets_page'),
		'misc' => array(
			'tagline' => 'thesis_site_tagline',
			'tabs' => 'ncd_uber_tabs',
			'attribution' => 'thesis_attribution',
			'wp_admin' => 'thesis_wp_admin'));

	protected function construct() {
		$this->d = get_option("{$this->_class}__design");
		foreach ($this->elements as $element => $boxes)
			if (is_array($boxes))
				foreach ($boxes as $box => $filter)
					if (empty($this->display[$element]['display'][$box]))
						add_filter("{$filter}_show", '__return_false');
		add_action('hook_top_header', array($this, 'header_image_html'));
		add_filter('thesis_font_script', array($this, 'webfont'));
		add_action('thesis_hook_head', array($this, 'webfont_js'));
		add_filter('thesis_font_stylesheet', array($this, 'webfont_css'));
		add_filter('thesis_html_container_prev_next_show', array($this, 'prev_next'));
		add_filter('thesis_comment_permalink_text', array($this, 'comment_link'));
	}

	public function boxes() {
		return array(
			'ncd_profiles',
			'ncd_uber_tabs');	
	}

	protected function fonts() {
		return array(
			'roboto' => array(
				'name' => 'Roboto Slab',
				'family' => '"Roboto Slab", Georgia, serif',
				'mu' => 2.12),
			'pacifico' => array(
				'name' => 'Pacifico',
				'family' => '"Pacifico", Georgia, serif',
				'mu' => 2.48));
	}

	public function webfont() {
		$this->f = apply_filters($this->_class. '_google_fonts', false);
		return !empty($this->d['font']) && (((!empty($this->d['font']['font']) && ($this->d['font']['font'] == 'roboto' || $this->d['font']['font'] == 'pacifico')) || (!empty($this->d['font']['font2']) && ($this->d['font']['font2'] == 'roboto' || $this->d['font']['font2'] == 'pacifico')) || (!empty($this->d['font']['font3']) && ($this->d['font']['font3'] == 'roboto' || $this->d['font']['font3'] == 'pacifico'))) || is_array($this->f)) ?
			'//cdnjs.cloudflare.com/ajax/libs/webfont/1.3.0/webfont.js' : false;
	}

	public function webfont_js() {
		$r = $p = false;
		if (empty($this->d['font']) && !is_array($this->f)) return;
		if (!is_array($this->f)) {
			$r = (!empty($this->d['font']['font']) && $this->d['font']['font'] == 'roboto') || (!empty($this->d['font']['font2']) && $this->d['font']['font2'] == 'roboto') || (!empty($this->d['font']['font3']) && $this->d['font']['font3'] == 'roboto') ? true : false;
			$p = (!empty($this->d['font']['font']) && $this->d['font']['font'] == 'pacifico') || (!empty($this->d['font']['font2']) && $this->d['font']['font2'] == 'pacifico') || (!empty($this->d['font']['font3']) && $this->d['font']['font3'] == 'pacifico') ? true : false;
		}
		echo
			"<script>\n",
			"WebFont.load({\n",
			"\tgoogle: { families: [", (is_array($this->f) ? "'". implode("', '", $this->f). "'" : (($r ? "'Roboto Slab:400,300'". ($p ? ', ' : '') : ''). ($p ? "'Pacifico'" : ''))), "] },\n",
			"\ttimeout: 2000\n",
			"});\n",
			"</script>\n";
	}

	public function webfont_css() {
		return THESIS_USER_SKIN_URL. '/font-awesome.min.css';
	}

	protected function display() {
		global $thesis;
		return array(
			'display' => array(
				'type' => 'object_set',
				'select' => __('Select content to display:', 'nina_cross_promo'),
				'objects' => array(
					'post' => array(
						'type' => 'object',
						'label' => __('Posts', 'nina_cross_promo'),
						'fields' => array(
							'display' => array(
								'type' => 'checkbox',
								'options' => array(
									'author' => __('Author', 'nina_cross_promo'),
									'avatar' => __('Author avatar', 'nina_cross_promo'),
									'description' => __('Author description (Single and No Sidebars (Post) templates)', 'nina_cross_promo'),
									'twitter' => __('Author Twitter profile link', 'nina_cross_promo'),
									'date' => __('Date', 'nina_cross_promo'),
									'cats' => __('Categories', 'nina_cross_promo'),
									'tags' => __('Tags', 'nina_cross_promo'),
									'wp_featured_image_home' => __('WP featured image (Home template)', 'nina_cross_promo'),
									'wp_featured_image' => __('WP featured image (Single and No Sidebars (Post) templates)', 'nina_cross_promo'),
									'image' => __('Thesis post image (Single and No Sidebars (Post) templates)', 'nina_cross_promo'),
									'thumbnail' => __('Thesis thumbnail image (Home template)', 'nina_cross_promo'),
									'num_comments' => __('Number of comments', 'nina_cross_promo'),
									'comments' => __('Comments', 'nina_cross_promo')),
								'default' => array(
									'author' => true,
									'date' => true,
									'wp_featured_image' => true,
									'num_comments' => true,
									'comments' => true)))),
					'page' => array(
						'type' => 'object',
						'label' => __('Pages', 'nina_cross_promo'),
						'fields' => array(
							'display' => array(
								'type' => 'checkbox',
								'options' => array(
									'author' => __('Author', 'nina_cross_promo'),
									'avatar' => __('Author avatar', 'nina_cross_promo'),
									'description' => __('Author description', 'nina_cross_promo'),
									'twitter' => __('Author Twitter profile link', 'nina_cross_promo'),
									'wp_featured_image' => __('WP featured image', 'nina_cross_promo'),
									'image' => __('Thesis post image', 'nina_cross_promo'),
									'num_comments' => __('Number of comments', 'nina_cross_promo'),
									'comments' => __('Comments', 'nina_cross_promo')),
								'default' => array(
									'author' => true,
									'wp_featured_image' => true)))),
					'comments' => array(
						'type' => 'object',
						'label' => __('Comments', 'nina_cross_promo'),
						'fields' => array(
							'display' => array(
								'type' => 'checkbox',
								'options' => array(
									'date' => __('Comment date', 'nina_cross_promo'),
									'avatar' => __('Comment avatar', 'nina_cross_promo')),
								'default' => array(
									'date' => true,
									'avatar' => true)))),
					'promo' => array(
						'type' => 'object',
						'label' => __('Promo Bar', 'nina_cross_promo'),
						'fields' => array(
							'display' => array(
								'type' => 'checkbox',
								'options' => array(
									'promo_bar' => __('Full-width header promo bar (removing this will remove the promo text, too)', 'nina_cross_promo'),
									'promo' => __('Promo text', 'nina_cross_promo')),
								'default' => array(
									'promo_bar' => true,
									'promo' => true)))),
					'widgets' => array(
						'type' => 'object',
						'label' => __('Widgets', 'nina_cross_promo'),
						'fields' => array(
							'display' => array(
								'type' => 'checkbox',
								'options' => array(
									'sidebar' => __('Sidebar', 'nina_cross_promo'),
									'post' => __('After post (Single and No Sidebars (Post) templates)', 'nina_cross_promo'),
									'page' => __('After page (Page and No Sidebars (Page) templates)', 'nina_cross_promo')),
								'default' => array(
									'sidebar' => true)))),
					'misc' => array(
						'type' => 'object',
						'label' => __('Miscellaneous', 'nina_cross_promo'),
						'fields' => array(
							'display' => array(
								'type' => 'checkbox',
								'options' => array(
									'tagline' => __('Site tagline', 'nina_cross_promo'),
									'tabs' => __('Tabbed posts in sidebar', 'nina_cross_promo'),
									'prev_next' => __('Previous/next post links (Single and No Sidebars (Post) templates)', 'nina_cross_promo'),
									'attribution' => __('Skin attribution', 'nina_cross_promo'),
									'wp_admin' => __('WP admin link in footer', 'nina_cross_promo')),
								'default' => array(
									'tabs' => true,
									'prev_next' => true,
									'attribution' => true,
									'wp_admin' => true)))))));
	}

	protected function design() {
		global $thesis;
		$css = $thesis->api->css->options; // shorthand for all options available in the CSS API
		$fs = $thesis->api->css->font_size_color(); // the CSS API contains shorthand for font, size, and color options
		unset($fs['color']); // remove color controls
		return array(
			'colors' => $this->color_scheme(array(
				'id' => 'colors',
				'colors' => array(
					'c_primary_text' => __('Primary Text', 'nina_cross_promo'),
					'c_secondary_text' => __('Secondary Text', 'nina_cross_promo'),
					'c_links' => __('Links', 'nina_cross_promo'),
					'c_primary' => __('Primary', 'nina_cross_promo'),
					'c_secondary_dark' => __('Secondary Dark', 'nina_cross_promo'),
					'c_secondary_light' => __('Secondary Light', 'nina_cross_promo'),
					'c_accent_1' => __('Accent 1', 'nina_cross_promo'),
					'c_accent_2' => __('Accent 2', 'nina_cross_promo'),
					'c_bg' => __('Content Background', 'nina_cross_promo')),
				'default' => array(
					'c_primary_text' => '111111',
					'c_secondary_text' => '929292',
					'c_links' => '7994B0',
					'c_primary' => '2F3840',
					'c_secondary_dark' => '51606F',
					'c_secondary_light' => '93A3B5',
					'c_accent_1' => 'D1DBE6',
					'c_accent_2' => 'EFF1F3',
					'c_bg' => 'FFFFFF'),
				'scale' => array(
					'c_links' => '7B7B7B',
					'c_primary' => '383838',
					'c_secondary_dark' => '616161',
					'c_secondary_light' => 'A4A4A4',
					'c_accent_1' => 'DFDFDF',
					'c_accent_2' => 'F1F1F1'))),
			'elements' => array( // this is an object set containing all other design options for this Skin
				'type' => 'object_set',
				'label' => __('Layout, Fonts, Sizes, and More', 'nina_cross_promo'),
				'select' => __('Select a design element to edit:', 'nina_cross_promo'),
				'objects' => array(
					'layout' => array(
						'type' => 'object',
						'label' => __('Layout &amp; Dimensions', 'nina_cross_promo'),
						'fields' => array(
							'order' => array(
								'type' => 'radio',
								'options' => array(
									'' => __('Content on the left', 'nina_cross_promo'),
									'right' => __('Content on the right', 'nina_cross_promo'))),
							'width-content' => array(
								'type' => 'text',
								'width' => 'tiny',
								'label' => __('Content Width', 'nina_cross_promo'),
								'tooltip' => __('The default content column width is 600px.', 'nina_cross_promo'),
								'description' => 'px',
								'default' => 600),
							'width-sidebar' => array(
								'type' => 'text',
								'width' => 'tiny',
								'label' => __('Sidebar Width', 'nina_cross_promo'),
								'tooltip' => __('The default sidebar column width is 300px. The value you enter here is the width of the sidebar itself and does not include the spacing between the content column and the sidebar.', 'nina_cross_promo'),
								'description' => 'px',
								'default' => 300))),
					'font' => array(
						'type' => 'object',
						'label' => __('Font Settings', 'nina_cross_promo'),
						'fields' => array(
							'font1' => array_merge($css['font']['fields']['font-family'], array(
								'label' => __('Primary Font', 'nina_cross_promo'),
								'default' => 'helvetica')),
							'size' => array_merge($css['font']['fields']['font-size'], array(
								'label' => __('Primary Font Size', 'nina_cross_promo'),
								'default' => 16)),
							'font2' => array_merge($css['font']['fields']['font-family'], array(
								'label' => __('Headlines and Sub-headlines', 'nina_cross_promo'),
								'default' => 'georgia')),
							'font3' => array_merge($css['font']['fields']['font-family'], array(
								'label' => __('Site Title and Accent Font', 'nina_cross_promo'),
								'default' => 'georgia')))),
					'menu' => array(
						'type' => 'object',
						'label' => __('Nav Menu', 'nina_cross_promo'),
						'fields' => $fs),
					'sidebar' => array(
						'type' => 'object',
						'label' => __('Sidebar', 'nina_cross_promo'),
						'fields' => $fs))));
	}

	protected function css_variables() {
		global $thesis;
		// Colors
		foreach (array('c_primary_text', 'c_secondary_text', 'c_links', 'c_primary', 'c_secondary_dark', 'c_secondary_light', 'c_accent_1', 'c_accent_2', 'c_bg') as $color)
			$vars[$color] = !empty($this->design[$color]) ? $thesis->api->colors->css($this->design[$color]) : false;
		// Layout and font variables
		$order = !empty($this->design['layout']['order']) && $this->design['layout']['order'] == 'right' ? true : false;
		$px['w_content'] = !empty($this->design['layout']['width-content']) && is_numeric($this->design['layout']['width-content']) ?
			abs($this->design['layout']['width-content']) : 600;
		$px['w_sidebar'] = !empty($this->design['layout']['width-sidebar']) && is_numeric($this->design['layout']['width-sidebar']) ?
			abs($this->design['layout']['width-sidebar']) : 300;
		$vars['font1'] = $thesis->api->fonts->family($font = !empty($this->design['font']['font1']) ?
			$this->design['font']['font1'] : 'helvetica');
		$vars['font2'] = $thesis->api->fonts->family($font2 = !empty($this->design['font']['font2']) ?
			$this->design['font']['font2'] : 'georgia');
		$vars['font3'] = $thesis->api->fonts->family($font3 = !empty($this->design['font']['font3']) ?
			$this->design['font']['font3'] : 'georgia');
		// Determine typographical scale and layout spacing based on primary font and font size
		$f['content'] = $this->scale($s['content'] = !empty($this->design['font']['size']) ? $this->design['font']['size'] : 16);
		$x['content'] = $this->space($h['content'] = $thesis->api->typography->height($s['content'], $px['w_content'], $font));
		// Set up an array containing numerical values that require a unit (px, in this case) for CSS output
		foreach ($f['content'] as $type => $val)
			$px[$type] = $val;
		// h2, h3, and h4 vars are optimized for headline font; h5 and h6 for primary font
		foreach (array('f2', 'f3', 'f4') as $heading)
			$px['h'. trim($heading, 'f')] = round($thesis->api->typography->height($px[$heading], $px['w_content'], $font2));
		$px['h5'] = round($h['content']);
		$px['h6'] = round($thesis->api->typography->height($px['f6'], $px['w_content'], $font));
		foreach ($x['content'] as $dim => $value)
			$px[$dim] = $value;
		// Compute total layout width
		$px['w_total'] = $px['w_content'] + $px['w_sidebar'] + $px['x2'];
		// Determine sidebar font, size and typographical scale, spacing, and associated px unit array
		$sidebar_font = !empty($this->design['sidebar']['font']) ? $this->design['sidebar']['font'] : $font;
		$f['sidebar'] = $this->scale($s['sidebar'] = !empty($this->design['sidebar']['font-size']) ?
			$this->design['sidebar']['font-size'] : $px['f6']);
		$x['sidebar'] = $this->space($h['sidebar'] = $thesis->api->typography->height($s['sidebar'],
			($w['sidebar'] = $px['w_sidebar'] - (2 * $thesis->api->typography->height($s['sidebar'],
				$px['w_sidebar'] - 2 * $f['sidebar']['f3'], $sidebar_font))), $sidebar_font));
		foreach ($x['sidebar'] as $dim => $value)
			$px["s$dim"] = $value;
		// Set up a modification array for individual typograhical overrides
		$elements = array(
			'menu' => array(
				'font-family' => false,
				'font-size' => $px['f6']),
			'sidebar' => array(
				'font-family' => false,
				'font-size' => $f['sidebar']['f5']),
			'sidebar_heading' => array(
				'font-family' => $font2,
				'font-size' => $f['sidebar']['f4']));
		// Loop through the modification array to see if any fonts or sizes need to be overridden
		foreach ($elements as $name => $element) {
			foreach ($element as $p => $def)
				$e[$name][$p] = $p == 'font-family' ?
					(!empty($this->design[$name][$p]) ?
						"$p: ". $thesis->api->fonts->family($family[$name] = $this->design[$name][$p]). ';' : (!empty($def) ?
						"$p: ". $thesis->api->fonts->family($family[$name] = $def). ';' : false)) : ($p == 'font-size' ?
					(!empty($this->design[$name][$p]) && is_numeric($this->design[$name][$p]) ?
						"$p: ". ($size[$name] = $this->design[$name][$p]). "px;" : (!empty($def) ?
						"$p: ". ($size[$name] = $def). "px;" : false)) : false);
			$e[$name] = array_filter($e[$name]);
		}
		foreach (array_filter($e) as $name => $element)
			$vars[$name] = implode("\n\t", $element);
		// Individual content elements
		$vars['col1'] = $order ? 'right' : 'left';
		$vars['col2'] = $order ? 'left' : 'right';
		$vars['w_submenu'] = ($w_submenu = $size['menu'] * 14). "px";
		$vars['menu'] .= "\n\tline-height: ". round($thesis->api->typography->height($size['menu'], $w_submenu, !empty($family['menu']) ? $family['menu'] : $font)). "px;";
		$vars['pullquote'] = round($thesis->api->typography->height($px['f3'], round(0.45 * $px['w_content']), $font)). "px";
		$vars['pre'] = round($thesis->api->typography->height($s['content'], $px['w_content'] - $px['x2'], 'consolas')). "px";
		$vars['avatar'] = ($order ? 'right' : 'left'). ": -{$px['x2']}px;";
		foreach (array(2, 3, 4) as $factor)
			if (($bio_size = $factor * $px['h5']) <= 96)
				$bio = $bio_size;
		$vars['bio_avatar'] =
			"width: {$bio}px;\n\t".
			"height: {$bio}px;";
		// Adjust sidebar line heights per chosen fonts and sizes
		$vars['sidebar'] .= "\n\tline-height: ". round($thesis->api->typography->height($size['sidebar'], $w['sidebar'], $sidebar_font)). "px;";
		$vars['sidebar_heading'] .= "\n\tline-height: ". round($thesis->api->typography->height($size['sidebar_heading'], $w['sidebar'], $font2)). "px;";
		// Add the 'px' unit to the $px array constructed above by using the CSS API
		$vars = is_array($px) ? array_merge($vars, $thesis->api->css->unit($px)) : $vars;
		return array_filter($vars);
	}

	protected function header_image() {
		return 300;
	}

	public function filter_css($css) {
		return $css. (!empty($this->header_image) ?
		"#thesis_header_image {\n".
		"\tdisplay: inline-block;\n".
		"\tfloat: left;\n".
		"}\n".
		"#header #site_title a, #header #site_tagline {\n".
		"\tdisplay: none;\n".
		"}\n" : '');
	}

	public function meta_viewport() {
		return 'width=device-width';
	}

	public function prev_next() {
		global $wp_query;
		return (($wp_query->is_home || $wp_query->is_archive || $wp_query->is_search) && $wp_query->max_num_pages > 1) || ($wp_query->is_single && !empty($this->display['misc']['display']['prev_next'])) ? true : false;
	}

	public function comment_link() {
		return "&#xf0c1;";
	}

	// Modified typography methods for high-precision layouts

	public function scale($size) {
		$phi = (1 + sqrt(5)) / 2;
		return empty($size) || !is_numeric($size) ? false : array(
			'f1' => round($size * pow($phi, 2)),
			'f2' => round($size * pow($phi, 1.5)),
			'f3' => round($size * $phi),
			'f4' => round($size * sqrt($phi)),
			'f5' => $size,
			'f6' => round($size * (1 / sqrt($phi))));
	}

	public function space($height) {
		return empty($height) || !is_numeric($height) ? false : array(
			'x1' => ($height = round($height)),
			'x05' => ($half = round($height / 2)),
			'x025' => round($height / 4),
			'x15' => $height + $half,
			'x2' => $height * 2);
	}
}