<?php
/**
 * Secretum Text Translation Strings
 *
 * @package    Secretum
 * @subpackage Core\Classes\Customizer\TransTrait
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-trait-translations.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Text Translation Strings
 *
 * @since 1.0.0
 */
trait Trait_Translations {
	/**
	 * Text Strings Labels & Default Values
	 *
	 * @since 1.0.0
	 */
	final public function defaults() {
		return [
			'primary_nav_aria_label_text'  => [
				'label'   => __( 'Primary Nav Aria Label Text', 'secretum' ),
				'default' => __( 'Main', 'secretum' ),
			],
			'primary_nav_toggler_aria_label_text'  => [
				'label'   => __( 'Toggler Aria Label Text', 'secretum' ),
				'default' => __( 'Toggle navigation', 'secretum' ),
			],
			'primary_nav_toggler_text'     => [
				'label'   => __( 'Toggler Text Next To Toggler Icon (enables if defined)', 'secretum' ),
				'default' => '',
			],
			'continue_reading_text'        => [
				'label'   => __( 'Archive Continue Reading Text', 'secretum' ),
				'default' => __( 'Continue Reading...', 'secretum' ),
			],
			'read_more_text'               => [
				'label'   => __( 'Entry Read More <!--more--> Text', 'secretum' ),
				'default' => __( 'Read More...', 'secretum' ),
			],
			'meta_categories_text'         => [
				'label'   => __( 'Post Meta Categories Text', 'secretum' ),
				'default' => __( 'Posted in', 'secretum' ),
			],
			'meta_tags_text'               => [
				'label'   => __( 'Post Meta Tag Text', 'secretum' ),
				'default' => __( 'Tagged', 'secretum' ),
			],
			'meta_leave_comment_text'      => [
				'label'   => __( 'Post Meta Leave Comment Text', 'secretum' ),
				'default' => __( 'Leave a comment', 'secretum' ),
			],
			'meta_one_comment_text'        => [
				'label'   => __( 'Post Meta One Comment Text', 'secretum' ),
				'default' => __( '1 Comment', 'secretum' ),
			],
			'meta_comments_text'           => [
				'label'   => __( 'Post Meta Multiple Comments Text', 'secretum' ),
				'default' => __( 'Comments', 'secretum' ),
			],
			'content_pages_text'           => [
				'label'   => __( 'Posts With Pages Text', 'secretum' ),
				'default' => __( 'Pages:', 'secretum' ),
			],
			'post_navigation_screenreader' => [
				'label'   => __( 'Post Navigation Screen Reader Text', 'secretum' ),
				'default' => __( 'Post navigation', 'secretum' ),
			],
			'post_navigation_prev_text'    => [
				'label'   => __( 'Previous Post Text', 'secretum' ),
				'default' => __( 'Previous Post', 'secretum' ),
			],
			'post_navigation_next_text'    => [
				'label'   => __( 'Next Post Text', 'secretum' ),
				'default' => __( 'Next Post', 'secretum' ),
			],
			'pagination_screenreader'      => [
				'label'   => __( 'Pagination Screen Reader Text', 'secretum' ),
				'default' => __( 'Page navigation', 'secretum' ),
			],
			'pagination_prev_text'         => [
				'label'   => __( 'Previous Page Text', 'secretum' ),
				'default' => __( 'Previous', 'secretum' ),
			],
			'pagination_next_text'         => [
				'label'   => __( 'Next Page Text', 'secretum' ),
				'default' => __( 'Next', 'secretum' ),
			],
			'search_button_placeholder'    => [
				'label'   => __( 'Search Button Placeholder Text', 'secretum' ),
				'default' => __( 'Search our site...', 'secretum' ),
			],
			'search_button_text'           => [
				'label'   => __( 'Search Button Text', 'secretum' ),
				'default' => __( 'Search Us!', 'secretum' ),
			],
			'navbar_search_button_text'    => [
				'label'   => __( 'Navbar Search Button Placeholder Text', 'secretum' ),
				'default' => __( 'Search our site...', 'secretum' ),
			],
			'navbar_search_button_title'   => [
				'label'   => __( 'Navbar Search Button Title Text', 'secretum' ),
				'default' => __( 'Press Enter To Search...', 'secretum' ),
			],
			'search_results_text'          => [
				'label'   => __( 'Search Results Text', 'secretum' ),
				'default' => __( 'Search Results for:', 'secretum' ),
			],
			'comments_older'               => [
				'label'   => __( 'Comment Nav Older Comments', 'secretum' ),
				'default' => __( '&larr; Older Comments', 'secretum' ),
			],
			'comments_newer'               => [
				'label'   => __( 'Comment Nav Newer Comments', 'secretum' ),
				'default' => __( 'Newer Comments &rarr;', 'secretum' ),
			],
			'comments_title_single'        => [
				'label'   => __( 'Comments Title', 'secretum' ),
				'default' => __( 'One thought on', 'secretum' ),
			],
			'comments_title_thought'       => [
				'label'   => __( 'Comments Title Single Comment', 'secretum' ),
				'default' => __( 'thought on', 'secretum' ),
			],
			'comments_title_thoughts'      => [
				'label'   => __( 'Comments Title Multiple Comments', 'secretum' ),
				'default' => __( 'thoughts on', 'secretum' ),
			],
			'comments_closed'              => [
				'label'   => __( 'Comments Closed', 'secretum' ),
				'default' => __( 'Comments are currently closed.', 'secretum' ),
			],
			'comments_required'            => [
				'label'   => __( 'Indicates Required Field', 'secretum' ),
				'default' => __( 'Indicates Required Field', 'secretum' ),
			],
			'commenter_name'               => [
				'label'   => __( 'Comment Form Name Label', 'secretum' ),
				'default' => __( 'Name', 'secretum' ),
			],
			'commenter_email'              => [
				'label'   => __( 'Comment Form Email Label', 'secretum' ),
				'default' => __( 'Email', 'secretum' ),
			],
			'commenter_website'            => [
				'label'   => __( 'Comment Form Website Label', 'secretum' ),
				'default' => __( 'Website', 'secretum' ),
			],
			'commenter_comment'            => [
				'label'   => __( 'Comment Form Comment Label', 'secretum' ),
				'default' => __( 'Comment', 'secretum' ),
			],
			'comment_privacy'              => [
				'label'   => __( 'Comment Email Privacy Notice', 'secretum' ),
				'default' => __( 'Your email address will not be published.', 'secretum' ),
			],
			'comment_add_title'            => [
				'label'   => __( 'Add Comment Button Text', 'secretum' ),
				'default' => __( 'Add Your Comment', 'secretum' ),
			],
			'comment_post_label'           => [
				'label'   => __( 'Post Comment Button Text', 'secretum' ),
				'default' => __( 'Post Your Comment', 'secretum' ),
			],
			'author_about_text'            => [
				'label'   => __( 'Author About Text', 'secretum' ),
				'default' => __( 'About:', 'secretum' ),
			],
			'author_website_text'          => [
				'label'   => __( 'Author Website Text', 'secretum' ),
				'default' => __( 'Website:', 'secretum' ),
			],
			'author_profile_text'          => [
				'label'   => __( 'Author Profile Text', 'secretum' ),
				'default' => __( 'Profile:', 'secretum' ),
			],
			'author_posts_by_text'         => [
				'label'   => __( 'Author By Text', 'secretum' ),
				'default' => __( 'Posts by', 'secretum' ),
			],
			'author_posted_text'           => [
				'label'   => __( 'Author Posts Posted Text', 'secretum' ),
				'default' => __( 'Posted', 'secretum' ),
			],
			'author_categories_text'       => [
				'label'   => __( 'Author Posts Categories Text', 'secretum' ),
				'default' => __( 'in', 'secretum' ),
			],
			'nothing_found_title_text'     => [
				'label'   => __( 'Default No Content Title', 'secretum' ),
				'default' => __( 'Nothing Found', 'secretum' ),
			],
			'nothing_found_text'           => [
				'label'   => __( 'Default No Content Found', 'secretum' ),
				'default' => __( 'It seems we are unable find what you are looking for. Perhaps searching can help.', 'secretum' ),
			],
			'error_document_title'         => [
				'label'   => __( 'Error Document Title', 'secretum' ),
				'default' => __( 'Oops! That document could not be found.', 'secretum' ),
			],
			'error_document_text'          => [
				'label'   => __( 'Error Document Notice Text', 'secretum' ),
				'default' => __( 'It appears the document you requested no longer exists at this location. Try searching for the document below or browsing one of our other helpful links.', 'secretum' ),
			],
			'return_to_top_default'        => [
				'label'   => __( 'Default Return To Top Text', 'secretum' ),
				'default' => __( 'top ^', 'secretum' ),
			],
			'return_to_top_title'          => [
				'label'   => __( 'Return To Top Icon Title Attribute', 'secretum' ),
				'default' => __( 'Return to Top', 'secretum' ),
			],
		];

	}//end defaults()

}//end class
