<?php
namespace MCQ\Admin;

trait Menu {

    public function wp_admin_menu() {
		$menu = add_menu_page(
			__( 'MCQ System', 'mcq-system' ),
			__( 'MCQ System', 'mcq-system' ),
			'manage_options',
			PAGE_SLUG,
			[ $this, 'mcq_system_cb'],
			'dashicons-lightbulb',
			76
		);
		add_action( 'load-' . $menu, [ $this, 'mcq_system_scripts' ] );
	}

	public function mcq_system_scripts() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_styles' ] );
	}

	public function mcq_system_cb() {
		?>
		<div id='app'></div>
		<?php
	}    
}