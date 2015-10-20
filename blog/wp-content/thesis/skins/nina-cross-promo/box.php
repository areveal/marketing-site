<?php
class ncd_profiles extends thesis_box {
	private $ns = 'nina_cross_promo';

	protected function translate() {
		$this->title = $this->name = __('Promo Social Media Profiles', 'nina_cross_promo');
	}

	protected function construct() {
		$this->profiles = array(
			'twitter' => array(
				'label' => __('Twitter', 'nina_cross_promo')),
			'facebook' => array(
				'label' => __('Facebook', 'nina_cross_promo')),
			'google-plus' => array(
				'label' => __('Google+', 'nina_cross_promo')),
			'instagram' => array(
				'label' => __('Instagram', 'nina_cross_promo')),
			'pinterest' => array(
				'label' => __('Pinterest', 'nina_cross_promo')),
			'youtube' => array(
				'label' => __('YouTube', 'nina_cross_promo')),
			'tumblr' => array(
				'label' => __('Tumblr', 'nina_cross_promo')),
			'rss'  => array(
				'label' => __('RSS', 'nina_cross_promo')),
/*			'envelope'  => array(
				'label' => __('Email', 'nina_cross_promo'))*/);
	}

	protected function html_options() {
		global $thesis;
		return $thesis->api->html_options();
	}

	protected function class_options() {
		$options = array();
		foreach ($this->profiles as $profile => $fields)
			$options = array_merge($options, array(
				$profile => array(
					'type' => 'text',
					'label' => sprintf(__('%s URL', 'nina_cross_promo'), $fields['label']),
					'width' => 'long')));
//		$options['envelope']['label'] = __('Email Address', 'nina_cross_promo');
		return $options;
	}

	protected function options() {
		$options = array();
		foreach ($this->class_options as $profile => $value)
			if (!empty($value))
				$options[$profile] = $this->profiles[$profile]['label'];
		return !empty($options) ? array(
			'profiles' => array(
				'type' => 'checkbox',
				'label' => __('Select Profile Links to Show', 'nina_cross_promo'),
				'options' => $options)) : false;
	}

	public function html($args = array()) {
		global $thesis;
		extract($args = is_array($args) ? $args : array());
		$tab = str_repeat("\t", $depth = !empty($depth) ? $depth : 0);
		$profiles = '';
		if (!empty($this->options['profiles']))
			foreach ($this->options['profiles'] as $profile => $value)
				$profiles .= !empty($this->class_options[$profile]) ?
					"$tab\t<a class=\"profile-icon icon-$profile\" href=\"". esc_url($this->class_options[$profile]). "\"></a>\n" : '';
		echo !empty($profiles) ?
			"$tab<div". (!empty($this->options['id']) ? ' id="'. trim($thesis->api->esc($this->options['id'])). '"' : ''). ' class="profile-icons'. (!empty($this->options['class']) ? ' '. trim($thesis->api->esc($this->options['class'])) : ''). "\">\n".
			$profiles.
			"$tab</div>\n" : '';
	}
}

class ncd_uber_tabs extends thesis_box {
	private $ns = 'nina_cross_promo';

	protected function translate() {
		$this->title = __('Tabbed Posts', 'nina_cross_promo');
	}

	protected function options() {
		$options_later = array();
		foreach (get_object_taxonomies('post', 'objects') as $tax_name => $tax_obj) {
			$t_options['category'] = !empty($tax_obj->label) ? $tax_obj->label : (!empty($tax_obj->labels->name) ? $tax_obj->labels->name : 'category');
			$options_later['category_term'] = array(
				'type' => 'select',
				'label' => sprintf(__('Select Category for Favorites List:', 'nina_cross_promo'), $t_options['category']));
			$get_terms = get_terms('category', array(
				'number' => 50,
				'orderby' => 'count',
				'order' => 'DESC'));
			$options_later['category_term']['options'][''] = sprintf(__('Select Category', 'nina_cross_promo'), $t_options['category']);
			foreach ($get_terms as $term_obj)
				$options_later['category_term']['options'][$term_obj->term_id] = (!empty($term_obj->name) ?
					$term_obj->name :
					$term_obj->term_id);
		}
		$options_grouped['post_group'] = array(
			'type' => 'group',
			'fields' => $options_later);
		foreach ($options_grouped as $name => $make)
			$options[$name] = $make;
		$options['num_posts'] = array(
			'type' => 'text',
			'width' => 'tiny',
			'label' => __('Number of Posts to Show', 'nina_cross_promo'),
			'default' => 5);
		return array_merge(array(
			'title' => array(
				'type' => 'text',
				'label' => __('Title', 'nina_cross_promo'),
				'tooltip' => __('Optionally add a title to the top of the Tabbed Box.', 'nina_cross_promo'))), $options);
	}

	public function preload() {
		wp_enqueue_script('jquery');
		add_filter('thesis_footer_scripts', array($this, 'js'));
	}

	public function js($scripts) {
		$scripts[$this->_class] =
			"<script type=\"text/javascript\">\n".
			"jQuery(document).ready(function($) {\n".
			"\t$('.tab').click(function() {\n".
			"\t\t$('.active').removeClass('active');\n".
			"\t\t$(this).addClass('active');\n".
			"\t\t$('.posts_active').removeClass('posts_active');\n".
			"\t\t$('#' + $(this).data('tab')).addClass('posts_active');\n".
			"\t});\n".
			"});\n".
			"</script>\n";
		return $scripts;
	}

	public function html($args = array()) {
		global $thesis;
		extract($args = is_array($args) ? $args : array());
		$tab = str_repeat("\t", $depth = !empty($depth) ? $depth : 0);
		$tabs = array(
			1 => __('Recent', 'nina_cross_promo'),
			2 => __('Popular', 'nina_cross_promo'),
			3 => __('Favorites', 'nina_cross_promo'));
		$post_count = !empty($this->options['num_posts']) && is_numeric($this->options['num_posts']) ? round($this->options['num_posts']) : 5;
		$titles = $content = '';
		foreach ($tabs as $t => $title) {
			$items = '';
			$titles .= "$tab\t\t<li class=\"tab". ($t == 1 ? ' active' : ''). "\" data-tab=\"posts_$t\">$title</li>\n";
			if ($t == 1)
				foreach (wp_get_recent_posts(array('numberposts' => $post_count, 'post_status' => 'publish')) as $recent)
					$items .= "$tab\t\t<li><a href=\"". get_permalink($recent['ID']). '" title="'. esc_attr($recent['post_title']). "\">{$recent['post_title']}</a></li>\n";
			elseif ($t == 2) {
				$popular_articles = new WP_Query(array(
					'orderby' => 'comment_count',
					'posts_per_page' => $post_count));
				while ($popular_articles->have_posts()) {
					$popular_articles->the_post();
					$items .= "$tab\t\t<li><a href=\"". get_permalink(). '" title="'. the_title_attribute('echo=0'). '">'. the_title_attribute('echo=0'). "</a></li>\n";
				}
			}
			elseif ($t == 3) {
				$cat = new WP_Query(array(
					'cat' => !empty($this->options['category_term']) ? $this->options['category_term'] : false,
					'posts_per_page' => $post_count));
				while ($cat->have_posts()) {
					$cat->the_post();
					$items .= "$tab\t\t<li><a href=\"". get_permalink(). '" title="'. the_title_attribute('echo=0'). '">'. get_the_title(). "</a></li>\n";
				}
			}
			$content .=
				"$tab\t<ul id=\"posts_$t\" class=\"tabbed_posts". ($t == 1 ? ' posts_active' : ''). "\">\n".
				$items.
				"$tab\t</ul>\n";
		}
		echo
			"$tab<div class=\"widget widget_tabbed_posts\">\n",
			(!empty($this->options['title']) ?
				"$tab\t<p class=\"widget_title\">". stripslashes($this->options['title']). "</p>\n" : ''),
			"$tab\t<ul class=\"tabs clear\">\n",
			$titles,
			"$tab\t</ul>\n",
			$content,
			"$tab</div>\n";
	}
}