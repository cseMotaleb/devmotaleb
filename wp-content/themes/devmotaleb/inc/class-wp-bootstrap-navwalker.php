<?php
if ( ! class_exists( 'WP_Bootstrap_Navwalker' ) ) :

class WP_Bootstrap_Navwalker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        // Add classes for menu items
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item'; // Bootstrap nav-item class

        // Add active class if it's the current page
        if ( in_array( 'current-menu-item', $classes ) || in_array( 'current-menu-parent', $classes ) ) {
            $classes[] = 'active'; // Add Bootstrap active class
        }

        // Add dropdown class if the item has children
        if ( isset( $args->has_children ) && $args->has_children ) {
            $classes[] = 'dropdown';
        }

        // Generate class names
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Generate the list item
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li' . $id . $class_names .'>';

        // Link attributes
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
        $atts['href']   = ! empty( $item->url ) ? $item->url : '';
        $atts['class']  = 'nav-link'; // Bootstrap nav-link class

        // Add Bootstrap classes to dropdown links
        if ( isset( $args->has_children ) && $args->has_children ) {
            $atts['href'] = '#';
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-toggle'] = 'dropdown';
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
            }
        }

        // Add the link
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    public function display_element( $element, &$children_elements, $max_depth, $depth = 0, $args = array(), &$output ) {
        if ( ! $element ) {
            return;
        }

        // Check if the current menu item has children
        $element->has_children = ! empty( $children_elements[ $element->ID ] );
        
        // Call the parent display_element method
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}

endif;
?>
