<?php
namespace MCQ\Admin;

trait Submenu {

    public function wp_admin_submenu() {
        global $submenu;

        $capability = 'manage_options';

        $submenu[ PAGE_SLUG ][] = array( __( 'Report', 'mcq_system' ), $capability, 'admin.php?page=' . PAGE_SLUG . '#/' );
        $submenu[ PAGE_SLUG ][] = array( __( 'MCQ', 'mcq_system' ), $capability, 'admin.php?page=' . PAGE_SLUG . '#/mcq' );
    }

}