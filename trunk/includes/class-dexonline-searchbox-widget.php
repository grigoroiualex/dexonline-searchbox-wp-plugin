<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       http://dexonline.ro/unelte
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
 * @author     Alexandru Marian Grigoroiu <grigoroiualexandru@gmail.com>
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
     * @param array $args	Widget arguments.
     * @param array $instance	Saved values from database.
     */
    public function widget( $args, $instance ) {
        $instance['title'] = 'Dexonline Searchbox';

        // outputs the content of the widget
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }

        ?>
        <div id="ds-form-wrapper">
            <input id="ds-searchbox" type="text" name="ds-searchbox" placeholder="<?php echo __( 'Search word', 'text_domain' ); ?>">
            <button id="ds-search-button" type="button">Submit</button>
        </div>
        <div id="ds-results"></div>
        <?php

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

