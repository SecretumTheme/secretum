<?php
/**
 * Secretum Theme: Extend WordPress Widget Class
 */
if (! defined('ABSPATH')) { exit; }

/**
 * Build Custom Widget
 */
if(!class_exists('SecretumTestimonialQueryWidget'))
{
	class SecretumTestimonialQueryWidget extends WP_Widget
	{
		/**
		 * Register widget with WordPress.
		 */
		function __construct()
		{
			parent::__construct(
				// Widget Base ID
				'testimonials_query_widget',

				// Widget Name
				esc_html__('Testimonial Query', 'secretum'),

				// Widget Options
				array(
					'description' 	=> esc_html__('Display one or more testimonials in a selected order.', 'secretum'),
					'classname' 	=> 'testimonials_query_widget'
				)
			);

			// Default Settings
			$this->defaults = array(
				'title' 	=> '',
				'showposts' => '1',
				'disable' 	=> false
			);
		}


		/**
		 * Front-end display of widget
		 *
		 * @param array $args Widget arguments
		 * @param array $instance Saved values from database
		 */
		public function widget($args, $instance)
		{
			// Build Query
			$query = new WP_Query(
				array(
					'post_type' 	=> 'testimonial',
					'post_status' 	=> 'publish',
					'orderby' 		=> isset($instance['orderby']) ? esc_attr($instance['orderby']) : 'rand',
					'showposts' 	=> isset($instance['showposts']) ? absint($instance['showposts']) : 1
				)
			);


			// Query Posts
			if ($query->have_posts()) {
				// Before Widget
				echo (!empty($args['before_widget'])) ? $args['before_widget'] : '';

				// Set Title
				$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);

				// Before & After Title
				$before_title = (!empty($args['before_title'])) ? $args['before_title'] : '';
				$after_title = (!empty($args['after_title'])) ? $args['after_title'] : '';


				// Widget Title
				echo $before_title . $title . $after_title;

				while ($query->have_posts()) {
					$query->the_post();

					// Display Content
					if (isset($instance['disable']) && $instance['disable'] == true) {

						// Custom
						the_content();

					} else {

						// Default
						echo sprintf(
							'<blockquote class="mt-4" cite="http://a.uri.com/">"%s" <cite class="font-weight-bold">%s</cite></blockquote></p>',
							get_the_content(),
							get_the_title('', '')
						);

					}
				}

				// After Widget
				echo (!empty($args['after_widget'])) ? $args['after_widget'] : '';
			}
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
			$parse_args = wp_parse_args($instance, $this->defaults);
			extract($parse_args, EXTR_SKIP);


			// Text Field
			$title_id = esc_attr($this->get_field_id('title'));
			$title_name = esc_attr($this->get_field_name('title'));
			$title_value = !empty($title) ? esc_attr($title) : esc_html__('Testimonials', 'secretum');

			echo '<p><label for="' . $title_id . '">' . __('Title:', 'secretum') . '</label>';
			echo '<input class="widefat" id="' . $title_id . '" name="' . $title_name . '" type="text" value="' . $title_value . '" /></p>';


			// Select Dropdown
			$showposts_id = esc_attr($this->get_field_id('showposts'));
			$showposts_name = esc_attr($this->get_field_name('showposts'));

			echo '<p><select id="' . $showposts_id . '" name="' . $showposts_name . '">';
			echo '<option value="1"' . selected($showposts, 1, false) . '>' . __('1 Testimonial', 'secretum') . '</option>';
			echo '<option value="2"' . selected($showposts, 2, false) . '>' . __('2 Testimonials', 'secretum') . '</option>';
			echo '<option value="3"' . selected($showposts, 3, false) . '>' . __('3 Testimonials', 'secretum') . '</option>';
			echo '<option value="4"' . selected($showposts, 4, false) . '>' . __('4 Testimonials', 'secretum') . '</option>';
			echo '<option value="5"' . selected($showposts, 5, false) . '>' . __('5 Testimonials', 'secretum') . '</option>';
			echo '</select> <label for="' . $showposts_id . '">' . __('# to display', 'secretum') . '</label></p>';


			// Select Dropdown
			$orderby_id = esc_attr($this->get_field_id('orderby'));
			$orderby_name = esc_attr($this->get_field_name('orderby'));

			echo '<p><select id="' . $orderby_id . '" name="' . $orderby_name . '">';
			echo '<option value="rand"' . selected($orderby, 'rand', false) . '>' . __('Random Order', 'secretum') . '</option>';
			echo '<option value="none"' . selected($orderby, 'none', false) . '>' . __('No Order', 'secretum') . '</option>';
			echo '<option value="ID"' . selected($orderby, 'ID', false) . '>' . __('Order by ID', 'secretum') . '</option>';
			echo '<option value="date"' . selected($orderby, 'date', false) . '>' . __('Order by Date', 'secretum') . '</option>';
			echo '<option value="title"' . selected($orderby, 'title', false) . '>' . __('Order by Title', 'secretum') . '</option>';
			echo '<option value="name"' . selected($orderby, 'name', false) . '>' . __('Order by Slug', 'secretum') . '</option>';
			echo '</select> <label for="' . $orderby_id . '">' . __('Display order by', 'secretum') . '</label></p>';


			// Checkbox
			$disable_id = esc_attr($this->get_field_id('disable'));
			$disable_name = esc_attr($this->get_field_name('disable'));

			echo '<p><input class="checkbox " id="' . $disable_id . '" name="' . $disable_name . '" type="checkbox" value="1"' . checked($disable, 1, false) . '> ';
			echo '<label for="' . $disable_id . '">' . __('Disable default blockquote and cite wrap.', 'secretum') . '</label></p>';
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
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['disable'] = strip_tags($new_instance['disable']);
			$instance['orderby'] = strip_tags($new_instance['orderby']);
			$instance['showposts'] = strip_tags($new_instance['showposts']);
			return $instance;
		}
	}
}
