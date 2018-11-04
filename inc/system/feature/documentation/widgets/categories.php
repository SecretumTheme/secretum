<?php
/**
 * Extend WordPress Widget Class
 * Displays categories from the 'documention' post_type
 *
 * @package WordPress
 * @subpackage Secretum_Theme
 */

/**
 * Build Custom Widget
 */
if(!class_exists('SecretumCategoriesWidget'))
{
	class SecretumCategoriesWidget extends WP_Widget
	{
		/**
		 * Register widget with WordPress.
		 */
		function __construct()
		{
			parent::__construct(
				// Widget Base ID
				'secretum_documentation_categories_widget',

				// Widget Name
				__('Documentation Categories', 'secretum'),

				// Widget Options
				array(
					'description' 	=> __('Display a list or dropdown menu of Documentation categories', 'secretum'),
					'classname' 	=> 'documentation_categories_widget'
				)
			);

			// Set Taxonomy Name
			$this->taxonomy = 'documentation_category';

			// Set Widget Input Title
			$this->widget_title = __('Categories', 'secretum');
		}


		/**
		 * Front-end display of widget
		 *
		 * @param array $args Widget arguments
		 * @param array $instance Saved values from database
		 */
		public function widget($args, $instance)
		{
			// Set Title
			$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);

			// Before Widget
			echo (!empty($args['before_widget'])) ? $args['before_widget'] : '';

			// Before & After Title
			$before_title = (!empty($args['before_title'])) ? $args['before_title'] : '';
			$after_title = (!empty($args['after_title'])) ? $args['after_title'] : '';

			// Widget Title
			echo $before_title . $title . $after_title;

			// Build Category Args
			$args = array(
				'title_li' 		=> '',
				'orderby' 		=> 'name',
				'taxonomy' 		=> $this->taxonomy,
				'show_count' 	=> (! empty($instance['count'])) ? '1' : '0'
			);


			// Dropdown
			if (!empty($instance['dropdown'])) {
				$dropdown_id = esc_attr("{$this->id_base}-dropdown-{$this->number}");

				echo '<label class="screen-reader-text" for="' . $dropdown_id . '">' . $title . '</label>';
				echo '<form action="' . get_bloginfo('url') . '" method="get">';
					wp_dropdown_categories(apply_filters('widget_categories_dropdown_args', $args));
				echo '</form>';

			// Listing
			} else {
				echo '<ul class="list-group list-group-flush pl-2">';

				wp_list_categories(apply_filters('widget_categories_args', $args));

				echo '</ul>';
			}

			// After Widget
			echo (!empty($args['after_widget'])) ? $args['after_widget'] : '';
		}


		/**
		 * Back-end widget form
		 *
		 * @param array $instance Previously saved values from database
		 * @return string Backend widget form fields
		 */
		public function form($instance)
		{
			// Extact Vars
			extract($instance);


			// Text Field
			$title_id = esc_attr($this->get_field_id('title'));
			$title_name = esc_attr($this->get_field_name('title'));
			$title_value = !empty($title) ? esc_attr($title) : '';

			echo '<p><label for="' . $title_id . '">' . __('Title:', 'secretum') . '</label>';
			echo '<input class="widefat" id="' . $title_id . '" name="' . $title_name . '" type="text" value="' . $title_value . '" /></p>';


			// Hidden Input
			$taxonomy_id = esc_attr($this->get_field_id('taxonomy'));
			$taxonomy_name = esc_attr($this->get_field_name('taxonomy'));

			echo '<input type="hidden" name="' . $taxonomy_name . '" value="' . $this->taxonomy . '" id="' . $taxonomy_id . '" />';


			// Checkbox
			$dropdown_id = esc_attr($this->get_field_id('dropdown'));
			$dropdown_name = esc_attr($this->get_field_name('dropdown'));
			$dropdown = isset($instance['dropdown']) ? (bool) $instance['dropdown'] : false;

			echo '<p><input class="checkbox " id="' . $dropdown_id . '" name="' . $dropdown_name . '" type="checkbox" value="1"' . checked($dropdown, 1, false) . '> ';
			echo '<label for="' . $dropdown_id . '">' . __('Display as dropdown', 'secretum') . '</label></p>';


			// Checkbox
			$count_id = esc_attr($this->get_field_id('count'));
			$count_name = esc_attr($this->get_field_name('count'));
			$count = isset($instance['count']) ? (bool) $instance['count'] : false;

			echo '<p><input class="checkbox " id="' . $count_id . '" name="' . $count_name . '" type="checkbox" value="1"' . checked($count, 1, false) . '> ';
			echo '<label for="' . $count_id . '">' . __('Show post counts', 'secretum') . '</label></p>';
		}


		/**
		 * Sanitize widget form values as they are saved
		 *
		 * @param array $new_instance Values just sent to be saved
		 * @param array $old_instance Previously saved values from database
		 * @return array Updated safe values to be saved
		 */
		public function update($new_instance, $old_instance)
		{
			$instance 					= $old_instance;
			$instance['title'] 			= sanitize_text_field($new_instance['title']);
			$instance['taxonomy'] 		= stripslashes($new_instance['taxonomy']);
			$instance['count'] 			= ! empty($new_instance['count']) ? 1 : 0;
			$instance['dropdown'] 		= ! empty($new_instance['dropdown']) ? 1 : 0;

			return $instance;
		}
	}
}
