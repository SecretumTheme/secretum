<?php
/**
 * Extend WordPress Menu Nav Walker
 *
 * @package    Secretum
 * @author     SecretumTheme <author@secretumtheme.com>
 * @copyright  2018-2019 Secretum
 * @license    https://github.com/SecretumTheme/secretum/blob/master/license.txt GPL-2.0
 * @link       https://github.com/SecretumTheme/secretum/blob/master/inc/classes/class-navwalker.php
 * @since      1.0.0
 */

namespace Secretum;

/**
 * Customized Bootstrap 4 Navigation Walker For Secretum
 *
 * @since 1.0.0
 *
 * @source WP Bootstrap Navwalker
 * @version 4.2.0
 * @link https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 *
 * @see Walker_Nav_Menu
 * @link https://developer.wordpress.org/reference/classes/walker_nav_menu/
 *
 * @param string $setting_base Setting Base Name.
 * @param string $dropdown_classes Dropdown Class Names.
 * @param string $textual_classes Textual Class names.
 */
class Navwalker extends \Walker_Nav_Menu {
	/**
	 * Setting Base Name
	 *
	 * @var string
	 */
	public $setting_base;

	/**
	 * Dropdown Class Names
	 *
	 * @var string
	 */
	public $dropdown_classes;

	/**
	 * Textual Class names
	 *
	 * @var string
	 */
	public $textual_classes;


	/**
	 * Inject Settings
	 *
	 * @since 1.0.0
	 *
	 * @param string $setting_base Setting Base Name.
	 * @param string $dropdown_classes Dropdown Class Names.
	 * @param string $textual_classes Textual Class names.
	 */
	public function __construct( $setting_base = '', $dropdown_classes = '', $textual_classes = '' ) {
		$this->setting_base     = $setting_base;
		$this->dropdown_classes = $dropdown_classes;
		$this->textual_classes  = $textual_classes;

	}//end __construct()


	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 1.0.0
	 *
	 * @see Walker_Nav_Menu::start_lvl()
	 *
	 * @param string   $output Used to append additional content ( passed by reference ).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = [] ) {
		// Discard Item Spacing.
		if ( true === isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			// Set Spacing.
			$t = "\t";
			$n = "\n";

		}

		// Set Indent.
		$indent = str_repeat( $t, $depth );

		// Default class to add to the file.
		$classes = [ 'dropdown-menu' . $this->dropdown_classes ];

		/*
		 * Filters the CSS class( es ) applied to a menu list element.
		 * Documented in WordPress/wp-includes/class-walker-nav-menu.php.
		 */

		// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
		$css_classes = apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth );
		$class_names = join( ' ', $css_classes );

		if ( true === isset( $class_names ) ) {
			$ul_classes = ' class="' . esc_attr( $class_names ) . '"';
		} else {
			$ul_classes = '';
		}

		// Class .dropdown-menu labelledby.
		$labelledby = '';

		// find all links with an id in the output.
		preg_match_all( '/( <a.*?id=\"|\' )( .*? )\"|\'.*?>/im', $output, $matches );

		// with pointer at end of array check if we got an ID match.
		if ( true === end( $matches[2] ) ) {
			// build a string to use as aria-labelledby.
			$labelledby = 'aria-labelledby="' . end( $matches[2] ) . '"';
		}

		$output .= "{$n}{$indent}<ul{$ul_classes} {$labelledby} role=\"menubar\">{$n}";

	}//end start_lvl()


	/**
	 * Starts the element output.
	 *
	 * @since 1.0.0
	 *
	 * @see Walker_Nav_Menu::start_el()
	 *
	 * @param string   $output Used to append additional content ( passed by reference ).
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
		// Discard Item Spacing.
		if ( true === isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			// Set Spacing.
			$t = "\t";
			$n = "\n";

		}

		// Set Indent.
		if ( true === isset( $depth ) && true === is_int( $depth ) ) {
			$indent = str_repeat( $t, $depth );
		} else {
			$indent = '';
		}

		// Start Classes Array.
		if ( true !== empty( $item->classes ) ) {
			$classes = (array) $item->classes;
		} else {
			$classes = [];
		}

		// Initialize some holder variables to store specially handled item
		// wrappers and icons.
		$linkmod_classes = [];
		$icon_classes    = [];

		// Get an updated $classes array without linkmod or icon classes.
		// NOTE: linkmod and icon class arrays are passed by reference and
		// are maybe modified before being used later in this function.
		$classes = self::separate_linkmods_and_icons_from_classes( $classes, $linkmod_classes, $icon_classes, $depth );

		// Join any icon classes plucked from $classes into a string.
		$icon_class_string = join( ' ', $icon_classes );

		// Filters the arguments for a single nav menu item.
		// Documented in WordPress/wp-includes/class-walker-nav-menu.php.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		// Add .dropdown or .active classes where they are needed.
		if ( true !== empty( $args->has_children ) ) {
			$classes[] = 'dropdown';
		}

		if ( true === in_array( 'current-menu-item', $classes, true ) || true === in_array( 'current-menu-parent', $classes, true ) ) {
			$classes[] = 'active';
		}

		// Add some additional default classes to the item.
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'nav-item' . secretum_mod( $this->setting_base . '_dropdown_background_hover_color', 'attr', true );

		// Inject List Items Class.
		if ( true === isset( $args->items_class ) ) {
			$classes[] = wp_strip_all_tags( $args->items_class );
		}

		// Allow filtering the classes.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$classes = apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth );

		// Form a string of classes in format: class="class_names".
		$class_names = join( ' ', $classes );

		if ( true === isset( $class_names ) ) {
			$li_classes = 'role="none" class="' . esc_attr( $class_names ) . '"';
		} else {
			$li_classes = '';
		}

		// Filters the ID applied to a menu item's list item element.
		// Documented in WordPress/wp-includes/class-walker-nav-menu.php.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );

		if ( true !== empty( $id ) ) {
			$id = ' id="' . esc_attr( $id ) . '"';
		} else {
			$id = '';
		}

		// Item Divider & Spacing.
		$output .= $indent . '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"' . $id . $li_classes . '>';

		// initialize array for holding the $atts for the link item.
		$atts = [];

		// Set title from item to the $atts array - if title is empty then
		// default to item title.
		if ( true !== empty( $item->attr_title ) ) {
			$atts['title'] = $item->attr_title;
		} else {
			$atts['title'] = $item->title;
		}

		$atts['target'] = ( true !== empty( $item->target ) ) ? $item->target : '';
		$atts['rel']    = ( true !== empty( $item->xfn ) ) ? $item->xfn : '';

		// Divider Link Spacing.
		if ( true === isset( $args->divider ) ) {
			$spacing_classes = ' ' . wp_strip_all_tags( $args->divider );
		} else {
			$spacing_classes = '';
		}

		// Item has_children add atts.
		if ( true !== empty( $args->has_children ) && 0 === $depth && $args->depth > 1 ) {
			$atts['id']            = 'menu-item-dropdown-' . $item->ID;
			$atts['class']         = 'dropdown-toggle nav-link' . $spacing_classes;
			$atts['data-toggle']   = 'dropdown clickable';
			$atts['data-target']   = '#' . $atts['id'];
			$atts['aria-expanded'] = 'false';
			$atts['aria-haspopup'] = 'true';
			$atts['href']          = ( true !== empty( $item->url ) ) ? esc_url( $item->url ) : '#';
		} else {
			// No Child: Set URL.
			$atts['href'] = ( true !== empty( $item->url ) ) ? esc_url( $item->url ) : '#';

			// No Child: Dropdown, use .dropdown-item.
			if ( $depth > 0 ) {
				$atts['class'] = 'dropdown-item' . $this->textual_classes;
			} else {
				// No Child: Default, use .nav-link.
				$atts['class'] = 'nav-link' . $spacing_classes;

			}
		}

		// update atts of this item based on any custom linkmod classes.
		$atts = self::update_atts_for_linkmod_type( $atts, $linkmod_classes );

		// Allow filtering of the $atts array before using it.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$atts_array = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		// Clear Item.
		$attributes = '';

		// Build a string of html containing all the atts for the item.
		foreach ( $atts_array as $attr => $value ) {
			if ( true !== empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		// Set a typeflag to easily test if this is a linkmod or not.
		$linkmod_type = self::get_linkmod_type( $linkmod_classes );

		// Args Before.
		if ( true === isset( $args->before ) ) {
			$item_output = $args->before;
		} else {
			$item_output = '';
		}

		// Start Internal Nav Item.
		if ( '' !== $linkmod_type ) {
			// is linkmod, output the required element opener.
			$item_output .= self::linkmod_element_open( $linkmod_type, $attributes );
		} else {
			// With no link mod type set this must be a standard <a> tag.
			$item_output .= '<a' . $attributes . '>';
		}

		// Initiate empty icon var.
		$icon_html = '';

		// If Icon Class String Set.
		if ( true !== empty( $icon_class_string ) ) {
			// append an <i> with the icon classes to what is output before links.
			$icon_html = '<i class="' . esc_attr( $icon_class_string ) . '" aria-hidden="true"></i> ';
		}

		// This filter is documented in wp-includes/post-template.php.
		// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		// Filters a menu item's title.
		// Documented in WordPress/wp-includes/class-walker-nav-menu.php.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		// If the .sr-only class was set apply to the nav items text only.
		if ( true === in_array( 'sr-only', $linkmod_classes, true ) ) {
			$title         = self::wrap_for_screen_reader( $title );
			$keys_to_unset = array_keys( $linkmod_classes, 'sr-only', true );

			foreach ( $keys_to_unset as $k ) {
				unset( $linkmod_classes[ $k ] );
			}
		}

		// Put the item contents into $output.
		if ( true === isset( $args->link_before ) ) {
			$item_output .= $args->link_before . $icon_html . $title . $args->link_after;
		}

		// End of Internal Nav Item.
		if ( '' !== $linkmod_type ) {
			// is linkmod, output the required element opener.
			$item_output .= self::linkmod_element_close( $linkmod_type, $attributes );
		} else {
			// With no link mod type set this must be a standard <a> tag.
			$item_output .= '</a>';
		}

		// Args .
		if ( true === isset( $args->after ) ) {
			$item_output .= $args->after;
		}

		// Append Contents To Output.
		// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}//end start_el()


	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. It is possible to set the
	 * max depth to include all depths, see walk() method.
	 *
	 * This method should not be called directly, use the walk() method instead.
	 *
	 * @since 1.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param object $element           Data object.
	 * @param array  $children_elements List of elements to continue traversing ( passed by reference ).
	 * @param int    $max_depth         Max depth to traverse.
	 * @param int    $depth             Depth of current element.
	 * @param array  $args              An array of arguments.
	 * @param string $output            Used to append additional content ( passed by reference ).
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( false === isset( $element ) ) {
			return;
		}

		$id_field = $this->db_fields['id'];

		// Display this element.
		if ( true !== empty( $children_elements[ $element->$id_field ] ) ) {
			$args[0]->has_children = $children_elements[ $element->$id_field ];

		} elseif ( true !== empty( $args[0] ) ) {
			$args[0]->has_children = '';
		}

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );

	}//end display_element()


	/**
	 * Menu Fallback
	 *
	 * @since 1.0.0
	 *
	 * @example \Secretum\Navwalker::fallback
	 *
	 * @param array $args {
	 *     Optional. An array of arguments.
	 *
	 *     @type string $arg['menu_name'] Unique name for menu. Default 'menu'.
	 *     @type string $arg['menu_text'] Menu label text. Default 'Create Menu'.
	 * }
	 */
	public static function fallback( $args = [] ) {
		$wp_list_pages = wp_list_pages( [ 'echo' => false ] );

		if ( true !== empty( $wp_list_pages ) ) {
			echo wp_kses_post( '<div id="navbarNavDropdown" class="collapse navbar-collapse">' );

			wp_nav_menu(
				[
					'depth'           => 1,
					'theme_location'  => '__false',
					'container'       => 'ul',
					'container_class' => 'container link-light link-gray-300-hover',
					'menu_class'      => 'navbar-nav ml-auto py-3',
					'menu_id'         => 'main-menu',
					'link_before'     => '<span class="px-2">',
					'link_after'      => '</span>',
					'echo'            => true,
				]
			);

			echo wp_kses_post( '<div>' );

		} else {

			if ( true === current_user_can( 'edit_theme_options' ) ) {
				// Build Args.
				$args = wp_parse_args(
					$args,
					[
						'menu_name' => 'menu',
						'menu_text' => __( 'Create Menu', 'secretum' ),
					]
				);

				$text    = esc_html( $args['menu_text'] );
				$url     = esc_url( admin_url( 'nav-menus.php' ) );
				$classes = secretum_textual( 'primary_nav_dropdown', 'return' );
				$html    = "<ul id=\"main-menu\" class=\"navbar-nav ml-auto py-3\" role=\"menubar\"><li class=\"menu-item\" role=\"none\"><a href=\"{$url}\" class=\"{$classes}\">{$text}</a></li></ul>";
			} else {
				// Build Args.
				$args = wp_parse_args(
					$args,
					[
						'menu_name' => 'menu',
						'menu_text' => __( 'Home', 'secretum' ),
					]
				);

				$url     = '#';
				$text    = esc_html( $args['menu_text'] );
				$classes = secretum_textual( 'primary_nav_dropdown', 'return' );
				$html    = "<ul id=\"main-menu\" class=\"navbar-nav py-3 w-100\" role=\"menubar\"><li class=\"menu-item\" role=\"none\"><a href=\"{$url}\" class=\"{$classes}\">{$text}</a></li></ul>";
			}

			$filtered = '<div id="navbarNavDropdown" class="collapse navbar-collapse">' . apply_filters( 'secretum_' . esc_attr( $args['menu_name'] ) . '_fallback', $html, 10, 1 ) . '</div>';

			echo wp_kses(
				$filtered,
				[
					'div' => [
						'id'    => true,
						'class' => true,
					],
					'ul'  => [
						'id'    => true,
						'class' => true,
					],
					'li'  => [
						'class' => true,
						'role'  => true,
					],
					'a'   => [
						'href'  => true,
						'class' => true,
					],
				]
			);
		}
	}//end fallback()


	/**
	 * Find any custom linkmod or icon classes and store in their holder
	 * arrays then remove them from the main classes array.
	 *
	 * Supported linkmods: .disabled, .dropdown-header, .dropdown-divider, .sr-only
	 * Supported iconsets: Font Awesome 4/5, Glypicons
	 *
	 * NOTE: This accepts the linkmod and icon arrays by reference.
	 *
	 * @since 1.0.0
	 *
	 * @param array   $classes         an array of classes currently assigned to the item.
	 * @param array   $linkmod_classes an array to hold linkmod classes.
	 * @param array   $icon_classes    an array to hold icon classes.
	 * @param integer $depth           an integer holding current depth level.
	 *
	 * @return array  $classes         a maybe modified array of classnames.
	 */
	private function separate_linkmods_and_icons_from_classes( $classes, &$linkmod_classes, &$icon_classes, $depth ) {
		// Loop through $classes array to find linkmod or icon classes.
		foreach ( $classes as $key => $class ) {
			// If any special classes are found, store the class in it's
			// holder array and and unset the item from $classes.
			if ( true === preg_match( '/^disabled|^sr-only/i', $class ) ) {
				// Test for .disabled or .sr-only classes.
				$linkmod_classes[] = $class;
				unset( $classes[ $key ] );
			} elseif ( true === preg_match( '/^dropdown-header|^dropdown-divider|^dropdown-item-text/i', $class ) && $depth > 0 ) {
				// Test for .dropdown-header or .dropdown-divider and a
				// depth greater than 0 - IE inside a dropdown.
				$linkmod_classes[] = $class;
				unset( $classes[ $key ] );
			} elseif ( true === preg_match( '/^fa-( \S* )?|^fa( s|r|l|b )?( \s? )?$/i', $class ) ) {
				// Font Awesome.
				$icon_classes[] = $class;
				unset( $classes[ $key ] );
			} elseif ( true === preg_match( '/^glyphicon-( \S* )?|^glyphicon( \s? )$/i', $class ) ) {
				// Glyphicons.
				$icon_classes[] = $class;
				unset( $classes[ $key ] );
			}
		}

		return $classes;

	}//end separate_linkmods_and_icons_from_classes()


	/**
	 * Return a string containing a linkmod type and update $atts array
	 * accordingly depending on the decided.
	 *
	 * @since 1.0.0
	 *
	 * @param array $linkmod_classes array of any link modifier classes.
	 *
	 * @return string Empty for default, a linkmod type string otherwise.
	 */
	private function get_linkmod_type( $linkmod_classes = [] ) {
		$linkmod_type = '';
		// Loop through array of linkmod classes to handle their $atts.
		if ( true !== empty( $linkmod_classes ) ) {
			foreach ( $linkmod_classes as $link_class ) {
				if ( true !== empty( $link_class ) ) {
					// check for special class types and set a flag for them.
					if ( 'dropdown-header' === $link_class ) {
						$linkmod_type = 'dropdown-header';
					} elseif ( 'dropdown-divider' === $link_class ) {
						$linkmod_type = 'dropdown-divider';
					} elseif ( 'dropdown-item-text' === $link_class ) {
						$linkmod_type = 'dropdown-item-text';
					}
				}
			}
		}

		return $linkmod_type;

	}//end get_linkmod_type()


	/**
	 * Update the attributes of a nav item depending on the limkmod classes.
	 *
	 * @since 1.0.0
	 *
	 * @param array $atts            array of atts for the current link in nav item.
	 * @param array $linkmod_classes an array of classes that modify link or nav item behaviors or displays.
	 *
	 * @return array Maybe updated array of attributes for item.
	 */
	private function update_atts_for_linkmod_type( $atts = [], $linkmod_classes = [] ) {
		if ( true !== empty( $linkmod_classes ) ) {
			foreach ( $linkmod_classes as $link_class ) {
				if ( true !== empty( $link_class ) ) {
					// Update $atts with a space and the extra classname.
					if ( 'sr-only' !== $link_class ) {
						$atts['class'] .= ' ' . esc_attr( $link_class );
					}

					// Check for special class types we need additional handling for.
					if ( 'disabled' === $link_class ) {
						// Convert link to '#' and unset open targets.
						$atts['href'] = '#';
						unset( $atts['target'] );
					} elseif ( 'dropdown-header' === $link_class || 'dropdown-divider' === $link_class || 'dropdown-item-text' === $link_class ) {
						// Store a type flag and unset href and target.
						unset( $atts['href'] );
						unset( $atts['target'] );
					}
				}
			}
		}

		return $atts;

	}//end update_atts_for_linkmod_type()


	/**
	 * Wraps the passed text in a screen reader only class.
	 *
	 * @since 1.0.0
	 *
	 * @param string $text String of text to be wrapped in a screen reader class.
	 *
	 * @return string String wrapped in a span with the class.
	 */
	private function wrap_for_screen_reader( $text = '' ) {
		if ( true !== empty( $text ) ) {
			$text = '<span class="sr-only">' . $text . '</span>';
		}

		return $text;

	}//end wrap_for_screen_reader()


	/**
	 * Returns the correct opening element and attributes for a linkmod.
	 *
	 * @since 1.0.0
	 *
	 * @param string $linkmod_type Sting containing a linkmod type flag.
	 * @param string $attributes   String of attributes to add to the element.
	 *
	 * @return string A string with the openign tag for the element with attribibutes added.
	 */
	private function linkmod_element_open( $linkmod_type, $attributes = '' ) {
		$output = '';

		if ( 'dropdown-item-text' === $linkmod_type ) {
			$output .= '<span class="dropdown-item-text"' . $attributes . '>';
		} elseif ( 'dropdown-header' === $linkmod_type ) {
			// For a header use a span with the .h6 class instead of a real
			// header tag so that it doesn't confuse screen readers.
			$output .= '<span class="dropdown-header h6"' . $attributes . '>';
		} elseif ( 'dropdown-divider' === $linkmod_type ) {
			// this is a divider.
			$output .= '<div class="test dropdown-divider"' . $attributes . '>';
		}

		return $output;

	}//end linkmod_element_open()


	/**
	 * Return the correct closing tag for the linkmod element.
	 *
	 * @since 1.0.0
	 *
	 * @param string $linkmod_type String containing a special linkmod type.
	 *
	 * @return string String with the closing tag for this linkmod type.
	 */
	private function linkmod_element_close( $linkmod_type ) {
		$output = '';

		if ( 'dropdown-header' === $linkmod_type || 'dropdown-item-text' === $linkmod_type ) {
			// For a header use a span with the .h6 class instead of a real
			// header tag so that it doesn't confuse screen readers.
			$output .= '</span>';
		} elseif ( 'dropdown-divider' === $linkmod_type ) {
			// this is a divider.
			$output .= '</div>';
		}

		return $output;

	}//end linkmod_element_close()

}//end class
