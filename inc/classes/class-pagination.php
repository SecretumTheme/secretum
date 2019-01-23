<?php
/**
 * WordPress Pagination Display
 *
 * @package    Secretum
 * @subpackage Classes\Pagination
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-pagination.php
 */

namespace Secretum;

/**
 * Initilize Pagination
 *
 * @example \Secretum\Pagination::instance( $wp_query );
 * @example \Secretum\Pagination::instance( $wp_query, $nav_label, $previous_label, $next_label );
 * \Secretum\Pagination::instance(
 * 	$wp_query, 			(object WordPress Post Object.)
 * 	$nav_label, 		(string Nav Aria Text Label.)
 * 	$previous_label, 	(string Previous << Text Label.)
 * 	$next_label 		(string Next >> Text Label.)
 * );
 */
class Pagination {
	/**
	 * Instance Object
	 *
	 * @var object
	 */
	protected static $instance = null;

	/**
	 * Post Query Object
	 *
	 * @var object
	 */
	public $wp_query;

	/**
	 * Nav Aria Text Label
	 *
	 * @var string
	 */
	public $nav_label;

	/**
	 * Previous << Text Label
	 *
	 * @var string
	 */
	public $previous_label;

	/**
	 * Next >> Text Label
	 *
	 * @var string
	 */
	public $next_label;

	/**
	 * Current Previous Post URL
	 *
	 * @var string
	 */
	public $previous_post_link;

	/**
	 * Current Next Post URL
	 *
	 * @var string
	 */
	public $next_post_link ;


	/**
	 * Start Class
	 *
	 * @param object $wp_query WordPress Post Object.
	 * @param string $nav_label Nav Aria Text Label.
	 * @param string $previous_label Previous << Text Label.
	 * @param string $next_label Next >> Text Label.
	 */
	final public function init( $wp_query = null, $nav_label = '', $previous_label = '', $next_label = '' ) {
		// @ about Required Call.
		if ( null !== $wp_query ) {
			// Set Vars.
			$this->wp_query 			= $wp_query;
			$this->nav_label 			= ( empty( $nav_label ) ) ? esc_html__( 'Posts Navigation', 'secretum' ) : esc_html( $nav_label );
			$this->previous_label 		= ( empty( $previous_label ) ) ? esc_html__( 'Previous', 'secretum' ) : esc_html( $previous_label );
			$this->next_label 			= ( empty( $next_label ) ) ? esc_html__( 'Next', 'secretum' ) : esc_html( $next_label );
			$this->previous_post_link 	= esc_url( get_previous_posts_page_link() );
			$this->next_post_link 		= esc_url( get_next_posts_page_link() );

			// Display Pagination Feature.
			$this->paginate();
		}
	}


	/**
	 * Open Nav
	 *
	 * @return string HTML.
	 */
	final private function nav_open() {
		return "<nav aria-label=\"{$this->nav_label}\">
					<ul class=\"pagination\">";
	}


	/**
	 * Previous << Text Label
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
	}


	/**
	 * Display Pagination Feature
	 */
	final public function paginate() {
		// If Pages.
		if ( $this->paginate_check() ) {
			// Start Nav.
			$html = $this->nav_open();

			// Previous << Link.
			$html .= $this->previous_posts();

			// Build Link Items.
			$html .= $this->page_number_links( paginate_links(
				[
					'base' 			=> str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
					'format' 		=> '?paged=%#%',
					'current' 		=> max( 1, get_query_var( 'paged' ) ),
					'total' 		=> $this->wp_query->max_num_pages,
					'type' 			=> 'array',
					'show_all' 		=> false,
					'end_size' 		=> 3,
					'mid_size' 		=> 1,
					'prev_next' 	=> false,
					'add_args' 		=> false,
					'add_fragment' 	=> '',
				]
			) );

			// Next >> Link.
			$html .= $this->next_posts();

			// End Nav.
			$html .= $this->nav_close();

			// @ About Sanitize HTML.
			echo wp_kses(
				$html,
				[
					'ul' 	=> [
						'class' 		=> true,
					],
					'li' 	=> [
						'class' 		=> true,
					],
					'a' 	=> [
						'href' 			=> true,
						'class' 		=> true,
						'aria-label' 	=> true,
					],
					'span' 	=> [
						'aria-hidden' 	=> true,
						'class' 		=> true,
					],
					'nav' 	=> [
						'aria-label' 	=> true,
					],
				]
			);
		}// End if().
	}


	/**
	 * Check For Pages
	 *
	 * @return bool
	 */
	final private function paginate_check() {
		if ( ! empty( $this->wp_query ) && ! empty( $this->wp_query->max_num_pages ) && $this->wp_query->max_num_pages >= 1 ) {
			return true;
		}
	}


	/**
	 * Page Number Link Items
	 *
	 * @param array $paginate_links HTML Items.
	 */
	final private function page_number_links( $paginate_links = array() ) {
		if ( ! empty( $paginate_links ) ) {
			$html = '';

			foreach ( $paginate_links as $page ) {
				$item = str_replace( 'page-numbers', 'page-link', $page );
				$html .= "<li class=\"page-item\">{$item}</li>";
			}

			return $html;
		}
	}


	/**
	 * Next >> Text Label
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
	}


	/**
	 * Close Nav
	 *
	 * @return string HTML.
	 */
	final private function nav_close() {
		return '</ul>
			</nav>';
	}


	/**
	 * Create Instance
	 *
	 * @param object $wp_query WordPress Post Object.
	 * @return object $instance Instance Object.
	 */
	public static function instance( $wp_query = null ) {
		if ( ! self::$instance ) {
			self::$instance = new self();
			self::$instance->init( $wp_query );
		}

		return self::$instance;
	}
}
