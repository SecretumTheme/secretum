<?php
/**
 * Secretum Theme: Extend WordPress Widget Class
 */
if (! defined('ABSPATH')) { exit; }

/**
 * Build Custom Widget
 */
if(!class_exists('SecretumRecentWidget'))
{
	class SecretumRecentWidget extends WP_Widget
	{
		/**
		 * Register widget with WordPress.
		 */
		function __construct()
		{
			parent::__construct(
				// Widget Base ID
				'documentation_recent_widget',

				// Widget Name
				esc_html__('Documentation Recent Updates', 'secretum'),

				// Widget Options
				array(
					'description' 	=> esc_html__('Set the number of recent Documentation updates to dipslay.', 'secretum'),
					'classname' 	=> 'documentation_recent_widget'
				)
			);

			// Set Widget Input Title
			$this->widget_title = esc_html__('Documentation Updates', 'secretum');
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
					'no_found_rows' 		=> true,
					'ignore_sticky_posts' 	=> true,
					'post_status' 			=> 'publish',
					'post_type' 			=> 'documentation',
					'posts_per_page'		=> isset($instance['number']) ? absint($instance['number']) : 5
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

				echo '<ul class="list-group list-group-flush pl-2">';

				while ($query->have_posts()) { $query->the_post();?>

					<li><a href="<?php the_permalink();?>"><?php get_the_title() ? the_title() : the_ID(); ?></a><?php if(!empty($instance['show_date'])) {?> <span class="post-date small"><?php echo get_the_date(); ?></span><?php }?></li>

				<?php
				}

				echo '</ul>';

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


			// Text Field
			$title_id = esc_attr($this->get_field_id('title'));
			$title_name = esc_attr($this->get_field_name('title'));
			$title_value = !empty($title) ? esc_attr($title) : '';

			echo '<p><label for="' . $title_id . '">' . __('Title:', 'secretum') . '</label>';
			echo '<input class="widefat" id="' . $title_id . '" name="' . $title_name . '" type="text" value="' . $title_value . '" /></p>';


			// Checkbox
			$number_id = esc_attr($this->get_field_id('number'));
			$number_name = esc_attr($this->get_field_name('number'));
			$number = isset($instance['number']) ? (int) $instance['number'] : '5';

			echo '<p><label for="' . $number_id . '">' . __('Number of posts to show', 'secretum') . '</label>';
			echo '<input class="widefat" id="' . $number_id . '" name="' . $number_name . '" type="number" value="' . $number . '"></p>';


			// Checkbox
			$show_date_id = esc_attr($this->get_field_id('show_date'));
			$show_date_name = esc_attr($this->get_field_name('show_date'));
			$show_date = isset($instance['show_date']) ? (bool) $instance['show_date'] : false;

			echo '<p><input id="' . $show_date_id . '" name="' . $show_date_name . '" type="checkbox" value="1"' . checked($show_date, 1, false) . '> ';
			echo '<label for="' . $show_date . '">' . __('Display post date?', 'secretum') . '</label></p>';
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
			$instance 				= $old_instance;
			$instance['number'] 	= (int) $new_instance['number'];
			$instance['title'] 		= sanitize_text_field($new_instance['title']);
			$instance['show_date'] 	= isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;

			return $instance;
		}
	}
}
