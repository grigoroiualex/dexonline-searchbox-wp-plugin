<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Dexonline_Searchbox
 * @subpackage Dexonline_Searchbox/includes
 */

/**
 * Define the appearance of the widget
 *
 * Implements the methods needed to create and maintain the widget
 *
 * @package    Dexonline_Searchbox
 * @subpackage Dexonline_Searchbox/includes
 * @author     Alexandru Marian Grigoroiu <grigoroiu.alexandru@gmail.com>
 */

class Dexonline_Searchbox_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'dexonline_searchbox_widget', // Base ID
            __('Dexonline Searchbox', 'text_domain') // Name
        );
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget

        $title = apply_filters( 'widget_title', 'Dexonline Searchbox' );
        $name = $instance['name'];
        $show_info = isset( $instance['show_info'] ) ? $instance['show_info'] : false;

        echo $args['before_widget'];

        // Display the widget title
        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        //Display the name
        if ( $name )
            printf( '<p>' . __('Hey their Sailor! My name is %1$s.', 'example') . '</p>', $name );
         
        if ( $show_info )
            printf( $name );
         
        echo $args['after_widget'];

    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form( $instance ) {
        // outputs the options form on admin
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved
    }
    
    // register Dexonline Searchbox Widget
    public function register_dexonline_searchbox_widget() {
        register_widget( 'Dexonline_Searchbox_Widget' );
    }

}

