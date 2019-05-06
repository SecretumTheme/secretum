<?php
/**
 * WordPress Pagination Display
 *
 * @package    Secretum
 * @subpackage Core\Classes\Pagination
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-pagination.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Initilize Pagination
 *
 * @see template-parts/nav/posts-pagination.php
 *
 * @example \Secretum\Pagination::instance($params);
 *
 * @since 1.0.0
 */
class Pagination {
	/**
	 * Instance Object
	 *
	 * @since 1.0.0
	 * @var object $instance
	 */
	protected static $instance = null;

	/**
	 * Post Query Object
	 *
	 * @since 1.0.0
	 * @var object $wp_query
	 */
	public $wp_query;

	/**
	 * Nav Aria Text Label
	 *
	 * @since 1.0.0
	 * @var string $nav_label
	 */
	public $nav_label;

	/**
	 * Previous << Text Label
	 *
	 * @since 1.0.0
	 * @var string $previous_label
	 */
	public $previous_label;

	/**
	 * Next >> Text Label
	 *
	 * @since 1.0.0
	 * @var string $next_label
	 */
	public $next_label;

	/**
	 * Current Previous Post URL
	 *
	 * @since 1.0.0
	 * @var string $previous_post_link
	 */
	public $previous_post_link;

	/**
	 * Current Next Post URL
	 *
	 * @since 1.0.0
	 * @var string $next_post_link
	 */
	public $next_post_link;


	/**
	 * Start Class
	 *
	 * @since 1.0.0
	 *
	 * @param object $wp_query WordPress Post Object.
	 * @param string $nav_label Nav Aria Text Label.
	 * @param string $previous_label Previous << Text Label.
	 * @param string $next_label Next >> Text Label.
	 */
	final public function init( $wp_query = null, $nav_label = '', $previous_label = '', $next_label = '' ) {
		// Required Call.
		if ( null !== $wp_query ) {
			// Set Vars.
			$this->wp_query           = $wp_query;
			$this->nav_label          = $this->get_nav_label( $nav_label );
			$this->previous_label     = $this->get_previous_label( $previous_label );
			$this->next_label         = $this->get_next_label( $next_label );
			$this->previous_post_link = esc_url( get_previous_posts_page_link() );
			$this->next_post_link     = esc_url( get_next_posts_page_link() );

			// Display Pagination Feature.
			$this->paginate();
		}

	}//end init()


	/**
	 * Open Nav
	 *
	 * @since 1.0.0
	 *
	 * @return string HTML.
	 */
	final private function nav_open() {
		return "<nav aria-label=\"{$this->nav_label}\" class=\"clearfix\">
					<ul class=\"pagination mt-4 float-right\">";

	}//end nav_open()


	/**
	 * Previous << Text Label
	 *
	 * @since 1.0.0
	 *
	 * @return string HTML.
	 */
	final private function previous_posts() {
		if ( get_previous_posts_link() ) {
			return "<li class=\"page-item\">
						<a class=\"page-link\" href=\"{$this->previous_post_link}\" aria-label=\"{$this->previous_label}\">
							<span aria-hidden=\"true\">&laquo;</span><span class=\"sr-only\">{$this->previous_label}</span>
						</a>
					</li><!-- .page-item -->";
		}

	}//end previous_posts()


	/**
	 * Display Pagination Feature
	 *
	 * @since 1.0.0
	 */
	final public function paginate() {
		// If Pages.
		if ( $this->paginate_check() ) {
			// Start Nav.
			$html = $this->nav_open();

			// Previous << Link.
			$html .= $this->previous_posts();

			// Build Link Items.
			$html .= $this->page_number_links();

			// Next >> Link.
			$html .= $this->next_posts();

			// End Nav.
			$html .= $this->nav_close();

			// Sanitize HTML.
			echo wp_kses(
				$html,
				[
					'ul'   => [
						'class' => true,
					],
					'li'   => [
						'class' => true,
					],
					'a'    => [
						'href'       => true,
						'class'      => true,
						'aria-label' => true,
					],
					'span' => [
						'aria-hidden' => true,
						'class'       => true,
					],
					'nav'  => [
						'aria-label' => true,
						'class'      => true,
						'style'      => true,
					],
				]
			);
		}

	}//end paginate()


	/**
	 * Check For Pages
	 *
	 * @since 1.0.0
	 *
	 * @return bool
	 */
	final private function paginate_check() {
		if ( true !== empty( $this->wp_query ) && true !== empty( $this->wp_query->max_num_pages ) && $this->wp_query->max_num_pages >= 1 ) {
			return true;
		}

	}//end paginate_check()


	/**
	 * Page Number Link Items
	 *
	 * @since 1.0.0
	 */
	final private function page_number_links() {
		$paginate_links = paginate_links(
			[
				'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
				'format'       => '?paged=%#%',
				'current'      => max( 1, get_query_var( 'paged' ) ),
				'total'        => $this->wp_query->max_num_pages,
				'type'         => 'array',
				'show_all'     => false,
				'end_size'     => 3,
				'mid_size'     => 1,
				'prev_next'    => false,
				'add_args'     => false,
				'add_fragment' => '',
			]
		);

		if ( true !== empty( $paginate_links ) ) {
			$html = '';

			foreach ( $paginate_links as $page ) {
				$item  = str_replace( 'page-numbers', 'page-link', $page );
				$html .= "<li class=\"page-item\">{$item}</li>";
			}

			return $html;
		}

	}//end page_number_links()


	/**
	 * Next >> Text Label
	 *
	 * @since 1.0.0
	 *
	 * @return string HTML.
	 */
	final private function next_posts() {
		if ( get_next_posts_link() ) {
			return "<li class=\"page-item\">
						<a class=\"page-link\" href=\"{$this->next_post_link}\" aria-label=\"{$this->next_label}\">
							<span aria-hidden=\"true\">&raquo;</span><span class=\"sr-only\">{$this->next_label}</span>
						</a>
					</li><!-- .page-item -->";
		}

	}//end next_posts()


	/**
	 * Close Nav
	 *
	 * @since 1.0.0
	 *
	 * @return string HTML.
	 */
	final private function nav_close() {
		return '</ul>
			</nav>';

	}//end nav_close()


	/**
	 * Get Nav Label
	 *
	 * @since 1.0.0
	 *
	 * @param string $nav_label Text For Posts Navigation.
	 *
	 * @return string HTML.
	 */
	final private function get_nav_label( $nav_label = '' ) {
		if ( true !== empty( $nav_label ) ) {
			return esc_html( $nav_label );
		} else {
			return secretum_text( 'pagination_screenreader' );
		}

	}//end get_nav_label()


	/**
	 * Get Previous Label
	 *
	 * @since 1.0.0
	 *
	 * @param string $previous_label Text For Previous Page.
	 *
	 * @return string HTML.
	 */
	final private function get_previous_label( $previous_label = '' ) {
		if ( true !== empty( $previous_label ) ) {
			return esc_html( $previous_label );
		} else {
			return secretum_text( 'pagination_prev_text' );
		}

	}//end get_previous_label()


	/**
	 * Get Next Label
	 *
	 * @since 1.0.0
	 *
	 * @param string $next_label Text For Next Page.
	 *
	 * @return string HTML.
	 */
	final private function get_next_label( $next_label = '' ) {
		if ( true !== empty( $next_label ) ) {
			return esc_html( $next_label );
		} else {
			return secretum_text( 'pagination_next_text' );
		}

	}//end get_next_label()


	/**
	 * Create Instance
	 *
	 * @since 1.0.0
	 *
	 * @param object $wp_query WordPress Post Object.
	 * @return object $instance Instance Object.
	 */
	public static function instance( $wp_query = null ) {
		if ( null === self::$instance ) {
			self::$instance = new self();
			self::$instance->init( $wp_query );
		}

		return self::$instance;

	}//end instance()

}//end class
