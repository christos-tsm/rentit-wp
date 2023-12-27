<?php
class Rentit_CPT {
    public function __construct() {
        add_action('init', array($this, 'create_custom_post_type'));
    }
    public function create_custom_post_type() {
        $args = array(
            'public' => true,
            'label'  => 'Rentals',
            'supports' => array('title', 'editor', 'thumbnail')
        );
        register_post_type('rental', $args);
    }
}
