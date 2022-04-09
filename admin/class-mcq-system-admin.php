<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://mrinalbd.com/
 * @since      1.0.0
 *
 * @package    Mcq_System
 * @subpackage Mcq_System/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Mcq_System
 * @subpackage Mcq_System/admin
 * @author     Mrinal Haque <mrinalhaque99@gmail.com>
 */
class Mcq_System_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('init', array( $this, 'mcq_custom_posts' ) );
		add_action( 'widgets_init', array( $this, 'mcq_widget') );
	}

	public function mcq_custom_posts() {
		register_post_type('mcq_question',
			array(
				'labels'      => array(
					'name'          => __('MCQ Questions', 'mcq'),
					'singular_name' => __('MCQ Question', 'mcq'),
					'add_new'		=> __('Add MCQ Question', 'mcq')
				),
				'public'      => true,
				'has_archive' => true,
				'supports'           => array( 'title', 'editor' ),
			)
		);
	}

	public function mcq_widget() {
		register_widget( 'MCQ_Widget' );
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mcq_System_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mcq_System_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mcq-system-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Mcq_System_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Mcq_System_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mcq-system-admin.js', array( 'jquery' ), $this->version, false );
		wp_localize_script($this->plugin_name, 'ajax_var', array(
			'url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('ajax-nonce')
		));

	}

}
